<?php

/**
 * PDO类的实例化
 */
// 1, 设置数据源相关参数
$dbms = 'mysql';// 选择mysql数据库
$host = 'localhost';
$port = '3306';
$dbname = 'php2017';
$charset = 'utf8';
$dsn = "$dbms:host=$host;port=$port;charset=$charset;dbname=$dbname";
// 2, 设置用户名和密码
$user = 'root';
$pass = 'zhouyang';
// 3, 实例化PDO类
$pdo = new PDO($dsn, $user, $pass);
echo '<pre>';
var_dump($pdo);
