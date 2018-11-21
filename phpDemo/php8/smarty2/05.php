<?php

include "./libs/Smarty.class.php";

$smarty = new Smarty;
$smarty -> setTemplateDir('./View/');
$smarty -> setCompileDir('./View_c/');

//开启缓存
$smarty -> caching = 1;

//display(模板，标志);
//会根据不同标志生成该模板的不同缓存文件
$smarty -> display('05.html',$_GET['page']);
