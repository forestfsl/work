<?php

include "./libs/Smarty.class.php";

$smarty = new Smarty;
$smarty -> setTemplateDir('./View/');
$smarty -> setCompileDir('./View_c/');

//开启缓存
$smarty -> caching = 1;
$smarty -> assign('color',array('red','blue','green','pink'));

$smarty -> assign('mytime',date("Y-m-d H:i:s"),true);

$smarty -> display('06.html');
