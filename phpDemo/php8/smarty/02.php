<?php
define("HOST","0911");
include "./libs/Smarty.class.php";

$smarty = new Smarty;
$smarty -> setTemplateDir("./View/");
$smarty -> setCompileDir("./View_c/");

$smarty -> assign('name', $_GET['name']);

$smarty -> display('02.html');