<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2014-02-16 18:13:38 compiled from "/home/cyberjunky/workspace_other/gttr/app/mwView/debug.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:20577480135300f1c2f2c9d9-88941802%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'f28a7c57a83581aedfa8a702fbc37c832503e866' => array (
						0 => '/home/cyberjunky/workspace_other/gttr/app/mwView/debug.tpl',
						1 => 1370200499,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '20577480135300f1c2f2c9d9-88941802',
		'function' => array (),
		'variables' => array (
				'debug1' => 0,
				'debug2' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5300f1c30037e3_55552737' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300f1c30037e3_55552737')) {function content_5300f1c30037e3_55552737($_smarty_tpl) {?>
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