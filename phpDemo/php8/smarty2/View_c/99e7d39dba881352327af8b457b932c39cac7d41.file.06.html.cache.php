<?php /* Smarty version Smarty-3.1.16, created on 2014-11-05 15:55:31
         compiled from ".\View\06.html" */ ?>
<?php /*%%SmartyHeaderCode:207125459d6e93dafb7-61319910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99e7d39dba881352327af8b457b932c39cac7d41' => 
    array (
      0 => '.\\View\\06.html',
      1 => 1415174129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207125459d6e93dafb7-61319910',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5459d6e94a40d6_63607568',
  'variables' => 
  array (
    'mytime' => 1,
    'color' => 1,
    'v' => 1,
  ),
  'has_nocache_code' => true,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5459d6e94a40d6_63607568')) {function content_5459d6e94a40d6_63607568($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        <h2>局部不缓存</h2>
        <?php echo time();?>
<br />
        <?php echo '/*%%SmartyNocache:207125459d6e93dafb7-61319910%%*/<?php echo time();?>
/*/%%SmartyNocache:207125459d6e93dafb7-61319910%%*/';?>
<br />
        <?php echo '/*%%SmartyNocache:207125459d6e93dafb7-61319910%%*/<?php echo $_smarty_tpl->tpl_vars[\'mytime\']->value;?>
/*/%%SmartyNocache:207125459d6e93dafb7-61319910%%*/';?>
<br />

        
        <?php echo '/*%%SmartyNocache:207125459d6e93dafb7-61319910%%*/<?php  $_smarty_tpl->tpl_vars[\'v\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'v\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'color\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'v\']->key => $_smarty_tpl->tpl_vars[\'v\']->value) {
$_smarty_tpl->tpl_vars[\'v\']->_loop = true;
?>/*/%%SmartyNocache:207125459d6e93dafb7-61319910%%*/';?>

            <?php echo '/*%%SmartyNocache:207125459d6e93dafb7-61319910%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value;?>
/*/%%SmartyNocache:207125459d6e93dafb7-61319910%%*/';?>
<br />
        <?php echo '/*%%SmartyNocache:207125459d6e93dafb7-61319910%%*/<?php } ?>/*/%%SmartyNocache:207125459d6e93dafb7-61319910%%*/';?>

        
    </body>
</html><?php }} ?>
