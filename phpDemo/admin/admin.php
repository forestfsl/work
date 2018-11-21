<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/style/common.css"/>
    <title></title>
</head>
<body>
<a href="add.php">添加笑话</a>
<?php require '../inc/head.php' ?>
<!--显示笑话-->
<?php
    $titleid=isset($_GET['titleid']) ? $_GET['titleid'] : 1;
    $sql = "select * from contents where title = $titleid order by id desc";
    $rs = mysqli_query($link,$sql);
?>

<table>
    <tr>
        <th>编号</th><th>内容</th><th>作者</th><th>修改</th><th>删除</th>
    </tr>

    <?php while ($rows=mysqli_fetch_assoc($rs)):?>
    <tr>
        <td><?php echo $rows['Id'] ?></td>
        <td><?php echo $rows['Content'] ?></td>
        <td><?php echo $rows['Author'] ?></td>
        <td><input type="button" value="修改" onclick="location.href='update.php?id=<?php echo $rows['Id']?>'" /></td>
        <td><input type="button" value="删除" onclick="if(confirm('确定要删除吗'))location.href='del.php?id=<?php echo $rows['Id']?>&titleid=<?php echo $rows['Title']?>'" /></td>
    </tr>
    <?php endwhile;?>
</table>


</body>

</html>
