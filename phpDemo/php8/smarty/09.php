<?php

include "./libs/Smarty.class.php";

$smarty = new Smarty;
$smarty -> setTemplateDir("./View/");
$smarty -> setCompileDir("./View_c/");

$smarty -> assign('seled',array(1,4));
$smarty -> assign('area',array(1=>'沈阳',2=>'大连',3=>'铁岭',4=>'开源'));

$smarty -> display('09.html');
