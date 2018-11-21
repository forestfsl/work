<?php

include "./libs/Smarty.class.php";

$smarty = new Smarty;
$smarty -> setTemplateDir('./View/');
$smarty -> setCompileDir('./View_c/');

//开启缓存
$smarty -> caching = 1;

//display(模板，mark1|mark2|mark3|mark4)
//对各种mark做排列组合，每种情况都生成缓存文件
//$smarty -> display('07.html',$brand."|".$price."|".$network."|".$big);

//删除缓存文件,返回删除的缓存文件数量
//echo $smarty -> clearCache('07.html','htc|3|cmcc|2');
//echo $smarty -> clearCache('07.html','samsung|2');
//echo $smarty -> clearCache('05.html');
//echo $smarty -> clearCache(null,'xiaomi');
echo $smarty -> clearAllCache();

