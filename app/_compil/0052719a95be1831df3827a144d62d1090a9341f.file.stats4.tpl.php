<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2014-02-16 18:13:35 compiled from "/home/cyberjunky/workspace_other/gttr/app/mwView/stats4.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:17505968855300f1bf742f94-14463048%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'0052719a95be1831df3827a144d62d1090a9341f' => array (
						0 => '/home/cyberjunky/workspace_other/gttr/app/mwView/stats4.tpl',
						1 => 1383485171,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '17505968855300f1bf742f94-14463048',
		'function' => array (),
		'variables' => array (
				'listFrm' => 0 
		),
		'has_nocache_code' => false,
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5300f1bf781771_05642129' 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5300f1bf781771_05642129')) {function content_5300f1bf781771_05642129($_smarty_tpl) {?><?php

		
if (! is_callable ( 'smarty_function_html_options' ))
			include '/home/cyberjunky/workspace_other/gttr/libs/smarty/libs/plugins/function.html_options.php';
		?><h3>Suivi par Formation/Etlève</h3>

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
				<td align="right">Formation</td>

				<td style="vertical-align: middle;">
		<?php echo smarty_function_html_options(array('name'=>"listFrm",'id'=>"FRM_ID",'options'=>$_smarty_tpl->tpl_vars['listFrm']->value,'style'=>"width: 400px;"),$_smarty_tpl);?>

	</td>
				<td style="vertical-align: middle;">
				
				<td><a class="btn btn-mini" onclick="getStat4();"><i
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