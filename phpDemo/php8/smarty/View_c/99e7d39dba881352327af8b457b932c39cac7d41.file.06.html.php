<?php /* Smarty version Smarty-3.1.16, created on 2014-11-03 15:53:08
         compiled from ".\View\06.html" */ ?>
<?php /*%%SmartyHeaderCode:281925457316d4d5425-99190622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99e7d39dba881352327af8b457b932c39cac7d41' => 
    array (
      0 => '.\\View\\06.html',
      1 => 1415001181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281925457316d4d5425-99190622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5457316d50cce1_49355546',
  'variables' => 
  array (
    'fruit' => 0,
    'k' => 0,
    'v' => 0,
    'animal' => 0,
    'm' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5457316d50cce1_49355546')) {function content_5457316d50cce1_49355546($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>新建网页</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <script type="text/javascript">

        </script>

        <style type="text/css">
        </style>
    </head>


    <body>
        <h2>数组遍历</h2>
        索引数组遍历：<br />
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fruit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
---<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<br />
        <?php }
if (!$_smarty_tpl->tpl_vars['v']->_loop) {
?>
            数组没有任何元素！<br />
        <?php } ?>

        <hr />
        <pre>
            foreach遍历数组内部关键字：
            值变量@iteration----------> 从1开始的序号信息
            值变量@index--------------> 从0开始的序号信息
            值变量@first--------------> 判断第一个元素，返回boolean
            值变量@last---------------> 判断最后一个元素，返回boolean
            值变量@total--------------> 获得数组元素长度(个数)
            值变量@show---------------> 判断当前数组是否有遍历元素出来，返回boolean
        </pre>
        关联数组遍历：<br />
        <?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['animal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['n']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['n']->iteration=0;
 $_smarty_tpl->tpl_vars['n']->index=-1;
 $_smarty_tpl->tpl_vars['n']->show = ($_smarty_tpl->tpl_vars['n']->total > 0);
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->value = $_smarty_tpl->tpl_vars['n']->key;
 $_smarty_tpl->tpl_vars['n']->iteration++;
 $_smarty_tpl->tpl_vars['n']->index++;
 $_smarty_tpl->tpl_vars['n']->first = $_smarty_tpl->tpl_vars['n']->index === 0;
 $_smarty_tpl->tpl_vars['n']->last = $_smarty_tpl->tpl_vars['n']->iteration === $_smarty_tpl->tpl_vars['n']->total;
?>
            <?php echo $_smarty_tpl->tpl_vars['n']->first;?>
::<?php echo $_smarty_tpl->tpl_vars['n']->index;?>
--<?php echo $_smarty_tpl->tpl_vars['n']->iteration;?>
---<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
--<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
::<?php echo $_smarty_tpl->tpl_vars['n']->last;?>
<br />
        <?php }
if (!$_smarty_tpl->tpl_vars['n']->_loop) {
?>
            没有任何记录信息！
        <?php } ?>
        数组元素总个数：<?php echo $_smarty_tpl->tpl_vars['n']->total;?>

        是否遍历数组出来：<?php echo $_smarty_tpl->tpl_vars['n']->show;?>

    </body>
</html><?php }} ?>
