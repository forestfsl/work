<?php

include "./libs/Smarty.class.php";

$smarty = new Smarty;
$smarty -> setTemplateDir('./View/');
$smarty -> setCompileDir('./View_c/');

//开启缓存
$smarty -> caching = 1;
//修改缓存文件的有效时间
$smarty -> cache_lifetime = 20;

$smarty -> assign('animal',array('dog','cat','tiger','pig'));

/**
display方法执行
① 判断缓存是否开启
② 判断模板文件是否有更新(如果有更新 ，③ ④都省略)
③ 判断缓存文件是否存在(缓存文件时间是否过期)
④ 判断混编文件是否存在
⑤ 展示模板内容
⑥ 缓存开启 生成缓存文件
*/
$smarty -> display('03.html');
