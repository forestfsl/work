<?php
header('content-type:text/html;charset=utf-8');
/*
require 'Goods.class.php';
require 'Books.class.php';
require 'Phone.class.php';
*/

$book=new Books();
$phone=new Phone();
$book->setName('PHP入门与精通');
$phone->setName('诺基亚2100');
$book->getName();
$phone->getName();
//自动加载类
function __autoload($class_name) {
	require "./{$class_name}.class.php";
}