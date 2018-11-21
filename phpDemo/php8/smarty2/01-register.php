 <?php

include "./libs/Smarty.class.php";

$smarty = new Smarty;

$smarty -> setTemplateDir('./View/');
$smarty -> setCompileDir('./View_c/');

//单选按钮
$smarty -> assign('sex_outval',array(1=>'男',2=>'女',3=>'保密'));
//下拉列表
$smarty -> assign('xue_outval',array(1=>'-请选择-',2=>'小学',3=>'初中',4=>'高中',5=>'大学'));
//复选框
$smarty -> assign('hobby_outval',array(1=>'篮球',2=>'足球',3=>'乒乓球',4=>'棒球'));

$smarty -> display('register.html');

