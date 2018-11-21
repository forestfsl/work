<?php

include "./libs/Smarty.class.php";

$smarty = new Smarty;
$smarty -> setTemplateDir("./View/");
$smarty -> setCompileDir("./View_c/");

$smarty -> assign('week',3);

$smarty -> display('07.html');
