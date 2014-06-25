<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2013-12-01 19:22:47 compiled from "/home/cyberjunky/workspace_other/gttr/app/mwView/topToolBar.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:380448605529b7e772cbbe2-93810437%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'7ec23fe6cb7f139911478399cdf8e440fbfcacb1' => array (
						0 => '/home/cyberjunky/workspace_other/gttr/app/mwView/topToolBar.tpl',
						1 => 1370789314,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '380448605529b7e772cbbe2-93810437',
		'function' => array (),
		'variables' => array (
				'title' => 0,
				'version' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_529b7e772dd582_89092991' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529b7e772dd582_89092991')) {function content_529b7e772dd582_89092991($_smarty_tpl) {?><div
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