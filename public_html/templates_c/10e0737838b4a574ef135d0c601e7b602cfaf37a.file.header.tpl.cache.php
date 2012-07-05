<?php /* Smarty version Smarty-3.1.11, created on 2012-07-05 18:34:10
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188074ff5c20254b479-23233654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1341505663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188074ff5c20254b479-23233654',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_4ff5c2025a5225_37687591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff5c2025a5225_37687591')) {function content_4ff5c2025a5225_37687591($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config('index.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(((string)$_smarty_tpl->tpl_vars['menu']->value), 'local'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP London - <?php echo $_smarty_tpl->getConfigVariable('title');?>
 - The UK's number one PHP User group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="./favicon.ico">
  </head>

  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="./"><?php echo $_smarty_tpl->getConfigVariable('name');?>
</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li 
				<?php if ($_smarty_tpl->tpl_vars['menu']->value=='home'){?>
					class="active"
				<?php }?>
			  ><a href="./">Home</a></li>
              <li
				<?php if ($_smarty_tpl->tpl_vars['menu']->value=='about'){?>
					class="active"
				<?php }?>
			  ><a href="./about">About</a></li>
              <li
			  	<?php if ($_smarty_tpl->tpl_vars['menu']->value=='contact'){?>
					class="active"
				<?php }?>
			  ><a href="./contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div><?php }} ?>