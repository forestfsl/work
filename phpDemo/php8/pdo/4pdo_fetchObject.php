<?php

echo "<meta charset=utf-8>";
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

// 4, 准备sql语句
$sql = "select * from php_student";
// 5, 执行sql语句
$stmt = $pdo->query($sql); // 此时得到一个结果对象
echo '<pre>';

// 6, 执行fetchObject方法
var_dump($stmt->fetchObject());
var_dump($stmt->fetch(PDO::FETCH_OBJ));


