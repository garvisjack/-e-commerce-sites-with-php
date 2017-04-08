<?php
/**
 * 配置文件
 */

require BASE."/libs/Smarty.class.php";
$smarty = new Smarty();
//配置smarty文件
$smarty->setLeftDelimiter('<!--{'); //左定界符
$smarty->setRightDelimiter('}-->'); //右定界符
$smarty->setTemplateDir('template'); //模板地址
$smarty->setCompileDir('compile'); //编译文件
$smarty->setCacheDir('cache'); //缓存地址
