<?php /* Smarty version Smarty-3.1.16, created on 2014-11-05 16:29:22
         compiled from ".\View\07.html" */ ?>
<?php /*%%SmartyHeaderCode:77415459de9b012963-33854017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1fce86fcad56532cb8c47fdcce971466b7b0bb2' => 
    array (
      0 => '.\\View\\07.html',
      1 => 1415176018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77415459de9b012963-33854017',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5459de9b0b5f17_51885036',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5459de9b0b5f17_51885036')) {function content_5459de9b0b5f17_51885036($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
        <h2>缓存集合</h2>
        商品展示<br />
        条件：<br />
        品牌：<?php echo $_GET['brand'];?>
<br />
        价格：<?php echo $_GET['price'];?>
<br />
        网络：<?php echo $_GET['network'];?>
<br />
        屏幕大小：<?php echo $_GET['big'];?>
<br />
    </body>
</html><?php }} ?>
