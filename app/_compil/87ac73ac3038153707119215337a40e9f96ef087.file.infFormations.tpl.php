<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2013-11-01 01:21:53 compiled from "/home/cyberjunky/workspace_other/igest/app/mwView/infFormations.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:5008774765272f421c34a64-36206361%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'87ac73ac3038153707119215337a40e9f96ef087' => array (
						0 => '/home/cyberjunky/workspace_other/igest/app/mwView/infFormations.tpl',
						1 => 1383218929,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '5008774765272f421c34a64-36206361',
		'function' => array (),
		'variables' => array (
				'form' => 0,
				'row' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5272f421c96b94_21443446' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5272f421c96b94_21443446')) {function content_5272f421c96b94_21443446($_smarty_tpl) {?><?php

		
if (! is_callable ( 'smarty_modifier_mwAddslashes' ))
			include '../rsrc/smartyPlugins/modifier.mwAddslashes.php';
		?><h1>Formations</h1>

<div class="btn-toolbar" style="width: 90%" align="center">
	<div class="btn-group pull-left" id="">
		<a class="btn btn-mini" onclick="edit('N');"><i class="icon-plus"></i></a>
	</div>
</div>


<div align="center" class='scrolPage'>
	<table class="table table-hover table-bordered table-condensed">
		<tr>
			<th>Nom Fromation</th>
			<th>Label</th>
			<th>Année</th>

		</tr>
 <?php
		
$_smarty_tpl->tpl_vars ['row'] = new Smarty_Variable ();
		$_smarty_tpl->tpl_vars ['row']->_loop = false;
		$_from = $_smarty_tpl->tpl_vars ['form']->value;
		if (! is_array ( $_from ) && ! is_object ( $_from )) {
			settype ( $_from, 'array' );
		}
		foreach ( $_from as $_smarty_tpl->tpl_vars ['row']->key => $_smarty_tpl->tpl_vars ['row']->value ) {
			$_smarty_tpl->tpl_vars ['row']->_loop = true;
			?>
 	<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['FRM_NAME'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['FRM_LABEL'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['FRM_ANNEE'];?>
</td>

			<td style="width: 60px"><a class="btn btn-mini"
				onclick="edit('E','<?php echo $_smarty_tpl->tpl_vars['row']->value['FRM_ID'];?>
',
					'<?php echo smarty_modifier_mwAddslashes($_smarty_tpl->tpl_vars['row']->value['FRM_NAME']);?>
','<?php echo smarty_modifier_mwAddslashes($_smarty_tpl->tpl_vars['row']->value['FRM_LABEL']);?>
','<?php echo $_smarty_tpl->tpl_vars['row']->value['FRM_ANNEE'];?>
'
				)"><i class="icon-edit"></i></a> <a class="btn btn-mini"
				onclick="del('<?php echo $_smarty_tpl->tpl_vars['row']->value['FRM_ID'];?>
');"> <i class="icon-trash"></i>
			</a></td>
		</tr>
 <?php } ?>
 
</table>
</div>



<div title="Formation" id="formDialog"
	style="display: none; background-color: #f7f7f9">
	<h4>Ajouter / Editer</h4>
	<form action="POST" action="#" id="formDialog" name="formDialog">
		<input type="hidden" id="FRM_ID" name="FRM_ID">
		<table style="width: 95%">

			<tr>
				<td align="right" style="width: 40%">Nom
				
				<td>
				
				<td><input type="text" id="FRM_NAME" name="FRM_NAME">
				
				<td>
			
			</tr>
			<tr>
				<td align="right" style="width: 40%">Label
				
				<td>
				
				<td><input type="text" id="FRM_LABEL" name="FRM_LABEL">
				
				<td>
			
			</tr>
			<tr>
				<td align="right" style="width: 40%">Année
				
				<td>
				
				<td><input type="text" id="FRM_ANNEE" name="FRM_ANNEE">
				
				<td>
			
			</tr>




		</table>
	</form>
</div>
<?php }} ?>