<?php 
/*
       * Smarty version Smarty-3.1.13, created on 2013-11-03 14:45:33 compiled from "/home/cyberjunky/workspace_other/igest/app/mwView/mensualite.tpl"
       */
?>
<?php /*%%SmartyHeaderCode:18550450495272f409a79080-27685920%%*/if (! defined ( 'SMARTY_DIR' ))
	exit ( 'no direct access allowed' );
$_valid = $_smarty_tpl->decodeProperties ( array (
		'file_dependency' => array (
				'0c626c1f6375a494cce32542b013e55172115db6' => array (
						0 => '/home/cyberjunky/workspace_other/igest/app/mwView/mensualite.tpl',
						1 => 1383486311,
						2 => 'file' 
				) 
		),
		'nocache_hash' => '18550450495272f409a79080-27685920',
		'function' => array (),
		'version' => 'Smarty-3.1.13',
		'unifunc' => 'content_5272f409ab9664_01834900',
		'variables' => array (
				'formationList' => 0,
				'etudientList' => 0 
		),
		'has_nocache_code' => false 
), false ); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5272f409ab9664_01834900')) {function content_5272f409ab9664_01834900($_smarty_tpl) {?><?php

		
if (! is_callable ( 'smarty_function_html_options' ))
			include '/home/cyberjunky/workspace_other/igest/libs/smarty/libs/plugins/function.html_options.php';
		?><?php

		
echo $_smarty_tpl->getSubTemplate ( "head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array (), 0 );
		?>

<script type="text/javascript" src="rsrc/js/mensulaite.js"></script>
<script type="text/javascript">

</script>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("topToolBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<br>
	<br>
	<h3 align="center">Mensualités</h3>
	<div align="center">
		<fieldset class="mwfieldset1" style="width: 90%">

			<legend>Formations</legend>
			<table style="width: 100%;">
				<tr>
					<td align="right">Formation</td>
					<td style="vertical-align: middle;">
		<?php echo smarty_function_html_options(array('name'=>"formationList",'id'=>"FRM_ID",'options'=>$_smarty_tpl->tpl_vars['formationList']->value,'style'=>"width: 400px;"),$_smarty_tpl);?>

		<a id="btnSec" class="btn btn-mini" onclick="getList('')"><i
							class="icon-search"></i></a>
					</td>
				</tr>
			</table>
		</fieldset>
	</div>

	<div class="btn-toolbar" style="width: 90%" align="center">
		<div class="btn-group pull-right" id="">
			<a class="btn btn-mini" onclick="editMens();"><i class="icon-plus"></i></a>
		</div>
	</div>

	<div align="center" class='scrolPage3' id="divTab">
		<table class="table table-hover table-bordered table-condensed"
			id="tableMens" style="width: 90%">

		</table>
	</div>


	<div title="Mensulatité" id="mensDialog"
		style="display: none; background-color: #f7f7f9">
		<h4>Ajouter/Editer</h4>
		<form action="POST" action="#" id="formMensualite"
			name="formMensualite">
			<input type="hidden" id="MEN_ID" name="MEN_ID">

			<table style="width: 95%">
				<tr>
					<td align="right" style="width: 40%">Formation
					
					<td>
					
					<td><?php echo smarty_function_html_options(array('id'=>'MEN_FRM_ID','name'=>'MEN_FRM_ID','options'=>$_smarty_tpl->tpl_vars['formationList']->value),$_smarty_tpl);?>

					
					<td>
				
				</tr>
				<tr>
					<td align="right" style="width: 40%">Etudiant
					
					<td>
					
					<td><?php echo smarty_function_html_options(array('id'=>'MEN_ETU_ID','name'=>'MEN_ETU_ID','options'=>$_smarty_tpl->tpl_vars['etudientList']->value),$_smarty_tpl);?>

					
					<td>
				
				</tr>

				<tr>
					<td align="right" style="width: 40%">Prix Total
					
					<td>
					
					<td><input type="text" id="MEN_PRIX_FRM" name="MEN_PRIX_FRM">
					
					<td>
				
				</tr>

				<tr>
					<td align="right" style="width: 40%">Nombre de Mensualités
					
					<td>
					
					<td><input type="text" id="MEN_MENSUALITE" name="MEN_MENSUALITE">
					
					<td>
				
				</tr>

				<tr id="tr1">
					<td align="right" style="width: 40%" id="date_beg_label">Date
						premier paiement
					
					<td>
					
					<td><input type="text" id="REC_DATE_BEGIN" name="REC_DATE_BEGIN"
						readonly>
					
					<td>
				
				</tr>
				<tr id="tr2">
					<td align="right" style="width: 40%" id="rec_label">Récurrence
					
					<td>
					
					<td><select id="REC_NBR" name="REC_NBR" style="width: 100px">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
					</select> <select id="REC_JMOIS" name="REC_JMOIS"
						style="width: 100px">
							<option value="mois">Mois</option>
							<option value="jours">Jours</option>
					</select>
					
					<td>
				
				</tr>

			</table>
		</form>
	</div>





	<div title="Détails" id="detailDialog"
		style="display: none; background-color: #f7f7f9">
		<h4>Détail des paiements</h4>
		<form action="POST" action="#" id="detailMensualite"
			name="detailMensualite">
			<input type="hidden" id="MEN_ID_DETAILS" name="MEN_ID_DETAILS"> <input
				type="hidden" id="ETU_ID_DETAILS" name="ETU_ID_DETAILS"> <input
				type="hidden" id="FRM_ID_DETAILS" name="FRM_ID_DETAILS">
			<div class="btn-group pull-right" id="">
				<a class="btn btn-mini" onclick="editPaiement('','','','','0');"><i
					class="icon-plus"></i></a>
			</div>
			<br>
			<br>
			<div
				style="border: 2px solid #ccc; width: 680px; height: 310px; overflow-y: scroll;">
				<table class="table table-bordered" id="detailsMensTable"
					name="detailsMensTable">

				</table>
			</div>
		</form>
	</div>


	<div title="Paiement" id="paiementDialog"
		style="display: none; background-color: #f7f7f9">
		<form action="POST" action="#" id="paiementForm" name="paiementForm">
			<input type="hidden" id="PYE_ID" name="PYE_ID"> <input type="hidden"
				id="PYE_MEN_ID" name="PYE_MEN_ID"> <input type="hidden"
				id="PYE_ETU_ID" name="PYE_ETU_ID"> <input type="hidden"
				id="PYE_FRM_ID" name="PYE_FRM_ID">


			<table style="width: 95%">
				<tr>
					<td align="right" style="width: 40%">Date
					
					<td>
					
					<td><input type="text" id="PYE_DATE" name="PYE_DATE"
						style="width: 80px" readonly>
					
					<td>
				
				</tr>

				<tr>
					<td align="right" style="width: 40%">Prévision
					
					<td>
					
					<td><input type="text" id="PYE_PREVISION" name="PYE_PREVISION">
					
					<td>
				
				</tr>
				<tr>
					<td align="right" style="width: 40%">Date Paiement
					
					<td>
					
					<td><input type="text" id="PYE_DATE_PAYEMENT"
						name="PYE_DATE_PAYEMENT" style="width: 80px" readonly>
					
					<td>
				
				</tr>
				<tr>
					<td align="right" style="width: 40%">Paiement
					
					<td>
					
					<td><input type="text" id="PYE_PAIEMENT" name="PYE_PAIEMENT">
					
					<td>
				
				</tr>
				<tr>
					<td align="right" style="width: 40%">Mode Paiement
					
					<td>
					
					<td><select id="PYE_MODE" name="PYE_MODE" style="width: 100px">
							<option value="ESP">Espèce</option>
							<option value="CHQ">Chèque</option>
							<option value="VIR">Virement</option>
					</select></td>
				</tr>
				<tr>
					<td align="right" style="width: 40%">Remis
					
					<td>
					
					<td><input type="checkbox" id="PYE_REMIS" name="PYE_REMIS"></td>
				</tr>
			</table>

		</form>
	</div>

</body>
</html><?php }} ?>