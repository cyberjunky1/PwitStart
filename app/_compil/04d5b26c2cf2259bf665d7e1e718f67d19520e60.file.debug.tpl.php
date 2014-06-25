<?php /* Smarty version Smarty-3.1.13, created on 2014-04-25 10:03:02
         compiled from "/home/cyberjunky/workspace_php/pwit/app/mwView/debug.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2076821544535a16b6228833-08710597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04d5b26c2cf2259bf665d7e1e718f67d19520e60' => 
    array (
      0 => '/home/cyberjunky/workspace_php/pwit/app/mwView/debug.tpl',
      1 => 1398245806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2076821544535a16b6228833-08710597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debug1' => 0,
    'debug2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_535a16b629d9a8_46249297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535a16b629d9a8_46249297')) {function content_535a16b629d9a8_46249297($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Debug</title>
</head>
<body>
<h1>MwDebug:</h1>
<h2>Error:</h2>
<p><?php echo $_smarty_tpl->tpl_vars['debug1']->value;?>
</p>

<h2>Comments:</h2>
<p><?php echo $_smarty_tpl->tpl_vars['debug2']->value;?>
</p>
</body>
</html><?php }} ?>