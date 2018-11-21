<?php /* Smarty version Smarty-3.1.16, created on 2014-11-03 15:35:57
         compiled from ".\View\05.html" */ ?>
<?php /*%%SmartyHeaderCode:1114354572eab82c726-71167616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd65cba40cfe80acb4a393c2217fb5b2ae7aad04d' => 
    array (
      0 => '.\\View\\05.html',
      1 => 1415000155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1114354572eab82c726-71167616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54572eab96f389_91585696',
  'variables' => 
  array (
    'fruit' => 0,
    'animal' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54572eab96f389_91585696')) {function content_54572eab96f389_91585696($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        <h2>数组元素访问</h2>
        <?php echo $_smarty_tpl->tpl_vars['fruit']->value[2];?>
<br />
        <?php echo $_smarty_tpl->tpl_vars['fruit']->value[3];?>
<br />
        <?php echo $_smarty_tpl->tpl_vars['animal']->value['northeast'];?>
<br />
        <?php echo $_smarty_tpl->tpl_vars['animal']->value['helan'];?>
<br />

        
    </body>
</html><?php }} ?>
