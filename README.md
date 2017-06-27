# php-reflection-code
PHP反射IDE自动提示生成器


## 描述

本程序在命令行（CLI）中执行，通过PHP反射将内置类生成一个空实现定义，放在IDE任何位置实现代码提示功能。可用于没有提供PHP代码实现的PECL扩展（如：Redis）在IDE中的编码提示，提升开发效率。

同时支持配置批量，生成在php_docs_code目录

## 使用方法

直接设置为你的GIT子项目更新，或把php_docs_code中的代码置于你的项目中，在IDE即可自动提示。

内置类库包括：

* Memcached
* Redis
* Swoole
* Yaf
* Yar
* Yac
* Yaconf


## 自助生成方法

如果自带的类库仍不满足你的需求，可以自助生成。

### 通过反射获取输出PHP空方法定义
```bash
php php-reflection-code.php $extension_class_name
```

示例：
```
php php-reflection-code.php redis
```

### 定义批量执行

1. 确保代码目录下执行用户可以有建立目录权限。
2. 配置 `conf/fetch.php` 写入你想生成的类或PHP扩展。
3. 在Shell中执行以下命令，会在php_docs_code目录中生成。
```bash
php fetch.php
```

