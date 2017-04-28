<?php
/**
 * 获取文档并写入数据
 *
 * @author  Leelmes <i@chengxuan.li>
 * @since 2017年2月21日
 */
class DocsFetch {
    /**
     * 输出目录DIR
     * 
     * @var string
     */
    protected $_output_dir;

    /**
     * 构造方法
     * 
     * @param string $output_dir
     */
    public function __construct($output_dir) {
        $this->_output_dir = $output_dir;
    }

    /**
     * 处理一条数据
     * 
     * @param string $class_name
     * @param string $path_prefix
     * 
     * @return number
     */
    public function processEq($class_name, $path_prefix = '') {
        $content = Model_Parse::showDoc($class_name);
        
        if ($content) {
            $path = str_replace('\\', '-', $class_name);
            $path_prefix && $path = "{$path_prefix}/{$path}";
            $result = $this->write($path, $content);
        } else {
            $result = false;
        }
        
        return $result;
    }

    /**
     * 处理前缀
     * 
     * @param string $class_prefix
     * 
     * @return number
     */
    public function processPrefix($class_prefix) {
        $declared_classes = get_declared_classes();
        $declared_interfaces = get_declared_interfaces();
        
        // 过滤方法
        $filter_function = function($value) use ($class_prefix) {
            return stripos($value, $class_prefix) === 0;
        };
        
        $classes = array_filter($declared_classes, $filter_function);
        $interfaces = array_filter($declared_interfaces, $filter_function);
        
        foreach ($classes as $class_name) {
            $this->processEq($class_name, trim($class_prefix, '/_'));
        }
        
        foreach ($interfaces as $class_name) {
            $this->processEq($class_name, trim($class_prefix, '/_'));
        }
        
        return count($classes);
    }
    
    /**
     * 从PHP手册获取
     * 
     * @param string $extension
     * 
     * @return number
     */
    public function processManual($extension) {
        $total = 0;
        $model_manual = new Model_Manual();
        $model_manual->process($extension, function($path, $content) use (& $total, $extension) {
            $this->write("{$extension}/{$path}", $content);
            ++$total;
        });
        return $total;
    }
    
    /**
     * 处理函数名称
     * 
     * @param string $name
     */
    public function processFuncs($name) {
        $defined_functions = get_defined_functions();

        $content = Model_Parse::showTitle("{$name} functions");
        foreach ($defined_functions['internal'] as $value) {
            if (stripos($value, $name) !== false) {
                $content .= Model_Parse::showFunction($value);
            }
        }
        
        if ($content) {
            $path = str_replace('\\', '_', $name);
            $result = $this->write($path, $content);
        } else {
            $result = false;
        }
        return $result;
    }
    
    /**
     * 写入数据
     * 
     * @param string $path    目录相对路径
     * @param string $content 内容
     */
    public function write($path, $content) {
        $path = "{$this->_output_dir}{$path}.php";
        $dir = dirname($path);
        if (!is_dir($dir)) {
            mkdir($dir, 0775, true);
        }
        return file_put_contents($path, $content);
    }
}