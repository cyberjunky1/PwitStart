<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2013-11-01 01:20:34 compiled from "/home/cyberjunky/workspace_other/igest/app/mwView/infEtudiants.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:4235107015272f3d2506290-32528287%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'79b0410a328e961d5ab8a19fecdb8ed37bc6506e' => array (
						0 => '/home/cyberjunky/workspace_other/igest/app/mwView/infEtudiants.tpl',
						1 => 1383222266,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '4235107015272f3d2506290-32528287',
		'function' => array (),
		'variables' => array (
				'etud' => 0,
				'row' => 0,
				'formationList' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5272f3d25c1a09_28269568' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5272f3d25c1a09_28269568')) {function content_5272f3d25c1a09_28269568($_smarty_tpl) {?><?php

		
if (! is_callable ( 'smarty_modifier_mwAddslashes' ))
			include '../rsrc/smartyPlugins/modifier.mwAddslashes.php';
		if (! is_callable ( 'smarty_function_html_options' ))
			include '/home/cyberjunky/workspace_other/igest/libs/smarty/libs/plugins/function.html_options.php';
		?><h1>Etudiants</h1>

<div class="btn-toolbar" style="width: 90%" align="center">
	<div class="btn-group pull-left" id="">
		<a class="btn btn-mini" onclick="edit('N');"><i class="icon-plus"></i></a>
	</div>
</div>


<div align="center" class='scrolPage'>
	<table class="table table-hover table-bordered table-condensed">
		<tr>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Formation</th>
		</tr>
 <?php
		
$_smarty_tpl->tpl_vars ['row'] = new Smarty_Variable ();
		$_smarty_tpl->tpl_vars ['row']->_loop = false;
		$_from = $_smarty_tpl->tpl_vars ['etud']->value;
		if (! is_array ( $_from ) && ! is_object ( $_from )) {
			settype ( $_from, 'array' );
		}
		foreach ( $_from as $_smarty_tpl->tpl_vars ['row']->key => $_smarty_tpl->tpl_vars ['row']->value ) {
			$_smarty_tpl->tpl_vars ['row']->_loop = true;
			?>
 	<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['ETU_NOM'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['ETU_PRENOM'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['FRM_NAME'];?>
</td>


			<td style="width: 60px"><a class="btn btn-mini"
				onclick="edit('E','<?php echo $_smarty_tpl->tpl_vars['row']->value['ETU_ID'];?>
',
					'<?php echo smarty_modifier_mwAddslashes($_smarty_tpl->tpl_vars['row']->value['ETU_NOM']);?>
','<?php echo smarty_modifier_mwAddslashes($_smarty_tpl->tpl_vars['row']->value['ETU_PRENOM']);?>
','<?php echo $_smarty_tpl->tpl_vars['row']->value['ETU_FRM_ID'];?>
'
				)"><i class="icon-edit"></i></a> <a class="btn btn-mini"
				onclick="del('<?php echo $_smarty_tpl->tpl_vars['row']->value['ETU_ID'];?>
');"> <i class="icon-trash"></i>
			</a></td>
		</tr>
 <?php } ?>
 
</table>
</div>



<div title="Etudiant" id="etudDialog"
	style="display: none; background-color: #f7f7f9">
	<h4>Ajouter/Editer</h4>
	<form action="POST" action="#" id="etudDialog" name="etudDialog">
		<input type="hidden" id="ETU_ID" name="ETU_ID">
		<table style="width: 95%">

			<tr>
				<td align="right" style="width: 40%">Nom</td>
				<td><input type="text" id="ETU_NOM" name="ETU_NOM"></td>
			</tr>
			<tr>
				<td align="right" style="width: 40%">Prénom</td>
				<td><input type="text" id="ETU_PRENOM" name="ETU_PRENOM"></td>
			</tr>
			<tr>
				<td align="right" style="width: 40%">Formation</td>
				<td><?php echo smarty_function_html_options(array('name'=>"ETU_FRM_ID",'id'=>"ETU_FRM_ID",'options'=>$_smarty_tpl->tpl_vars['formationList']->value),$_smarty_tpl);?>
</td>
			</tr>


		</table>
	</form>
</div>
<?php }} ?>