<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style/common.css"/>
    <title></title>

    <script>
        function check() {
            if (document.getElementById('content').value == ''){
                alert('笑话内容不能为空');
                document.getElementById('content').focus();
                return false;
            }
            if (document.getElementById('author').value == ''){
                alert('作者不能为空');
                document.getElementById('author').focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<?php
    require '../inc/conn.php';
    if (isset($_POST['button'])){
        $type = $_POST['type'];
        $content = $_POST['content'];
        $author = $_POST['author'];
        if (trim($content) == '' || trim($author) == ''){
            echo '内容或作者为空';
            exit;
        }
        $sql = "insert into contents (title,content,author) values ($type,'$content','$author')";
        echo $sql;
        if (mysqli_query($link,$sql))

        header('location:admin.php?titleid='.$type);
        else
            echo '插入失败','<br>','<a href="add.php">点击返回</a>';
        exit;
    }
?>

<form id="form1" name="form1" method="post" action="" onsubmit="return check()">
    <table width="500" border="1">
        <tr>
            <th colspan="2">
            添加笑话
            </th>
        </tr>
        <tr>
            <td>类别</td>
            <td><select name="type" id="type">
            <?php
                $sql='select * from title';
                $rs=mysqli_query($link,$sql);
                while ($rows=mysqli_fetch_assoc($rs)):
            ?>
                <option value="<?php echo $rows['Id']?>"><?php echo $rows['Title']?></option>
            <?php
            endwhile;
            ?>
            </select></td>
        </tr>

        <tr>
            <td>内容</td>
            <td><textarea name="content" id="content" cols="45"></textarea> </td>
        </tr>
        <tr>
            <td>作者:</td>
            <td><input type="text" name="author" id="author"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="button" id="button" value="添加笑话" />
            <input type="button" name="button2" id="button2" value="返回" onclick="location.href='admin.php" /></td>
        </tr>
    </table>
</form>



</body>
</html>
