<?php
header("content-type:text/html;charset=utf-8");
include "./libs/Smarty.class.php";

$smarty = new Smarty;

$smarty -> setTemplateDir('./View/');
$smarty -> setCompileDir('./View_c/');

$smarty -> assign('baidu',"<a>百度</a>");
$smarty -> assign('title',"shanghai\ntianjin\nguangzhou");
$smarty -> assign('content',"今天是星期三");

$smarty -> assign('talk',"Good afternoon. I want to start by thanking President Hu and the Chinese people or he warmth and hospitality that they have shown myself and our delegation since we arrived. We had a wonderful day in Shanghai yesterday, a wonderful discussion with China’s young men and women, and I’m ooking forward to the conversations we’ll have and the sights that we’ll see here in Beijing over the next two days");

$smarty -> display('02.html');
