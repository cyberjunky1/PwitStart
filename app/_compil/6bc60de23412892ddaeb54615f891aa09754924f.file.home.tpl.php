<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2013-11-03 13:14:22 compiled from "/home/cyberjunky/workspace_other/igest/app/mwView/home.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:4214331385272f3d3c851d1-72456432%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'6bc60de23412892ddaeb54615f891aa09754924f' => array (
						0 => '/home/cyberjunky/workspace_other/igest/app/mwView/home.tpl',
						1 => 1383480856,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '4214331385272f3d3c851d1-72456432',
		'function' => array (),
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5272f3d3d05982_10188189',
		'has_nocache_code' => false 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5272f3d3d05982_10188189')) {function content_5272f3d3d05982_10188189($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style type="text/css">
body {
	padding-top: 100px;
	padding-bottom: 40px;
	background-attachment: fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

.sidebar-nav {
	padding: 9px 0;
}

@media ( max-width : 980px) { /* Enable use of floated navbar text */
	.navbar-text.pull-right {
		float: none;
		padding-left: 5px;
		padding-right: 5px;
	}
	a {
		color: #00FF00;
	}
}
</style>



</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ("topToolBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="container">
		<ul class="thumbnails">
			<li class="span4"><a href=">mensualite>Index" class="thumbnail"
				style="color: #000000;">
					<div class="thumbnail"
						style="background-color: #6FACE5; text-align: center;">
						<br>
						<br>
						<br> <img src="../rsrc/img/Graphics-Pen-icon.png" width="50%"
							height="50%" alt="massif"> <br>
						<br>
						<br>
						<h3 style="color: #FFFFFF">Paiements</h3>
						<br>
						<br>
					</div>
			</a></li>
			<li class="span4"><a href=">stats>Index" class="thumbnail"
				style="color: #000000">
					<div class="thumbnail"
						style="background-color: #6FACE5; text-align: center;">
						<br>
						<br>
						<br> <img src="../rsrc/img/Games-icon.png" width="50%"
							height="50%" alt="etude"> <br>
						<br>
						<br>
						<h3 style="color: #FFFFFF">États</h3>
						<br>
						<br>
					</div>
			</a></li>

			<li class="span4"><a href=">informations>Index>infEtudiants"
				class="thumbnail" style="color: #000000">
					<div class="thumbnail"
						style="background-color: #6FACE5; text-align: center;">
						<br>
						<br>
						<br> <img src="../rsrc/img/param.png" width="50%" height="50%"
							alt="param"> <br>
						<br>
						<br>
						<h3 style="color: #FFFFFF">Inscriptions</h3>
						<br>
						<br>
					</div>
			</a></li>
		</ul>
	</div>
</body>
</html><?php }} ?>