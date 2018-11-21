<?php /* Smarty version Smarty-3.1.16, created on 2018-11-21 05:26:50
         compiled from "./View/01.html" */ ?>
<?php /*%%SmartyHeaderCode:14884269855bf4ec9ac2b6b2-12855861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24adad860b9fd657957e61345fec5f4e271b912a' => 
    array (
      0 => './View/01.html',
      1 => 1414987006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14884269855bf4ec9ac2b6b2-12855861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addr' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bf4ec9ae6fdf6_55526573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf4ec9ae6fdf6_55526573')) {function content_5bf4ec9ae6fdf6_55526573($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        <h2>0911php</h2>
        地址：<?php echo $_smarty_tpl->tpl_vars['addr']->value;?>
<br />
        名字：<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<br />
    </body>
</html>
<?php }} ?>
