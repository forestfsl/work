<?php
/**
// * Created by PhpStorm.
// * User: admin
// * Date: 2018/11/15
// * Time: 3:06 PM
// */


$config = require $_SERVER['DOCUMENT_ROOT'].'/config/config.php';

/* Connect to a MySQL server  连接数据库服务器 */
$link = mysqli_connect(
    $config['host'],  /* The host to connect to 连接MySQL地址 */
    $config['name'],      /* The user to connect as 连接MySQL用户名 */
    $config['pwd'],  /* The password to use 连接MySQL密码 */
    $config['database']);    /* The default database to query 连接数据库名称*/

if (!$link) {
    printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
    exit;
}else
//    echo '数据库连接上了！';

/* Close the connection 关闭连接*/
return $link;
?>