<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2014-02-16 17:43:38 compiled from "/home/cyberjunky/workspace_other/gttr/app/mwView/informations.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:9384756845300eababd7bf1-24406817%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'946dda88fa4737b1d1c0b6ac852612e83c321720' => array (
						0 => '/home/cyberjunky/workspace_other/gttr/app/mwView/informations.tpl',
						1 => 1371468677,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '9384756845300eababd7bf1-24406817',
		'function' => array (),
		'variables' => array (
				'filejs' => 0,
				'frametpl' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5300eabac05ea5_10235625' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300eabac05ea5_10235625')) {function content_5300eabac05ea5_10235625($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript"
	src="rsrc/js/<?php echo $_smarty_tpl->tpl_vars['filejs']->value;?>
"></script>
</head>

<body>
	<div class="row">
		<div class="span12">
			<?php echo $_smarty_tpl->getSubTemplate ("topToolBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="row">
				<div class="span3"><?php echo $_smarty_tpl->getSubTemplate ("infLeftMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
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