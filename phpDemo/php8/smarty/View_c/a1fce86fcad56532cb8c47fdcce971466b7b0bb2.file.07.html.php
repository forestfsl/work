<?php /* Smarty version Smarty-3.1.16, created on 2014-11-03 16:41:06
         compiled from ".\View\07.html" */ ?>
<?php /*%%SmartyHeaderCode:2592954573c7e58c269-07885086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1fce86fcad56532cb8c47fdcce971466b7b0bb2' => 
    array (
      0 => '.\\View\\07.html',
      1 => 1415003360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2592954573c7e58c269-07885086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54573c7e5d9c59_19839168',
  'variables' => 
  array (
    'week' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54573c7e5d9c59_19839168')) {function content_54573c7e5d9c59_19839168($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        <h2>分支结构语句</h2>
        <?php if ($_smarty_tpl->tpl_vars['week']->value==1) {?>
            星期一<br />
        <?php } elseif ($_smarty_tpl->tpl_vars['week']->value==2) {?>
            星期二
        <?php } elseif ($_smarty_tpl->tpl_vars['week']->value==3) {?>
            星期三
        <?php } elseif ($_smarty_tpl->tpl_vars['week']->value==4) {?>
            星期四
        <?php } elseif ($_smarty_tpl->tpl_vars['week']->value==5) {?>
            星期五
        <?php } else { ?>
            周末
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['week']->value+2==5) {?>
            今天是星期三
        <?php }?>
    </body>
</html><?php }} ?>
