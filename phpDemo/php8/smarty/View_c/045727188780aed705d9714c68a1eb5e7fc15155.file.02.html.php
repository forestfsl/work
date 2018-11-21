<?php /* Smarty version Smarty-3.1.16, created on 2014-11-03 14:26:19
         compiled from ".\View\02.html" */ ?>
<?php /*%%SmartyHeaderCode:2667954571c425e0130-46400280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '045727188780aed705d9714c68a1eb5e7fc15155' => 
    array (
      0 => '.\\View\\02.html',
      1 => 1414995977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2667954571c425e0130-46400280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54571c4266f423_80368304',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54571c4266f423_80368304')) {function content_54571c4266f423_80368304($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        <h2>保留变量使用</h2>
        <div><<?php ?>?php echo $_GET['name']; ?<?php ?>></div>
        <div><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
        <div>名字：<?php echo $_GET['name'];?>
</div>
        <div>年龄：<?php echo $_GET['age'];?>
</div>
        <div>主机名：<?php echo @constant('HOST');?>
</div>
        <div>时间戳：<?php echo time();?>
</div>
        <div>当前模板名称：<?php echo basename($_smarty_tpl->source->filepath);?>
</div>
        <div>模板目录名称：<?php echo dirname($_smarty_tpl->source->filepath);?>
</div>
        <div>模板引擎版本：<?php echo 'Smarty-3.1.16';?>
</div>
        <div>模板引擎定界符：<?php echo '{';?>
--<?php echo '}';?>
</div>
    </body>
</html><?php }} ?>
