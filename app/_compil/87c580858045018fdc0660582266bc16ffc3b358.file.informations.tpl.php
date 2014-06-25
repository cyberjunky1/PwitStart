<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2013-11-01 01:20:34 compiled from "/home/cyberjunky/workspace_other/igest/app/mwView/informations.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:15383538545272f3d243f674-20407440%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'87c580858045018fdc0660582266bc16ffc3b358' => array (
						0 => '/home/cyberjunky/workspace_other/igest/app/mwView/informations.tpl',
						1 => 1371468677,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '15383538545272f3d243f674-20407440',
		'function' => array (),
		'variables' => array (
				'filejs' => 0,
				'frametpl' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5272f3d248e1d7_64376371' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5272f3d248e1d7_64376371')) {function content_5272f3d248e1d7_64376371($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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