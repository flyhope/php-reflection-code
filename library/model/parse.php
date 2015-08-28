<?php

/**
 * 解析生成文档方法
 *
 * @package Model
 * @author  chengxuan <chengxuan@staff.weibo.com>
 */
class Model_Parse {
    
    static public function showClass(ReflectionClass $reflection_class) {
        $is_abstract = $reflection_class->isAbstract();
        $is_final = $reflection_class->isFinal();
        $parent_class = $reflection_class->getParentClass();
        $parent_name = $parent_class ? $parent_class->getName() : '';
        $interface_names = $reflection_class->getInterfaceNames();
        
        $result = '';
        $is_abstract && $result .= 'abstract ';
        $is_final && $result .= 'final ';
        $result .= $reflection_class->getName();
        $parent_name && $result .= ' extends ';
        
    }
    
    /**
     * 展示方法的定义CODE
     * 
     * @param ReflectionMethod $reflection_method
     * 
     * @return string
     */
    static public function showMehod(ReflectionMethod $reflection_method) {
        $is_abstract = $reflection_method->isAbstract();
        $is_static = $reflection_method->isStatic();
        $visibility = self::_showVisibility($reflection_method);
        
        $result = '';
        $is_abstract && $result .= 'abstract ';
        $is_static && $result .= 'static ';
        $visibility && $result .= "{$visibility} ";
        $result .= 'function ' . $reflection_method->getName() . '(';
        $result .= '){}';
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