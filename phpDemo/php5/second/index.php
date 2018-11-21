<?php
//自动加载类
function __autoload($class_name) {
	require "./{$class_name}.class.php";
}
//获取数据
$config=array(
	'host'	=>	'localhost',
	'user'	=>	'root',
	'pwd'	=>	'fengsonglin',
	'dbname'=>	'php4'
);
//$link = mysqli_connect(
//    $config['host'],  /* The host to connect to 连接MySQL地址 */
//    $config['user'],      /* The user to connect as 连接MySQL用户名 */
//    $config['pwd'],  /* The password to use 连接MySQL密码 */
//    $config['dbname']);    /* The default database to query 连接数据库名称*/
//
//if (!$link) {
//    printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
//    exit;
//}else
//    echo '数据库连接上了！';

$db=MySQLDB::getInstance($config);
$rs=$db->fetchAll("select *  from products");
require './showList.html';