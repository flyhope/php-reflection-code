<?php
/**
 * 通过PHP手册生成文档
 *
 * @author  Leelmes <i@chengxuan.li>
 * @since 2017年2月21日
 */
class Model_Manual {
    

    /**
     * 扫描处理
     *
     * @param string   $ext_name
     * @param callable $callback
     */
    public static function process($ext_name, callable $callback) {
        $docs_xml_root = APP_PATH . 'docs_xml_dir/';
        $docs_xml_dir = $docs_xml_root . $ext_name;
        
        if (!is_dir($docs_xml_root)) {
            mkdir($docs_xml_root, 0775, true);
        }
        
        // SVN签出
        $cmd = "svn export 'http://svn.php.net/repository/phpdoc/zh/trunk/reference/{$ext_name}' {$docs_xml_dir} --force";
        shell_exec($cmd);
        echo $cmd;exit;
        
        $dir = new DirectoryIterator($docs_xml_dir);
        foreach($dir as $file) {
            $pathname = $file->getPathname();
            $filename = $file->getFilename();
    
            //不处理.开头的任何东西
            if(strpos($filename, '.') === 0) {
                continue;
            }
    
            //不处理目录
            if($file->isDir()) {
                continue;
            }
    
            // 只处理指定扩展开头的
            if(strpos($filename, $ext_name) === 0) {
                $response = self::_parseXmlDocs($file, $ext_name);
                call_user_func($callback, $filename, $response);
            }
        }
    }
    
    /**
     * 格式化注释
     * 
     * @var string $cotnent
     */
    protected static function _formatContent($content) {
        $content = implode("\n", $content);
        $content = strip_tags(trim($content));
        $content = str_replace(array('<![CDATA[', ']]>'), '', $content);
        $content = str_replace('*/', '* /', $content);
        $content = preg_replace("#\s*\n\s*#s", "\n", $content);
        return $content;
    }
    
    /**
     * 解析XML为DOCS格式
     * 
     * @param SplFileInfo $file
     * @param string      $ext_name
     * 
     * @return string
     */
    protected static function _parseXmlDocs(SplFileInfo $file, $ext_name) {
        $xml = file_get_contents($file->getPathname());
        $name = pathinfo($file->getFilename(), PATHINFO_FILENAME);
    
        //获取类信息
        preg_match('#<classsynopsisinfo>(.+)</classsynopsisinfo>#isU', $xml, $classsynopsisinfo);
        $classsynopsisinfo = simplexml_load_string($classsynopsisinfo[0]);
    
        //获取类注释
        $class_content = '';
        if(preg_match("#<section xml:id=\"{$name}.intro\">(.+)</section>#isU", $xml, $section_intro)) {
            if(preg_match_all('#<para>(.*)</para>#sU', $section_intro[1], $para)) {
                $class_content = self::_formatContent($para[1]);
            }
        }
    
        //处理对象入继承
        $class_modifier = array();
        foreach($classsynopsisinfo->ooclass as $value) {
            $modifier = isset($value->modifier) ? $value->modifier : '';
            switch($modifier) {
                case 'extends' :
                    $extends = $value->classname;
                    break;
                case 'abstract' :
                case 'final' :
                case '' :
                    $modifier && $class_modifier[] = $modifier;
                    $class_name = $value->classname;
                    break;
            }
        }
    
        //处理引入的接口
        $interface = array();
        foreach($classsynopsisinfo->oointerface as $value) {
            $interface[] = $value->interfacename;
        }
    
        //处理类属性
        $fields = array();
        preg_match_all("#<fieldsynopsis>.+</fieldsynopsis>#isU", $xml, $fieldsynopsis);
        foreach($fieldsynopsis[0] as $value) {
            $field_xml_obj = simplexml_load_string($value);
    
            //获取类属性注释
            $varname = (string)$field_xml_obj->varname;
            $field_content = '';
            if(preg_match("#<varlistentry xml:id=\"{$name}.props.{$varname}\">(.+)</varlistentry>#isU", $xml, $varlistentry)) {
                if(preg_match_all('#<para>(.*)</para>#sU', $section_intro[1], $varlistentry)) {
                    $field_content = self::_formatContent($varlistentry[1]);
                }
            }
    
            $fields[] = array(
                'modifier'	=> (string)$field_xml_obj->modifier,
                'varname'	=> $varname,
                'content'   => $field_content,
            );
        }
    
        //处理类方法
        $methods = array();
        $func_dir = $file->getPath() . '/' . str_replace('-', '_', pathinfo($file->getFilename(), PATHINFO_FILENAME));
        if(is_dir($func_dir)) {
            $func_dir = new DirectoryIterator($func_dir);
            foreach($func_dir as $funcfile) {
                if(pathinfo($funcfile->getFilename(), PATHINFO_EXTENSION) === 'xml') {
                    $func_xml = file_get_contents($funcfile->getPathname());
                    preg_match("#<methodsynopsis>.+</methodsynopsis>#isU", $func_xml, $methodsynopsis);
                    $methodsynopsis = $methodsynopsis[0];
                    $methodsynopsis = simplexml_load_string($methodsynopsis);
    
    
                    //获取方法名称
                    $method_name = (string)$methodsynopsis->methodname;
                    $method_name = ltrim(strrchr($method_name, ":"), ":");
    
                    //获取方法描述
                    $method_content = '';
                    if(preg_match('#<refpurpose>(.+)</refpurpose>#sU', $func_xml, $refpurpose)) {
                        $method_content = trim($refpurpose[1]);
                    }
                     
                    //获取方法修饰
                    $method_modifiter = array();
                    foreach($methodsynopsis->modifier as $value) {
                        $value = strtolower((string)$value);
                        $method_modifiter[] = $value;
                        	
                        //有抽象方法的类必需定义为抽象类
                        if($value === 'abstract') {
                            if(!in_array('abstract', $class_modifier)) {
                                $class_modifier[] = 'abstract';
                            }
                        }
                    }
    
                    //获得方法参数
                    $method_params = array();
                    foreach($methodsynopsis->methodparam as $value) {
                        //获取参数是不是可选参数
                        $attributes = $value->attributes();
                        $choice_opt = (string)$attributes->choice === 'opt';
    
                        //获取可选参数默认值
                        $parameter = (string)$value->parameter;
                        $initializer = (string)$value->initializer;
                        $initializer === '' && $initializer = 'null';
    
                        //获取方法参数的注释
                        $func_para_content = '';
                        if(preg_match("#<varlistentry>.*<parameter>{$parameter}</parameter>(.+)</varlistentry>#isU", $func_xml, $varlistentry)) {
                            if(preg_match_all('#<para>(.*)</para>#sU', $varlistentry[1], $func_para_para)) {
                                $func_para_content = self::_formatContent($func_para_para[1]);
                                $func_para_content = str_replace("\n", ' ', $func_para_content);
                            }
                        }
    
                        $method_params[] = array(
                            'type'		  => (string)$value->type,
                            'parameter'	  => $parameter,
                            'content'     => $func_para_content,
                            'choice_opt'  => $choice_opt,
                            'initializer' => $initializer,
                        );
                    }
    
                    if($method_name) {
                        $methods[] = array(
                            'name'	=> $method_name,
                            'modifiter'	=> $method_modifiter,
                            'params'	=> $method_params,
                            'type'		=> (string)$methodsynopsis->type,	//返回值类型
                            'content'   => $method_content,
                        );
                    }
                }
            }
        }
    
    
        //处理数据
        $response = "<?php\n";
        $response .= "/**\n";
        if($class_content) {
            $response_class_content = str_replace("\n", "\n * ", $class_content);
            $response .= " * {$response_class_content}\n * \n";
        }
        $response .= " * @package {$ext_name}\n";
        $response .= " * @author Leelmes <i@chengxuan.li> (DOC Only)\n";
        $response .= " */\n";
    
        $class_modifier && $response .= implode(" ", $class_modifier). " ";	//类标识
        $response .= "class {$class_name}";	//类名称
        !empty($extends) && $response .= " extends {$extends}";	//继承
        $interface && $response .= " implements ". implode(",", $interface);	//引入的接口
        $response.= " {\n";
    
        //处理属性
        if($fields) {
            foreach($fields as $value) {
                if($value['modifier'] === 'const') {
                    $value['varname'] = ltrim(strrchr($value['varname'], ":"), ":");
                    $response.= "\n    {$value['modifier']} {$value['varname']} = null;\n";
                } else {
                    if($value['content']) {
                        $response .= "\n    /**\n";
                        $response_field_content = str_replace("\n", "\n     * ", $value['content']);
                        $response .= "     * {$response_field_content}\n";
                        $response .= "     */";
                    }
                    $response.= "\n    {$value['modifier']} \${$value['varname']};\n";
                }
            }
            $response .= "\n";
        }
    
        //处理方法
        $response_method = "";
        if($methods) {
            foreach($methods as $method) {
                $response_method .= "    /**\n";
    
                //处理描述
                if($method['content']) {
                    $response_method .= "     * {$method['content']}\n";
                }
    
                //处理参数
                $parameter = array();
                if($method['params']) {
                    $response_method .= "     *\n";
                    foreach($method['params'] as $param) {
                        $response_method.= "     * @param {$param['type']} \${$param['parameter']} {$param['content']}\n";
                        if(trim($param['parameter'], '.')) {
                            $current_parameter = '$' . $param['parameter'];
                            $param['choice_opt'] && $current_parameter .= " = {$param['initializer']}"; //可选参数
                            $parameter[] = $current_parameter;
                        }
                    }
                }
                	
                //返回值类型
                if($method['type']) {
                    $response_method .= "     *\n";
                    $response_method .= "     * @return {$method['type']}\n";
                }
                $response_method .= "     */\n";
    
                //处理实体
                $response_method .= "    ";
                $method['modifiter'] && $response_method .= implode(" ", $method['modifiter']). " ";
                $response_method .= 'function ' . $method['name'] . '(';
                if($method['params']) {
                    $response_method.= implode(", ", $parameter);
                }
                $response_method .= ') ';
                $response_method .= in_array("abstract", $method['modifiter']) ? ';' : '{}';
                $response_method .=  "\n\n";
    
            }
        }
        $response .= $response_method;
    
        //处理结束
        $response .= "\n}";
        return $response;
    }
    
}