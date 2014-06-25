<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2014-02-16 17:43:35 compiled from "/home/cyberjunky/workspace_other/gttr/app/mwView/stats.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:3460674755300eab772abb0-03000212%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'4d6a26db1ca4f319ee8c6fa9a29cf5f93b403088' => array (
						0 => '/home/cyberjunky/workspace_other/gttr/app/mwView/stats.tpl',
						1 => 1383233614,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '3460674755300eab772abb0-03000212',
		'function' => array (),
		'variables' => array (
				'filejs' => 0,
				'frametpl' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5300eab778f750_63845630' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300eab778f750_63845630')) {function content_5300eab778f750_63845630($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript"
	src="rsrc/js/<?php echo $_smarty_tpl->tpl_vars['filejs']->value;?>
"></script>
</head>

<body>
	<div class="row">
		<div class="span12">
			<?php echo $_smarty_tpl->getSubTemplate ("topToolBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="row">
				<div class="span3"><?php echo $_smarty_tpl->getSubTemplate ("infLeftMenuStats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
				<div class="span9">
					<br>
					<br>
					<br><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['frametpl']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
			</div>
		</div>
	</div>

</body>
</html><?php }} ?>