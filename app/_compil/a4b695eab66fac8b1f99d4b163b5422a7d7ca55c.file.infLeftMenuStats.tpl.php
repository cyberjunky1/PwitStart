<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2014-02-16 17:43:35 compiled from "/home/cyberjunky/workspace_other/gttr/app/mwView/infLeftMenuStats.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:20008282975300eab7798984-85214397%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'a4b695eab66fac8b1f99d4b163b5422a7d7ca55c' => array (
						0 => '/home/cyberjunky/workspace_other/gttr/app/mwView/infLeftMenuStats.tpl',
						1 => 1383486054,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '20008282975300eab7798984-85214397',
		'function' => array (),
		'variables' => array (
				'frame' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5300eab77d6937_58479302' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300eab77d6937_58479302')) {function content_5300eab77d6937_58479302($_smarty_tpl) {?><br>
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