<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2014-02-16 18:11:40 compiled from "/home/cyberjunky/workspace_other/gttr/app/mwView/stats3.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:12320185515300f14c29cbb1-11242533%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'2c159bcabeaa6a5b5eecb1ee5a1965ef36cec8c6' => array (
						0 => '/home/cyberjunky/workspace_other/gttr/app/mwView/stats3.tpl',
						1 => 1383485182,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '12320185515300f14c29cbb1-11242533',
		'function' => array (),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5300f14c2bacd3_33646640' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300f14c2bacd3_33646640')) {function content_5300f14c2bacd3_33646640($_smarty_tpl) {?><h3>Suivi
	par Formation</h3>

<div align="center">
	<fieldset class="mwfieldset1" style="width: 100%">

		<legend>Choisir les les dates </legend>
		<table style="width: 100%;">
			<tr>
				<td align="right">Date début</td>
				<td style="vertical-align: middle;">
				
				<td><input type="text" id="DATE_BEG" name="DATE_BEG"
					style="width: 80px" readonly>
				
				<td></td>
				<td align="right">Date fin</td>
				<td style="vertical-align: middle;">
				
				<td><input type="text" id="DATE_END" name="DATE_END"
					style="width: 80px" readonly>
				
				<td></td>
				<td align="right"></td>
				<td style="vertical-align: middle;">
				
				<td><a class="btn btn-mini" onclick="getStat3();"><i
						class="icon-search"></i></a>
				
				<td></td>
			</tr>
		</table>
	</fieldset>


	<div align="center" class='scrolPage2'>

		<table id="tablePrev" name="tablePrev"
			class="table table-hover table-bordered table-condensed">

		</table>

		</table>


	</div>



</div>
<?php }} ?>