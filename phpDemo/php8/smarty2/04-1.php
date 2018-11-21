<?php

include "./libs/Smarty.class.php";

$smarty = new Smarty;
$smarty -> setTemplateDir('./View/');
$smarty -> setCompileDir('./View_c/');

//开启缓存
$smarty -> caching = 1;
//$smarty -> cache_lifetime = 60;

//$smarty -> display('04.html');

//判断模板对应的缓存文件是否还在有效期，返回boolean
var_dump($smarty -> isCached('04.html'));

