<?php

include "./libs/Smarty.class.php";

$smarty = new Smarty;
$smarty -> setTemplateDir('./View/');
$smarty -> setCompileDir('./View_c/');

//开启缓存
$smarty -> caching = 1;

$smarty -> force_cache = true;

$brand = $_GET['brand'];
$price = $_GET['price'];
$network = $_GET['network'];
$big = $_GET['big'];

//display(模板，mark1|mark2|mark3|mark4)
//对各种mark做排列组合，每种情况都生成缓存文件
$smarty -> display('07.html',$brand."|".$price."|".$network."|".$big);
