<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2013-11-01 01:20:37 compiled from "/home/cyberjunky/workspace_other/igest/app/mwView/infUser.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:10897889245272f3d543cd18-35044641%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'bf2f9ca7549531a91a1d301862f1af3a277bce3d' => array (
						0 => '/home/cyberjunky/workspace_other/igest/app/mwView/infUser.tpl',
						1 => 1383216791,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '10897889245272f3d543cd18-35044641',
		'function' => array (),
		'variables' => array (
				'user' => 0,
				'row' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5272f3d54b6611_04882401' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5272f3d54b6611_04882401')) {function content_5272f3d54b6611_04882401($_smarty_tpl) {?><?php

		
if (! is_callable ( 'smarty_modifier_mwRight' ))
			include '../rsrc/smartyPlugins/modifier.mwRight.php';
		if (! is_callable ( 'smarty_modifier_mwAddslashes' ))
			include '../rsrc/smartyPlugins/modifier.mwAddslashes.php';
		?><h1>Utilisateurs</h1>

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
			<th>Login</th>
			<th>Mail</th>
			<th>Type</th>
			<th>Actions</th>
		</tr>
 <?php
		
$_smarty_tpl->tpl_vars ['row'] = new Smarty_Variable ();
		$_smarty_tpl->tpl_vars ['row']->_loop = false;
		$_from = $_smarty_tpl->tpl_vars ['user']->value;
		if (! is_array ( $_from ) && ! is_object ( $_from )) {
			settype ( $_from, 'array' );
		}
		foreach ( $_from as $_smarty_tpl->tpl_vars ['row']->key => $_smarty_tpl->tpl_vars ['row']->value ) {
			$_smarty_tpl->tpl_vars ['row']->_loop = true;
			?>
 	<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['USR_LNAME'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['USR_FNAME'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['USR_LOGIN'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['USR_MAIL'];?>
</td>
			<td><?php echo smarty_modifier_mwRight($_smarty_tpl->tpl_vars['row']->value['USR_RIGHTS']);?>
</td>

			<td style="width: 60px"><a class="btn btn-mini"
				onclick="edit('E','<?php echo $_smarty_tpl->tpl_vars['row']->value['USR_ID'];?>
',
					'<?php echo smarty_modifier_mwAddslashes($_smarty_tpl->tpl_vars['row']->value['USR_LNAME']);?>
','<?php echo smarty_modifier_mwAddslashes($_smarty_tpl->tpl_vars['row']->value['USR_FNAME']);?>
',
					'<?php echo $_smarty_tpl->tpl_vars['row']->value['USR_LOGIN'];?>
','<?php echo $_smarty_tpl->tpl_vars['row']->value['USR_MAIL'];?>
','<?php echo $_smarty_tpl->tpl_vars['row']->value['USR_RIGHTS'];?>
'
					
				)"><i class="icon-edit"></i></a> <a class="btn btn-mini"
				onclick="del('<?php echo $_smarty_tpl->tpl_vars['row']->value['USR_ID'];?>
');"> <i class="icon-trash"></i>
			</a></td>
		</tr>
 <?php } ?>
 
</table>
</div>



<div title="utilisateur" id="userDialog"
	style="display: none; background-color: #f7f7f9">
	<h4>Massif</h4>
	<form action="POST" action="#" id="formUser" name="formUser">
		<input type="hidden" id="USR_ID" name="USR_ID">
		<table style="width: 95%">

			<tr>
				<td align="right" style="width: 40%">Nom
				
				<td>
				
				<td><input type="text" id="USR_LNAME" name="USR_LNAME">
				
				<td>
			
			</tr>
			<tr>
				<td align="right" style="width: 40%">Prénom
				
				<td>
				
				<td><input type="text" id="USR_FNAME" name="USR_FNAME">
				
				<td>
			
			</tr>

			<tr>
				<td align="right" style="width: 40%">Type
				
				<td>
				
				<td><select id="USR_RIGHTS" name="USR_RIGHTS">
						<option value="ADM">Administrateur</option>
						<option value="CON">Consultant</option>
				</select>
				
				<td>
			
			</tr>
			<tr>
				<td align="right" style="width: 40%">Login
				
				<td>
				
				<td><input type="text" id="USR_LOGIN" name="USR_LOGIN">
				
				<td>
			
			</tr>
			<tr>
				<td align="right" style="width: 40%">Mot de passe
				
				<td>
				
				<td><input type="password" id="USR_PSW" name="USR_PSW">
				
				<td>
			
			</tr>
			<tr>
				<td align="right" style="width: 40%">Confirmer Mot de passe
				
				<td>
				
				<td><input type="password" id="USR_PSW_C" name="USR_PSW_C">
				
				<td>
			
			</tr>
			<tr>
				<td align="right" style="width: 40%">Mail
				
				<td>
				
				<td><input type="text" id="USR_MAIL" name="USR_MAIL">
				
				<td>
			
			</tr>


		</table>
	</form>
</div>
<?php }} ?>