<?php /* Smarty version Smarty-3.1.16, created on 2014-11-03 16:57:12
         compiled from ".\View\08.html" */ ?>
<?php /*%%SmartyHeaderCode:1673054573fad604e32-98847861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d68c1294d53129eab117df6c2087f4c079f08ca' => 
    array (
      0 => '.\\View\\08.html',
      1 => 1415004781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1673054573fad604e32-98847861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54573fad709779_98237474',
  'variables' => 
  array (
    'outval' => 0,
    'seled' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54573fad709779_98237474')) {function content_54573fad709779_98237474($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_checkboxes')) include 'D:\\web\\0911\\libs\\plugins\\function.html_checkboxes.php';
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
        <h2>复选框应用</h2>
        爱好：
        <?php echo smarty_function_html_checkboxes(array('name'=>"hobby",'options'=>$_smarty_tpl->tpl_vars['outval']->value,'selected'=>$_smarty_tpl->tpl_vars['seled']->value,'separator'=>"&nbsp;&nbsp;",'label_ids'=>true),$_smarty_tpl);?>

 
    </body>
</html><?php }} ?>
