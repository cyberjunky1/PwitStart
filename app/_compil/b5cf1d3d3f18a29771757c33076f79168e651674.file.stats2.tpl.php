<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2014-02-16 18:31:49 compiled from "/home/cyberjunky/workspace_other/gttr/app/mwView/stats2.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:1576291085300ed66bebab7-74974707%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'b5cf1d3d3f18a29771757c33076f79168e651674' => array (
						0 => '/home/cyberjunky/workspace_other/gttr/app/mwView/stats2.tpl',
						1 => 1392571906,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '1576291085300ed66bebab7-74974707',
		'function' => array (),
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5300ed66c17644_03957611',
		'variables' => array (
				'listStat2' => 0,
				'row' => 0,
				'total1' => 0,
				'total2' => 0 
		),
		'has_nocache_code' => false 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300ed66c17644_03957611')) {function content_5300ed66c17644_03957611($_smarty_tpl) {?><h3>Prévisions
	par Etudiant</h3>


<div align="center" class='scrolPage'>
	<table class="table table-hover table-bordered table-condensed">
		<tr>
			<th>Num</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Prévisions</th>
			<th>Paiements</th>
		</tr>
<?php
		
$_smarty_tpl->tpl_vars ['row'] = new Smarty_Variable ();
		$_smarty_tpl->tpl_vars ['row']->_loop = false;
		$_from = $_smarty_tpl->tpl_vars ['listStat2']->value;
		if (! is_array ( $_from ) && ! is_object ( $_from )) {
			settype ( $_from, 'array' );
		}
		foreach ( $_from as $_smarty_tpl->tpl_vars ['row']->key => $_smarty_tpl->tpl_vars ['row']->value ) {
			$_smarty_tpl->tpl_vars ['row']->_loop = true;
			?>
 	<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['num'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['ETU_NOM'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['ETU_PRENOM'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['PREVISION'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['PAIEMENT'];?>
</td>
		</tr>
<?php } ?>
 
 
   <tr>
			<td><b>Total</b></td>
			<td></td>
			<td></td>
			<td><b><?php echo $_smarty_tpl->tpl_vars['total1']->value;?>
</b></td>
			<td><b><?php echo $_smarty_tpl->tpl_vars['total2']->value;?>
</b></td>
		</tr>

	</table>
</div>



</div>
<?php }} ?>