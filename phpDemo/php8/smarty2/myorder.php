<?php
header("content-type:text/html;charset=utf-8");
include "./libs/Smarty.class.php";

$smarty = new Smarty;

$smarty -> setTemplateDir('./View/');
$smarty -> setCompileDir('./View_c/');

$smarty -> display('myorder.html');