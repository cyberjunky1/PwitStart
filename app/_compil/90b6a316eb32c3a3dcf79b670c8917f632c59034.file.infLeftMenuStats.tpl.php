<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2013-11-03 14:40:57 compiled from "/home/cyberjunky/workspace_other/igest/app/mwView/infLeftMenuStats.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:12093578945272f419c74f46-27103254%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'90b6a316eb32c3a3dcf79b670c8917f632c59034' => array (
						0 => '/home/cyberjunky/workspace_other/igest/app/mwView/infLeftMenuStats.tpl',
						1 => 1383486054,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '12093578945272f419c74f46-27103254',
		'function' => array (),
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5272f419c8dbc4_67770375',
		'variables' => array (
				'frame' => 0 
		),
		'has_nocache_code' => false 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5272f419c8dbc4_67770375')) {function content_5272f419c8dbc4_67770375($_smarty_tpl) {?><br>
<br>
<br>
<div
	style="border: 1px; border-right-style: solid; border-color: silver; min-height: 580px">
	<ul class="nav nav-list">
		<li class="nav-header">Etats</li>

		<li
			class="<?php if ($_smarty_tpl->tpl_vars['frame']->value=='stats1'){?>active<?php }?>">
			<a href=">stats>Index>stats1">Prévision Par Formation&nbsp;&nbsp;</a>
		</li>
		<li
			class="<?php if ($_smarty_tpl->tpl_vars['frame']->value=='stats2'){?>active<?php }?>">
			<a href=">stats>Index>stats2">Prévision Par Etudiant&nbsp;&nbsp;</a>
		</li>
		<li
			class="<?php if ($_smarty_tpl->tpl_vars['frame']->value=='stats3'){?>active<?php }?>">
			<a href=">stats>Index>stats3">Suivi par Formation&nbsp;&nbsp;</a>
		</li>
		<li
			class="<?php if ($_smarty_tpl->tpl_vars['frame']->value=='stats4'){?>active<?php }?>">
			<a href=">stats>Index>stats4">Suivis par Etudiant&nbsp;&nbsp;</a>
		</li>
		<li class="nav-header">Paiements</li>
		<li
			class="<?php if ($_smarty_tpl->tpl_vars['frame']->value=='remis'){?>active<?php }?>">
			<a href=">stats>Index>remis">Remises&nbsp;&nbsp;</a>
		</li>
	</ul>
</div>
<?php }} ?>