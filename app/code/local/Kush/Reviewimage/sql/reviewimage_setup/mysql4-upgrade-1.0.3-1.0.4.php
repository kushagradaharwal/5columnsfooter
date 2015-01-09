<?php
$installer = $this;
$installer->startSetup();

$tablename = $this->getTable('review/review_detail');

$installer->run("ALTER TABLE `review_detail` CHANGE `reviewimage` `reviewimage` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL;");

$installer->endSetup(); 
?>