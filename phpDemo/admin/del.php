<?php
require '../inc/conn.php';
$id = (int)$_GET['id'];
$titleid = (int)$_GET['titleid'];
$sql = "delete from contents where id=$id";
if (mysqli_query($link,$sql))
    header('location:admin.php?titleid='.$titleid);
else
    echo 'delete error';