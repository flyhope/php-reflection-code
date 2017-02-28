<?php
/**
 * 反射生成文档
 *
 * @author  Leelmes <i@chengxuan.li>
 * @since 2017年2月22日
 */
class Model_Refdoc {
    /**
     * 文档缩进
     * 
     * @var string
     */
    const INDENT = '    ';
    
    /**
     * 结果集
     * 
     * @var string
     */
    protected $_result = '';
    
    /**
     * 类名
     * 
     * @var string
     */
    protected $_class_name = '';
    
    /**
     * 类描述
     * @var unknown
     */
    public $class_content = '';
    
    /**
     * 类包
     * 
     * @var unknown
     */
    public $package = '';
    
    /**
     * 属性扩展数据
     * 
     * @example array('key' => ['content' => '注释'])
     * 
     * @var array
     */
    public $fields = array();
    
    /**
     * 方法扩展数据
     * 
     * @var array
     */
    public $methods = array();
    
    /**
     * 获取类名
     * 
     * @param string $class_name
     * 
     * @return string
     */
    public function __construct($class_name) {
        $this->_class_name = $class_name;
    }
    
    /**
     * 配置选项，传处数组
     * 
     * @return array
     */
    public function show() {
        
        try {
            $reflection = new ReflectionClass($this->_class_name);
        } catch(ReflectionException $e) {
            return false;
        }
        
        // Class 定义
        $doc_title = ucfirst($this->_class_name) . " Document";
        $result = "<?php\n";
        $result .= "/**\n";
        $result .= " * {$doc_title}\n";
        $result .= " *\n";
        
        // 类描述
        if ($this->class_content) {
            $class_content = str_replace("\n", "\n * ", $this->class_content);
            $result .= " * {$class_content}\n * \n";
            unset($class_content);
        }
        
        // 类包
        if ($this->package) {
            $result .= " * @package {$this->package} \n";
        }
        
        // 固定作者
        $result .= " * @author Leelmes <i@chengxuan.li>\n";
        $result .= " */\n";
        
        // 类名
        $result .= $this->showClass($reflection) . " {\n\n";
        
        // 输出常量
        foreach ($reflection->getConstants() as $key => $value) {
            $result .= $this->_indent("const {$key} = " . var_export($value, true) . ";\n", 1);
        }
        
        // 输出属性
        foreach ($reflection->getProperties() as $propertie) {
            $result .= $this->_indent($this->showPropertie($propertie) . "\n\n", 1);
        }
        
        //输出方法 
        $result .= "\n";
        foreach($reflection->getmethods() as $value) {
            $result .= $this->_indent($this->showMethod($value) . "\n\n", 1);
        }

        // 文件结尾
        $result .= "}\n";
        return $result;
    }
    

    /**
     * 缩进长度
     * 
     * @param string $data
     * @param int    $n
     * 
     * @return string
     */
    protected function _indent($data, $n) {
        $indent = str_repeat(self::INDENT, 1);
        $data = $indent . str_replace("\n", "\n{$indent}", $data);
        $data = rtrim($data, "\t ");
        return $data;
    }
    
    /**
     * 获取Class定义的方法
     * 
     * @param ReflectionClass $reflection_class
     */
    public function showClass(ReflectionClass $reflection_class) {
        $is_abstract = $reflection_class->isAbstract();
        $is_final = $reflection_class->isFinal();
        $parent_class = $reflection_class->getParentClass();
        $parent_name = $parent_class ? $parent_class->getName() : '';
        $interface_names = $reflection_class->getInterfaceNames();
        
        // 处理命名空间
        $result = '';
        $namespace = $reflection_class->getNamespaceName();
        if ($namespace) {
            $result .= "namespace {$namespace};\n";
        }
        
        
        $is_abstract && $result .= 'abstract ';
        $is_final && $result .= 'final ';
        $result .= 'class ';
        $result .= $reflection_class->getShortName();
        $parent_name && $result .= " extends {$parent_name}";
        
        //追加Interface
        $interface_names = $reflection_class->getInterfaceNames();
        if($interface_names) {
            $result .= ' implements ' . implode(',', $interface_names);
        }
        
        return $result;
    }
    
    /**
     * 获取属性
     * 
     * @param ReflectionProperty $propertie
     * 
     * @return string
     */
    public function showPropertie(ReflectionProperty $propertie) {
        $propertie_name = $propertie->getName();
        
        // 拼接注释
        $result = '';
        if(!empty($this->fields[$propertie_name]['content'])) {
            $result .= "/**\n";
            $response_field_content = str_replace("\n", "\n * ", $this->fields[$propertie_name]['content']);
            $result .= " * {$response_field_content}\n";
            $result .= " */\n";
        }
        
        // 定义属性
        $modifiers = Reflection::getModifierNames($propertie->getModifiers());
        $result .= implode(' ', $modifiers) . ' $' . $propertie_name;        
        $default_properties = $propertie->getDeclaringClass()->getDefaultProperties();
        if (isset($default_properties[$propertie_name])) {
            $result .= ' = ' . var_export($default_properties[$propertie_name], true);
        }
        
        $result .= ";";
        
        return $result;
    }
    
    /**
     * 展示方法的定义CODE
     * 
     * @param ReflectionMethod $reflection_method
     * 
     * @return string
     */
    public function showMethod(ReflectionMethod $reflection_method) {
        $method_name = $reflection_method->getName();
        $is_abstract = $reflection_method->isAbstract();
        $is_static = $reflection_method->isStatic();
        $visibility = self::_showVisibility($reflection_method);
        
        // 处理注释
        $result = '';
        if (!empty($this->methods[$method_name])) {
            $result .= "/**\n";
        }

        //处理描述
        if(!empty($this->methods[$method_name]['content'])) {
            $result .= " * {$this->methods[$method_name]['content']}\n";
        }
        if(!empty($this->methods[$method_name]['params'])) {
            $result .= " *\n";
            foreach($this->methods[$method_name]['params'] as $parameter => $param) {
                $result .= " * @param {$param['type']} \${$parameter} {$param['content']}\n";
            }
        }
        
        //返回值类型
        if(!empty($this->methods[$method_name]['type'])) {
            $result .= " *\n";
            $result .= " * @return {$this->methods[$method_name]['type']}\n";
        }
        
        // 注释结束
        if (!empty($this->methods[$method_name])) {
            $result .= " */\n";
        }
        
        $is_abstract && $result .= 'abstract ';
        $is_static && $result .= 'static ';
        $visibility && $result .= "{$visibility} ";
        $result .= 'function ' . $method_name . '(';
        
        $parameters = $reflection_method->getParameters();
        foreach($parameters as $parameter) {
            /* @var ReflectionParameter $parameter */
            $para_name = $parameter->getName();
            $parameter->isPassedByReference() && $result .= '& ';
            $result .= $para_name === '...' ? '... $parameter' : "\${$para_name}";
            if ($parameter->isOptional()) {
                if (isset($this->methods[$method_name]['params'][$para_name]['initializer'])) {
                    $default = $this->methods[$method_name]['params'][$para_name]['initializer'];
                } else {
                    $default =  'null';
                }
                $result .= " = {$default}";
            }
            $result .= ', ';
        }
        $result = rtrim($result, ', ');
        $result .= ')';
        $result .= $is_abstract ? ';' : ' {}';
        return $result;
    }
    
    /**
     * 获取方法或属性可见性
     * 
     * @param Reflector $reflection 反射方法或者反射属性
     * 
     * @return string
     */
    static protected function _showVisibility(Reflector $reflection) {
        $result = '';
        if($reflection->isPublic()) {
            $result = 'public';
        } elseif($reflection->isProtected()) {
            $result = 'protected';
        } elseif($reflection->isPrivate()) {
            $result = 'private';
        }
        return $result;
    }
    
    
}

