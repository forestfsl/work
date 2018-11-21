<?php

header("content-type:text/html;charset=utf-8");
class Goods {
	public function getPrice() {
		$price = $_GET['p'];
		if($price < 0) {
			// 实例化一个异常对象
			$e = new Exception($message = '价格不能为负值!');
			throw $e; // 抛出异常对象
		}else {
			echo $price;
		}
	}
}
try{ // 对代码进行监听
	$book = new Goods;
	$book->getPrice();
}catch(Exception $e) {  // 捕获异常
	echo '错误的信息为：', $e->getmessage(), '<br />';
	echo '错误的代码为：', $e->getCode(), '<br />';
	echo '错误的脚本为：', $e->getFile(), '<br />';
	echo '错误的行号为：', $e->getLine(), '<br />';
}
