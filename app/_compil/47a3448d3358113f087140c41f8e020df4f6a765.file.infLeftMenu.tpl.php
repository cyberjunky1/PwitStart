<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2013-11-01 01:20:34 compiled from "/home/cyberjunky/workspace_other/igest/app/mwView/infLeftMenu.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:19341420765272f3d24d5105-43578160%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'47a3448d3358113f087140c41f8e020df4f6a765' => array (
						0 => '/home/cyberjunky/workspace_other/igest/app/mwView/infLeftMenu.tpl',
						1 => 1383220064,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '19341420765272f3d24d5105-43578160',
		'function' => array (),
		'variables' => array (
				'frame' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5272f3d2501228_50074725' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5272f3d2501228_50074725')) {function content_5272f3d2501228_50074725($_smarty_tpl) {?><br>
<br>
<br>
<div
	style="border: 1px; border-right-style: solid; border-color: silver; min-height: 580px">
	<ul class="nav nav-list">
		<li class="nav-header">Générale</li>

		<li
			class="<?php if ($_smarty_tpl->tpl_vars['frame']->value=='infFormations'){?>active<?php }?>">
			<a href=">informations>Index>infFormations">Formations&nbsp;&nbsp;</a>
		</li>

		<li
			class="<?php if ($_smarty_tpl->tpl_vars['frame']->value=='infEtudiants'){?>active<?php }?>">
			<a href=">informations>Index>infEtudiants">Etudiants&nbsp;&nbsp;</a>
		</li>



		<li class="nav-header">Utilisateurs</li>

		<li
			class="<?php if ($_smarty_tpl->tpl_vars['frame']->value=='infUser'){?>active<?php }?>">
			<a href=">informations>Index>infUser">Connexions&nbsp;&nbsp;</a>
		</li>

	</ul>
</div>
<?php }} ?>