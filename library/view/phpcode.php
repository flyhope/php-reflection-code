<?php

/**
 * PHPCODE 模板
 *
 * @package View
 * @author  chengxuan <chengxuan@staff.weibo.com>
 */?><?= '<?php' ?>
 
class <?= $reflection->getName() ?> {
<?php //输出常量 ?>
<?php foreach($reflection->getConstants() as $key => $value) :?>
    const <?= $key; ?> = <?= $value; ?>;
<?php endforeach;?>
<?php //输出方法 ?>
<?php foreach($reflection->getmethods() as $value) :?>
    <?= Model_Parse::showMehod($value);?>
    
<?php endforeach; ?>
}

 