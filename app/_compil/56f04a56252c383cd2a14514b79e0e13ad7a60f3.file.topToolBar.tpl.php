<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2013-11-01 01:20:34 compiled from "/home/cyberjunky/workspace_other/igest/app/mwView/topToolBar.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:15751917375272f3d24a3378-73763771%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'56f04a56252c383cd2a14514b79e0e13ad7a60f3' => array (
						0 => '/home/cyberjunky/workspace_other/igest/app/mwView/topToolBar.tpl',
						1 => 1370789314,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '15751917375272f3d24a3378-73763771',
		'function' => array (),
		'variables' => array (
				'title' => 0,
				'version' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5272f3d24cf592_35605284' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5272f3d24cf592_35605284')) {function content_5272f3d24cf592_35605284($_smarty_tpl) {?><div
	class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<button type="button" class="btn btn-navbar" data-toggle="collapse"
				data-target=".nav-collapse">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="brand" href=">home>Index"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li><a href="#">v<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</a></li>
				</ul>
				<div class="navbar-text pull-right">
					<ul class="nav">
						<li><a href="#"><?php echo $_SESSION['userLName'];?>
&nbsp;<?php echo $_SESSION['userFName'];?>
</a></li>
						<li><a href=">logOut>Index"><?php echo $_smarty_tpl->getConfigVariable('disconnect');?>
</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>