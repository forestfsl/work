<?php /* Smarty version Smarty-3.1.16, created on 2014-11-03 16:00:56
         compiled from ".\View\06-1.html" */ ?>
<?php /*%%SmartyHeaderCode:133145457353749afa0-63210304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbaaf5a62198c8316a4dee6b2e17ab4f912a1836' => 
    array (
      0 => '.\\View\\06-1.html',
      1 => 1415001655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133145457353749afa0-63210304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54573537525e56_83953389',
  'variables' => 
  array (
    'animal' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54573537525e56_83953389')) {function content_54573537525e56_83953389($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>新建网页</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <script type="text/javascript">

        </script>

        <style type="text/css">
        .gy{ background-color:gray; }
        .bl{ background-color:blue; }
        </style>
    </head>


    <body>
        <h2>数组遍历-应用</h2>
        <ul>
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['animal']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->index++;
 $_smarty_tpl->tpl_vars['v']->first = $_smarty_tpl->tpl_vars['v']->index === 0;
?>
            <?php if ($_smarty_tpl->tpl_vars['v']->first) {?>
            <li class="gy">
            <?php } elseif ($_smarty_tpl->tpl_vars['v']->iteration%2==1) {?>
            <li class="bl">
            <?php } else { ?>
            <li>
            <?php }?>
            
            <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

            </li>
        <?php } ?>
        </ul>
    </body>
</html><?php }} ?>
