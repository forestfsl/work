<?php

//通过反射感知Redis类里边全部的操作方法
//根据Redis类实例化一个反射类对象
$me = new ReflectionClass('Redis');

//获得Redis类的全部操作方法
var_dump($me -> getMethods());


