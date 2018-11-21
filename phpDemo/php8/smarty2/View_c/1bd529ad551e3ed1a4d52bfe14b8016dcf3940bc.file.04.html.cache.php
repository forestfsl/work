<?php /* Smarty version Smarty-3.1.16, created on 2014-11-05 15:24:20
         compiled from ".\View\04.html" */ ?>
<?php /*%%SmartyHeaderCode:242305459cec1be0751-24188427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bd529ad551e3ed1a4d52bfe14b8016dcf3940bc' => 
    array (
      0 => '.\\View\\04.html',
      1 => 1415172165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242305459cec1be0751-24188427',
  'function' => 
  array (
  ),
  'cache_lifetime' => 60,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5459cec1ce7dd0_31913066',
  'variables' => 
  array (
    'animal' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5459cec1ce7dd0_31913066')) {function content_5459cec1ce7dd0_31913066($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        <h2>缓存制作（caching=1或2）</h2>
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
        <hr />
    </body>
</html><?php }} ?>
