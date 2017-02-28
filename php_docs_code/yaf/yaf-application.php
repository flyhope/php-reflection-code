<?php
/**
 * Yaf_Application Document
 *
 * Yaf_Application为应用提供了一个辅助设施。
 * 它提供了可重用的资源，常见的和模块化的引导类，还有依赖的检查。
 * Yaf_Application实现了单例模式。
 * Yaf_Application不能够被序列化和反序列化，
 * 因为当你尝试使用PHPUnit来为Yaf写一些测试用例的时候会造成一些不必要的麻烦。
 * 你可以使用PHPUnit的@backupGlobals注释来控制全局变量的备份和恢复操作，
 * 从而可以解决这个问题。
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
final class Yaf_Application {

    /**
     * Yaf_Application为应用提供了一个辅助设施。
     * 它提供了可重用的资源，常见的和模块化的引导类，还有依赖的检查。
     * Yaf_Application实现了单例模式。
     * Yaf_Application不能够被序列化和反序列化，
     * 因为当你尝试使用PHPUnit来为Yaf写一些测试用例的时候会造成一些不必要的麻烦。
     * 你可以使用PHPUnit的@backupGlobals注释来控制全局变量的备份和恢复操作，
     * 从而可以解决这个问题。
     */
    protected $config;
    
    /**
     * Yaf_Application为应用提供了一个辅助设施。
     * 它提供了可重用的资源，常见的和模块化的引导类，还有依赖的检查。
     * Yaf_Application实现了单例模式。
     * Yaf_Application不能够被序列化和反序列化，
     * 因为当你尝试使用PHPUnit来为Yaf写一些测试用例的时候会造成一些不必要的麻烦。
     * 你可以使用PHPUnit的@backupGlobals注释来控制全局变量的备份和恢复操作，
     * 从而可以解决这个问题。
     */
    protected $dispatcher;
    
    protected static $_app;
    
    protected $_modules;
    
    protected $_running = false;
    
    protected $_environ = 'product';
    
    protected $_err_no = 0;
    
    protected $_err_msg = '';
    

    /**
     * Yaf_Application的构造函数
     *
     * @param mixed $config 关联数组的配置, 或者一个指向ini格式的配置文件的路径的字符串。 如果是一个ini配置文件，那配置文件中应该有一个定义了yaf.environ 的配置节。这个在生产环境中是默认的。 如果你使用了ini配置文件作为你应用配置的容器，你需要打开yaf.cache_config 来提升性能。 And the config entry(and there default value) list blow: A ini config file example 
     * @param string $envrion Which section will be loaded as the final config
     */
    public function __construct($config, $environ = null) {}
    
    /**
     * 运行 Yaf_Application
     *
     * @return void
     */
    public function run() {}
    
    /**
     * 运行回调函数
     *
     * @param callable $entry 一个有效的回调函数
     * @param string $... 零个或者多个要传递给函数的参数。
     *
     * @return void
     */
    public function execute($entry, ... $parameter) {}
    
    /**
     * 获取当前的<classname>Yaf_Application</classname>实例
     *
     * @return void
     */
    static public function app() {}
    
    /**
     * 获取当前Yaf_Application的环境名
     *
     * @return void
     */
    public function environ() {}
    
    /**
     * 调用bootstrap
     *
     * @param Yaf_Bootstrap_Abstract $bootstrap A Yaf_Bootstrap_Abstract instance
     *
     * @return void
     */
    public function bootstrap($bootstrap = null) {}
    
    /**
     * 获取 Yaf_Config_Abstract 的实例
     *
     * @return Yaf_Config_Abstract
     */
    public function getConfig() {}
    
    /**
     * 获取在配置文件中申明的模块
     *
     * @return array
     */
    public function getModules() {}
    
    /**
     * 获取 Yaf_Dispatcher 的实例
     *
     * @return Yaf_Dispatcher
     */
    public function getDispatcher() {}
    
    /**
     * 改变应用目录
     *
     * @param string $directory 
     *
     * @return Yaf_Application
     */
    public function setAppDirectory($directory) {}
    
    /**
     * 获取应用的目录
     *
     * @return Yaf_Application
     */
    public function getAppDirectory() {}
    
    /**
     * 获取最后产生的错误的错误代码
     *
     * @return int
     */
    public function getLastErrorNo() {}
    
    /**
     * 获取最近产生的错误的错误信息
     *
     * @return string
     */
    public function getLastErrorMsg() {}
    
    /**
     * 清除最后的错误信息
     *
     * @return Yaf_Application
     */
    public function clearLastError() {}
    
    /**
     * 析构函数
     *
     * @return void
     */
    public function __destruct() {}
    
    /**
     * Yaf_Application不能被克隆
     *
     * @return void
     */
    private function __clone() {}
    
    /**
     * Yaf_Application 不能被序列化
     *
     * @return void
     */
    private function __sleep() {}
    
    /**
     * Yaf_Application 不能被反序列化
     *
     * @return void
     */
    private function __wakeup() {}
    
}
