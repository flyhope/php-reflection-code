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
        `$cmd`;
        
        $dir = new DirectoryIterator($docs_xml_dir);
        foreach($dir as $file) {
            $pathname = $file->getPathname();
            $filename = $file->getFilename();
    
            //不处理.开头的任何东西 和 目录
            if(strpos($filename, '.') === 0 || $file->isDir()) {
                continue;
            }
    
            // 只处理指定扩展开头的
            if(stripos($filename, $ext_name) === 0) {
                $response = self::_parseXmlDocs($file, $ext_name);
                call_user_func($callback, pathinfo($filename, PATHINFO_FILENAME), $response);
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

        //获取类注释
        $content_class = '';
        if(preg_match("#<section xml:id=\"{$name}.intro\">(.+)</section>#isU", $xml, $section_intro)) {
            if(preg_match_all('#<para>(.*)</para>#sU', $section_intro[1], $para)) {
                $content_class = self::_formatContent($para[1]);
            }
        }

        // 获取类名称
        preg_match('#<classsynopsisinfo>(.+)</classsynopsisinfo>#isU', $xml, $classsynopsisinfo);
        $classsynopsisinfo = simplexml_load_string($classsynopsisinfo[0]);
        foreach($classsynopsisinfo->ooclass as $value) {
            $modifier = isset($value->modifier) ? $value->modifier : '';
            switch($modifier) {
                case 'extends' :
                    break;
                default :
                    $class_name = $value->classname;
                    break 2;
            }
        }
    
        // 初始化处理类
        $refdoc = new Model_Refdoc((string)$class_name);
        $refdoc->class_content = $content_class;
        $refdoc->package = ucfirst($ext_name);
    
        //处理类属性
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
    
            $refdoc->fields[$varname] = array(
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
    
                        $method_params[$parameter] = array(
                            'type'		  => (string)$value->type,
                            'content'     => $func_para_content,
                            'choice_opt'  => $choice_opt,
                            'initializer' => $initializer,
                        );
                    }
    
                    if($method_name) {
                        $refdoc->methods[$method_name] = array(
                            'params'	=> $method_params,
                            'type'		=> (string)$methodsynopsis->type,	//返回值类型
                            'content'   => $method_content,
                        );
                    }
                }
            }
        }
    
        return $refdoc->show();
    }
    
}