<?php

/**
 * 解析生成文档方法
 *
 * @package Model
 * @author  chengxuan <chengxuan@staff.weibo.com>
 */
class Model_Parse {
    
    /**
     * 显示文档
     * 
     * @param string $class_name
     * 
     * @return string|boolean
     */
    static public function showDoc($class_name) {
        
        try {
            $reflection = new ReflectionClass($class_name);
        } catch(ReflectionException $e) {
            return false;
        }
        
        // Class 定义
        $doc_title = ucfirst($class_name) . " Document";
        $result = self::showTitle($doc_title);
        
        $result .= self::showClass($class_name, $reflection) . " {\n\n";

        // 输出常量
        foreach ($reflection->getConstants() as $key => $value) {
            $result .= "const {$key} = " . var_export($value, true) . ";\n";
        }
        
        // 输出属性
        foreach ($reflection->getProperties() as $propertie) {
            $result .= self::showPropertie($propertie) . "\n";
        }
        
        //输出方法 
        $result .= "\n";
        foreach($reflection->getmethods() as $value) {
            $result .= self::showMethod($value) . "\n";
        }

        // 文件结尾
        $result .= "}\n";
        return $result;
    }
    
    /**
     * 获取文件标题
     * 
     * @param string $doc_title
     * 
     * @return string
     */
    static public function showTitle($doc_title) {
        $result = "<?php\n";
        $result .= "/**\n";
        $result .= " * {$doc_title}\n";
        $result .= " *\n";
        $result .= " * @author Leelmes <i@chengxuan.li>\n";
        $result .= " */\n";
        return $result;
    }
    
    /**
     * 获取函数定义
     * 
     * @param string $function_name
     * 
     * @return string
     */
    static public function showFunction($function_name) {
        $reflection = new ReflectionFunction($function_name);
        $namespace = $reflection->getNamespaceName();
        $function_name = $reflection->getName();
        $parameters = $reflection->getParameters();
        
        $result = "function {$function_name}";
        $result .= self::showParameters($parameters);
        $result .= " {}\n";
        return $result;
    }
    
    /**
     * 获取Class定义的方法
     * 
     * @param string          $class_name
     * @param ReflectionClass $reflection_class
     */
    static public function showClass($class_name, ReflectionClass $reflection_class) {
        $is_interface = $reflection_class->isInterface();
        $is_abstract = $reflection_class->isAbstract();
        $is_final = $reflection_class->isFinal();
        $parent_class = $reflection_class->getParentClass();
        $parent_name = $parent_class ? $parent_class->getName() : '';
        $interface_names = $reflection_class->getInterfaceNames();
        
        // 此处不能反射，有些扩展定义的不规范
        $class_path = explode('\\', $class_name);
        $class_basename = array_pop($class_path);
        $namespace = $class_path ? implode('\\', $class_path) : '';
        
        // 处理命名空间
        $result = '';
        if ($namespace) {
            $result .= "namespace {$namespace};\n";
        }

        if ($is_interface) {
            $result .= 'interface ';
        } else {
            $is_abstract && $result .= 'abstract ';
            $is_final && $result .= 'final ';
            $result .= 'class ';
        }

        $result .= $class_basename;
        $parent_name && $result .= " extends \\{$parent_name}";
        
        //追加Interface
        $interface_names = $reflection_class->getInterfaceNames();
        if($interface_names) {
            $result .= ' implements \\' . implode(',\\', $interface_names);
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
    static public function showPropertie(ReflectionProperty $propertie) {
        $propertie_name = $propertie->getName();
        $modifiers = Reflection::getModifierNames($propertie->getModifiers());
        $result = implode(' ', $modifiers) . ' $' . $propertie_name;
        
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
    static public function showMethod(ReflectionMethod $reflection_method) {
        $is_abstract = $reflection_method->isAbstract();
        $is_static = $reflection_method->isStatic();
        $visibility = self::_showVisibility($reflection_method);
        
        $result = '';
        $is_abstract && $result .= 'abstract ';
        $is_static && $result .= 'static ';
        $visibility && $result .= "{$visibility} ";
        $result .= 'function ' . $reflection_method->getName();
        
        $parameters = $reflection_method->getParameters();
        $result .= self::showParameters($parameters);
        $result .= $is_abstract ? ';' : ' {}';
        return $result;
    }
    
    /**
     * 显示参数
     * 
     * @param array $parameters
     * 
     * @return string
     */
    static public function showParameters(array $parameters) {
        $result = '(';
        foreach($parameters as $parameter) {
            /* @var ReflectionParameter $parameter */
            $para_name = $parameter->getName();
            $parameter->isPassedByReference() && $result .= '& ';
            $result .= "\${$para_name}";
            if ($parameter->isOptional()) {
                $result .= ' = null';
            }
            $result .= ', ';
        }
        $result = rtrim($result, ', ');
        $result .= ')';
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
