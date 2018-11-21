<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/15
 * Time: 3:07 PM
 */
header ( "Content-type:text/html;charset=utf-8" );
require $_SERVER['DOCUMENT_ROOT'].'/inc/conn.php';	//连接数据库
$rs=mysqli_query($link,'select * from title');
?>
<table>
    <tr>
        <?php
        $n=0;
        while($rows=mysqli_fetch_assoc($rs)):?>
            <td><a href="?titleid=<?php echo $rows['Id']?>"><?php echo $rows['Title']?></a></td>
            <?php
            //$n++;
            if(++$n%9==0)
                echo '</tr><tr>';
        endwhile?>
    </tr>
</table>