<?php
/**
 * Yaf_Loader Document
 *
 * Yaf_Loader 类为Yaf提供了自动加载功能的全面解决方案。
 * 在第一次使用的时候，将检索 Yaf_Application 的实例，
 * Yaf_Loader 实现了单利模式，并使用spl_autoload注册它自己。
 * 通过 Yaf_Loader::getInstance 返回它的实例
 * Yaf_Loader 加载一个类时仅仅尝试一次，如果失败了，
 * 后面的操作将取决于yaf.use_spl_auload，
 * 如果这个配置项为On，Yaf_Loader::autoload 将会返回FALSE，
 * 从而把机会让给其他的自动加载功能。如果这个配置项为Off（默认），
 * Yaf_Loader::autoload 将会返回TRUE，
 * 最重要的是将会抛出一个非常有用的警告（对于找出一个类加载失败非常有用）。
 * 请保持yaf.use_spl_autoload保持关闭，除非有一些library有自己的autoload机制，并且是无法改写的。
 * 默认情况下，Yaf_Loader 收集所有library(类定义的脚本)储存进在
 * php.ini(yaf.library)定义的global library directory之中。
 * 如果你想使用 Yaf_Loader 搜索本地类（库）（定义在application.ini，
 * 默认情况下，它是 application.directory . "/libraray"），
 * 你需要使用 Yaf_Loader::registerLocalNameSpace 注册本地类前缀。
 * 让我们来看看一些例子（假设 APPLICATION_PATH 是 application.directory）：
 * Config example
 * 假设以下本地名称空间已被注册：
 * 注册本地命名空间
 * registerLocalNameSpace(array("Foo", "Bar"));
 * }
 * ?>
 * 自动加载例子：
 * 加载类
 * // APPLICATION_PATH/library/Foo/Bar/Test.php
 * class GLO_Name  =>
 * // /global_dir/Glo/Name.php
 * class BarNon_Test
 * // /global_dir/Barnon/Test.php
 * 在PHP 5.3中，你可以使用命名空间：
 * 加载命名空间类
 * // APPLICATION_PATH/library/Foo/Bar/Dummy.php
 * class \FooBar\Bar\Dummy =>
 * // /global_dir/FooBar/Bar/Dummy.php
 * 你可能会注意到所有文件夹名字的首字母是大写的，你可以通过在php.ini中设置 yaf.lowcase_path = On 来将它们小写。
 * Yaf_Loader 也是设计来加载MVC类，响应的规则如下：
 * MVC类加载例子
 * // APPLICATION_PATH/controllers/
 * Model Classes =>
 * // APPLICATION_PATH/models/
 * Plugin Classes =>
 * // APPLICATION_PATH/plugins/
 * Yaf 通过识别一个类的后缀（这个是默认的，你也可以通过改变配置项 yaf.name_suffix 来将它改为通过前缀识别）来决定它是否是一个MVC类：
 * MVC 类区别
 * // ***Controller
 * Model Classes =>
 * // ***Model
 * Plugin Classes =>
 * // ***Plugin
 * some examples:
 * MVC loading example
 * // APPLICATION_PATH/models/Data.php
 * class DummyPlugin =>
 * // APPLICATION_PATH/plugins/Dummy.php
 * class A_B_TestModel =>
 * // APPLICATION_PATH/models/A/B/Test.php
 * 该目录将受 yaf.lowcase_path 的影响。
 * 
 * @package Yaf 
 * @author Leelmes <i@chengxuan.li>
 */
final class Yaf_Loader {

    protected $_library;
    
    protected $_global_library;
    
    protected static $_instance;
    

    /**
     * The __construct purpose
     */
    private function __construct() {}
    
    /**
     * The __clone purpose
     *
     * @return void
     */
    private function __clone() {}
    
    /**
     * The __sleep purpose
     *
     * @return void
     */
    private function __sleep() {}
    
    /**
     * The __wakeup purpose
     *
     * @return void
     */
    private function __wakeup() {}
    
    /**
     * The autoload purpose
     *
     * @return void
     */
    public function autoload($class_name) {}
    
    /**
     * The getInstance purpose
     *
     * @return void
     */
    static public function getInstance($local_library_path = null, $global_library_path = null) {}
    
    /**
     * 注册本地类前缀
     *
     * @param mixed $prefix 字符串或者是数组格式的类名前缀，所有拥有和这些前缀相同前缀的类将被加载到本地library路径。
     *
     * @return void
     */
    public function registerLocalNamespace($name_prefix) {}
    
    /**
     * The getLocalNamespace purpose
     *
     * @return void
     */
    public function getLocalNamespace() {}
    
    /**
     * The clearLocalNamespace purpose
     *
     * @return void
     */
    public function clearLocalNamespace() {}
    
    /**
     * The isLocalName purpose
     *
     * @return void
     */
    public function isLocalName($class_name) {}
    
    /**
     * The import purpose
     *
     * @return void
     */
    static public function import($file) {}
    
    /**
     * 改变library路径
     *
     * @param string $directory 
     * @param bool $is_global 
     *
     * @return Yaf_Loader
     */
    public function setLibraryPath($library_path, $is_global = false) {}
    
    /**
     * get the library path
     *
     * @param bool $is_global 
     *
     * @return Yaf_Loader
     */
    public function getLibraryPath($is_global = false) {}
    
}
