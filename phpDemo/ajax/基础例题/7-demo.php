<?php
	mysql_connect('localhost','root','aa');
	mysql_select_db('php4');
	mysql_query('set names utf8');
	//总记录数
	$rs=mysql_query('select count(*) from products');
	$rows=mysql_fetch_row($rs);
	$recordcount=$rows[0];
	//页面大小
	$pagesize=10;
	//总页数
	$pagecount=ceil($recordcount/$pagesize);
	//获得当前页
	$pageno=isset($_GET['pageno'])?$_GET['pageno']:1;
	if($pageno<1)
		$pageno=1;
	if($pageno>$pagecount)
		$pageno=$pagecount;
	//起始位置
	$startno=($pageno-1)*$pagesize;
	$sql="select * from products limit $startno,$pagesize";
	$rs=mysql_query($sql);
?>
<table>
	<tr>
		<th>编号</th>
		<th>商品名称</th>
		<th>商品规格</th>
		<th>商品价格</th>
		<th>库存量</th>
	</tr>
<?php while($rows=mysql_fetch_assoc($rs)):?>
	<tr>
		<td><?php echo $rows['proID']?></td>
		<td><?php echo $rows['proname']?></td>
		<td><?php echo $rows['proguige']?></td>
		<td><?php echo $rows['proprice']?></td>
		<td><?php echo $rows['proamount']?></td>
	</tr>
<?php endwhile;?>
<tr>
	<td colspan='5'>
	<?php
		for($i=1;$i<=$pagecount;$i++){
			echo "<a href='javascript:void(0)' onclick='showList($i)'>{$i}</a>&nbsp;";
		}
	?>
	</td>
</tr>
</table>
