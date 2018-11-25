<?php
//在php里边操作redis
//redis就是php的一个功能类，名字是Redis，该类里边有许多操作方法

//创建对象
$redis = new Redis();

//连接redis服务器
$redis -> connect('192.168.39.159',6379);

//选择数据库
$redis -> select(5);

//设置key
$redis -> set('weather','sun');
var_dump($redis -> get('weather'));

//一个方法里边如果有多个参数，该参数最好组织为数组的格式呈现
//$redis -> mset('height1',170,'height2',171,'height3',172);		//nook
$redis -> mset(array('height1'=>170,'height2'=>171,'height3'=>172));	//ok
//var_dump($redis -> mget('height1','height2','height3'));		//nook
var_dump($redis -> mget(array('height1','height2','height3')));		//ok

echo "redis is ok";

