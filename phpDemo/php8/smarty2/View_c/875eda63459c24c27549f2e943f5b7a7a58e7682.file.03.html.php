<?php /* Smarty version Smarty-3.1.16, created on 2014-11-05 14:26:05
         compiled from ".\View\03.html" */ ?>
<?php /*%%SmartyHeaderCode:119945459c2f2137d21-94117016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '875eda63459c24c27549f2e943f5b7a7a58e7682' => 
    array (
      0 => '.\\View\\03.html',
      1 => 1415168762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119945459c2f2137d21-94117016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5459c2f21ff396_37873419',
  'variables' => 
  array (
    'animal' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5459c2f21ff396_37873419')) {function content_5459c2f21ff396_37873419($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        <h2>缓存制作</h2>
        <ul>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['animal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
        <?php } ?>
        </ul>
    </body>
</html><?php }} ?>
