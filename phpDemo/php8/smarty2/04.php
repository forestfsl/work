<?php

include "./libs/Smarty.class.php";

$smarty = new Smarty;
$smarty -> setTemplateDir('./View/');
$smarty -> setCompileDir('./View_c/');

//开启缓存
$smarty -> caching = 1;
$smarty -> cache_lifetime = 60;

$smarty -> assign('animal',array('dog','cat','tiger','pig'));

$smarty -> display('04.html');
