<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2013-11-03 14:39:34 compiled from "/home/cyberjunky/workspace_other/igest/app/mwView/debug.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:81899720152765216010612-96667109%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'8de9748a9360325dfe39d3913e18d8b702568a26' => array (
						0 => '/home/cyberjunky/workspace_other/igest/app/mwView/debug.tpl',
						1 => 1370200499,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '81899720152765216010612-96667109',
		'function' => array (),
		'variables' => array (
				'debug1' => 0,
				'debug2' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5276521607d222_63628628' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5276521607d222_63628628')) {function content_5276521607d222_63628628($_smarty_tpl) {?>
<!DOCTYPE html>
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