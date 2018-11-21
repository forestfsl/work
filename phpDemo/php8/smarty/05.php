<?php

include "./libs/Smarty.class.php";

$smarty = new Smarty;
$smarty -> setTemplateDir("./View/");
$smarty -> setCompileDir("./View_c/");

//索引
$smarty -> assign('fruit',array('banana','apple','orange','pear'));
//关联
$smarty -> assign('animal',array('huashan'=>'monkey','deguo'=>'dog','northeast'=>'tiger','helan'=>'pig'));

$smarty -> display('05.html');
