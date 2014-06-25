<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2013-11-01 01:21:45 compiled from "/home/cyberjunky/workspace_other/igest/app/mwView/stats1.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:6492997985272f419c92c62-10675260%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'04b128a23a26fc6ca042f6a86e852f1af6efe2fb' => array (
						0 => '/home/cyberjunky/workspace_other/igest/app/mwView/stats1.tpl',
						1 => 1383264427,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '6492997985272f419c92c62-10675260',
		'function' => array (),
		'variables' => array (
				'listStat1' => 0,
				'row' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5272f419cb6f75_94622602' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5272f419cb6f75_94622602')) {function content_5272f419cb6f75_94622602($_smarty_tpl) {?><h3>Prévisions
	par Formation</h3>


<div align="center" class='scrolPage'>
	<table class="table table-hover table-bordered table-condensed">
		<tr>
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
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['FRM_NAME'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['PREVISION'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['PAIEMENT'];?>
</td>
		</tr>
 <?php } ?>
 
</table>
</div>



</div>
<?php }} ?>