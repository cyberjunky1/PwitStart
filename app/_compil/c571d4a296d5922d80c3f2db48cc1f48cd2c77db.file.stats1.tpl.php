<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2014-02-16 18:34:04 compiled from "/home/cyberjunky/workspace_other/gttr/app/mwView/stats1.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:16896933605300eab77d9cb2-18919522%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'c571d4a296d5922d80c3f2db48cc1f48cd2c77db' => array (
						0 => '/home/cyberjunky/workspace_other/gttr/app/mwView/stats1.tpl',
						1 => 1392572034,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '16896933605300eab77d9cb2-18919522',
		'function' => array (),
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5300eab782db90_17938397',
		'variables' => array (
				'listStat1' => 0,
				'row' => 0,
				'total1' => 0,
				'total2' => 0 
		),
		'has_nocache_code' => false 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300eab782db90_17938397')) {function content_5300eab782db90_17938397($_smarty_tpl) {?><h3>Prévisions
	par Formation</h3>


<div align="center" class='scrolPage'>
	<table class="table table-hover table-bordered table-condensed">
		<tr>
			<th>Num</th>
			<th>Formations</th>
			<th>Prévisions</th>
			<th>Paiements</th>
		</tr>
 <?php
		
$_smarty_tpl->tpl_vars ['row'] = new Smarty_Variable ();
		$_smarty_tpl->tpl_vars ['row']->_loop = false;
		$_from = $_smarty_tpl->tpl_vars ['listStat1']->value;
		if (! is_array ( $_from ) && ! is_object ( $_from )) {
			settype ( $_from, 'array' );
		}
		foreach ( $_from as $_smarty_tpl->tpl_vars ['row']->key => $_smarty_tpl->tpl_vars ['row']->value ) {
			$_smarty_tpl->tpl_vars ['row']->_loop = true;
			?>
 	<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['num'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['FRM_NAME'];?>
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
			<td><b><?php echo $_smarty_tpl->tpl_vars['total1']->value;?>
</b></td>
			<td><b><?php echo $_smarty_tpl->tpl_vars['total2']->value;?>
</b></td>
		</tr>

	</table>
</div>



</div>
<?php }} ?>