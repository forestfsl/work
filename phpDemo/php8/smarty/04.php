<?php

include "./libs/Smarty.class.php";

$smarty = new Smarty;
$smarty -> setTemplateDir("./View/");
$smarty -> setCompileDir("./View_c/");

//模拟从数据库获得个人的喜好信息
$smarty -> assign('hobby','shenlin');

$smarty -> display('04.html');