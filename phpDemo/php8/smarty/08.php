<?php

include "./libs/Smarty.class.php";

$smarty = new Smarty;
$smarty -> setTemplateDir("./View/");
$smarty -> setCompileDir("./View_c/");

//$smarty -> assign('seled','a');//单项选中
$smarty -> assign('seled',array('a','c','d'));//多项选中
$smarty -> assign('outval',array('a'=>'篮球','b'=>'排球','c'=>'棒球','d'=>'看书'));

//$smarty -> assign('output',array('篮球','排球','棒球','看书'));
//$smarty -> assign('val',array('a','b','c','d'));

$smarty -> display('08.html');
