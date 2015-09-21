# php-reflection-code
PHP反射IDE自动提示生成器


## 描述

本程序在命令行（CLI）中执行，通过PHP反射将内置类生成一个空实现定义，放在IDE任何位置实现代码提示功能。可用于没有提供PHP代码实现的PECL扩展（如：Redis）在IDE中的编码提示，提升开发效率。

## 使用方法
```
php php-reflection-code.php $extension_class_name
```

## 示例
```
php php-reflection-code.php redis
```