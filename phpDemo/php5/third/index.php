<?php
//自动加载类
function __autoload($class_name) {
	require "./index.php";
}
//获取数据
$model=new ProductsModel();
$rs=$model->getList();
require './showList.html';