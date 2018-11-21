<?php /* Smarty version Smarty-3.1.16, created on 2014-11-03 17:01:24
         compiled from ".\View\09.html" */ ?>
<?php /*%%SmartyHeaderCode:8626545743792ac3f0-31380128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90643230bc23f063d2bcbe5537eb05c6b2c7d3a4' => 
    array (
      0 => '.\\View\\09.html',
      1 => 1415005269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8626545743792ac3f0-31380128',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_545743793488c2_37589652',
  'variables' => 
  array (
    'area' => 0,
    'seled' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545743793488c2_37589652')) {function content_545743793488c2_37589652($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\web\\0911\\libs\\plugins\\function.html_options.php';
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
        <h2>下拉列表应用</h2>
        <?php echo smarty_function_html_options(array('name'=>"city",'options'=>$_smarty_tpl->tpl_vars['area']->value,'selected'=>$_smarty_tpl->tpl_vars['seled']->value,'multiple'=>"multiple"),$_smarty_tpl);?>


        城市：
        <select name="city" multiple="multiple">
            <option value="1">北京</option>
            <option value="2">上海</option>
            <option value="3">深圳</option>
            <option value="4">广州</option>
        </select>
    </body>
</html><?php }} ?>
