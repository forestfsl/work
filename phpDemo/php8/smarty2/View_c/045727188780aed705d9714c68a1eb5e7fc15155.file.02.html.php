<?php /* Smarty version Smarty-3.1.16, created on 2014-11-05 14:03:31
         compiled from ".\View\02.html" */ ?>
<?php /*%%SmartyHeaderCode:781654599af1bbb540-65108804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '045727188780aed705d9714c68a1eb5e7fc15155' => 
    array (
      0 => '.\\View\\02.html',
      1 => 1415160008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '781654599af1bbb540-65108804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54599af1d3bf03_21316207',
  'variables' => 
  array (
    'addr' => 0,
    'baidu' => 0,
    'title' => 0,
    'talk' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54599af1d3bf03_21316207')) {function content_54599af1d3bf03_21316207($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\web\\0911\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'D:\\web\\0911\\libs\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        <h2>变量调剂器使用</h2>
        <?php echo time();?>
<br />
        <?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
<br />
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['addr']->value)===null||$tmp==='' ? 'beijing' : $tmp);?>
<br /> 
        <?php echo $_smarty_tpl->tpl_vars['baidu']->value;?>
<br />
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['baidu']->value, ENT_QUOTES, 'UTF-8', true);?>
<br />
        <?php echo preg_replace('!^!m',str_repeat('hello',4),$_smarty_tpl->tpl_vars['baidu']->value);?>
<br /> 
        <?php echo nl2br($_smarty_tpl->tpl_vars['title']->value);?>
<br />
        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['talk']->value,23,'...',true);?>
<br />
        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['talk']->value,22,'..',true);?>
<br />
        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['talk']->value,22,'..',true,true);?>
<br />
        <?php echo mb_strtolower(mb_strtoupper(smarty_modifier_truncate($_smarty_tpl->tpl_vars['talk']->value,22,'..',true,true), 'UTF-8'), 'UTF-8');?>
<br />
        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['content']->value,2,'.');?>
<br />
    </body>
</html><?php }} ?>
