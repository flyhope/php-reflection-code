<?php

/**
 * PHPCODE 模板
 *
 * @package View
 * @author  Leelmes <i@chengxuan.li>
 */?><?= '<?php' ?>

<?php //输出CLASS定义 ?>
<?= Model_Parse::showClass($reflection) ?> {
<?php //输出常量 ?>
<?php foreach($reflection->getConstants() as $key => $value) :?>
    const <?= $key; ?> = <?= var_export($value, true); ?>;
<?php endforeach;?>
<?php //输出方法 ?>
<?php foreach($reflection->getmethods() as $value) :?>
    <?= Model_Parse::showMehod($value);?>
    
<?php endforeach; ?>
}
