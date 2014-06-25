$(function() {

	 
	 $( "#PYE_DATE" ).datepicker({
		 showOn: "button",
		 buttonImage: "../rsrc/img/calendar.gif",
		 buttonImageOnly: true,
		 dateFormat: 'yy-mm-dd'
	 });
	 
	 $( "#REC_DATE_BEGIN" ).datepicker({
		 showOn: "button",
		 buttonImage: "../rsrc/img/calendar.gif",
		 buttonImageOnly: true,
		 dateFormat: 'yy-mm-dd'
	 });
	 $( "#PYE_DATE_PAYEMENT" ).datepicker({
		 showOn: "button",
		 buttonImage: "../rsrc/img/calendar.gif",
		 buttonImageOnly: true,
		 dateFormat: 'yy-mm-dd'
	 }); 

	/*
	 * refreshDetailPaiement
	 */
	refreshDetailPaiement=function(){
		menid = $("#MEN_ID_DETAILS").val();
		var list ;		
		$.ajax({
			   type: "POST", 
			   url: ">mensualite>GetDetails", 
			   data: {
				   mend_id: menid
			   },
			   async: false,
			   dataType: 'JSON', 
			   success: function(data){
				   list = data;
			   },
		  	   error:function(xhr, ajaxOptions, thrownError){
		  		 	alert(list);
					alert("Error editDetails");
					alert(xhr.statusText);
			    	alert(thrownError);
			   }
		});
	
		var tab = $("#detailsMensTable");
		tab.empty();
		$("#detailsMensTable").append(
				"<thead><tr>" +
					"<th>N°</th>"+
					"<th>Date</th>"+
					"<th>Prévision</th>"+
					"<th>Date Paiement</th>"+
					"<th>Paiement</th>"+					
					"<th>Mode P</th>"+
					"<th>Fct</th>"+
				"</tr></thead><tbody>"
		);
		var note = "";
		var nbr = 0;
		$.each(list, function(key, row) {
			nbr++;
			$("#detailsMensTable").append(
					"<tr>" +
						"<td>"+nbr+"</td>"+
						"<td>"+row['PYE_DATE'] +"</td>"+
						"<td>"+row['PYE_PREVISION'] +"</td>"+
						"<td>"+row['PYE_DATE_PAYEMENT'] +"</td>"+
						"<td>"+row['PYE_PAIEMENT'] +"</td>"+
						"<td>"+row['PYE_MODE'] +"</td>"+
						"<td style=\"width: 70px\">"+
						 	"<a class=\"btn btn-mini\" onclick=\"editPaiement('"+row['PYE_ID']+"','"+row['PYE_DATE']+"','"+row['PYE_PREVISION']+"','"+row['PYE_PAIEMENT']+"','"+row['PYE_REMIS']+"','"+row['PYE_MODE']+"')\"><i class=\"icon-edit\"></i></a>&nbsp;"+
						 	"<a class=\"btn btn-mini\" onclick=\"delPaiement('"+row['PYE_ID']+"')\"><i class=\"icon-trash\"></i></a>&nbsp;"+
						"</td>"+"</tr>"
			);
			
		});
		$("#detailsMensTable").append("</tbody>");
	};
	

	/*
	 * editDetails
	 */
	editDetails=function(menid,frmid,etuid){
		
		$("#ETU_ID_DETAILS").val(etuid);
		$("#FRM_ID_DETAILS").val(frmid);
		$("#MEN_ID_DETAILS").val(menid);
		
		refreshDetailPaiement();
		
		$("#detailDialog").dialog({
			modal: true,
			width: 700,
			
			buttons: {
				"oK": function(){
						$(this).dialog("close");
					}
				},
		});
	}
	
	
	/**
	 * delMassif
	 */
	delMens=function(pid){
		if(confirm("Voulez vous supprimer vraiment cet élément ?")){
			$.ajax({
				   type: "POST", 
				   url: ">mensualite>Delete", 
				   data: {
					   MEN_ID : pid
				   },
				   async: false, 
				   success: function(data){

				   },
			  	   error:function(xhr, ajaxOptions, thrownError){
						alert("supprimer error."+"\nstatusText: "+xhr.statusText+"\nthrownError: "+thrownError);
				   }
			});
			getList();
		}
	};
	
	
	/**
	 * editMens
	 */
	editMens=function(pid,frm_id,etu_id,prix,nbmen){
		
		$("#MEN_ID").val(pid);
		$("#MEN_FRM_ID").val(frm_id);
		$("#MEN_ETU_ID").val(etu_id);
		$("#MEN_PRIX_FRM").val(prix);
		$("#MEN_MENSUALITE").val(nbmen);

		if($('#MEN_ID').val().length != 0){
			$("#tr1").hide();
			$("#tr2").hide();			
		}
		else{
			$("#tr1").show();
			$("#tr2").show();
		}
		
		getEtudOfForm();
		
		$("#mensDialog").dialog({
			modal: true,
			width: 700,
			
			buttons: {
				"Enregistrer": function(){	
					
					if($("#MEN_PRIX_FRM").val().length == 0 ){
						alert ("Prix trop null !")
						return (0);
					}
					if($("#MEN_MENSUALITE").val().length == 0){
						alert ("Nbr Mensualités trop court !")
						return (0);
					}		
					
					if($('#MEN_ID').val().length == 0){
						if($("#REC_DATE_BEGIN").val().length == 0){
							alert ("Date de début obligatoire !")
							return (0);
						}
					}
					
					$.ajax({
						url: ">mensualite>Save", 
						type: "POST", 
						cache : false,
						async: false, 
						data : $('#formMensualite').serialize(),
						  success: function(data){
							  if(data.length >0){
								  alert(data);
							  }
						   },
						   error:function(xhr, ajaxOptions, thrownError){
								alert("edit infPlanche error."+"\nstatusText: "+xhr.statusText+"\nthrownError: "+thrownError);
						   },
					});
					
					$(this).dialog("close");
					getList();
				},
				"Annuler": function(){
						$(this).dialog("close");
					}
				},
		});
	};

	
	/**
	 * refresh
	 */
	getList = function(){
		var list;
		var frmid = $("#FRM_ID").val();
		$.ajax({
			   type: "POST", 
			   url: ">mensualite>GetList", 
			   data: {
				   frmid: frmid
			   },
			   async: false,
			   dataType: 'JSON', 
			   success: function(data){
				   list = data;
			   },
		  	   error:function(xhr, ajaxOptions, thrownError){
		  		 	alert(list);
					alert("Error getList");
					alert(xhr.statusText);
			    	alert(thrownError);
			   }
		});
	
		var tab = $("#tableMens");
		tab.empty();
		
		$("#tableMens").append(
				"<thead><tr>" +
					"<th>Détail</th>"+
					"<th>N°</th>"+
					"<th>Formation</th>"+
					"<th>Nom</th>"+
					"<th>Prénom</th>"+
					"<th>Prix</th>"+
					"<th>Nb Mensualités</th>"+
					"<th>Fct</th>"+
				"</tr></thead><tbody>"
		);
		var note = "";
		var nbr = 0;
		$.each(list, function(key, row) {
			nbr++;
			$("#tableMens").append(
					"<tr>" +
							"<td style=\"width: 35px\">"+
							"<a class=\"btn btn-mini\" onclick=\"editDetails('"+row['MEN_ID']+"','"+row['FRM_ID']+"','"+row['ETU_ID']+"')\"><i class=\"icon-list\"></i></a>&nbsp;"
						+"</td>"+
						"<td>"+nbr+"</td>"+
						"<td>"+row['FRM_NAME'] +"</td>"+
						"<td>"+row['ETU_NOM'] +"</td>"+
						"<td>"+row['ETU_PRENOM'] +"</td>"+
						"<td>"+row['MEN_PRIX_FRM'] +"</td>"+
						"<td>"+row['MEN_MENSUALITE'] +"</td>"+						
						"<td style=\"width: 70px\">"+
						 	"<a class=\"btn btn-mini\" onclick=\"editMens('"+row['MEN_ID']+"','"+row['MEN_FRM_ID']+"','"+row['MEN_ETU_ID']+"','"+row['MEN_PRIX_FRM']+"','"+row['MEN_MENSUALITE']+"')\"><i class=\"icon-edit\"></i></a>&nbsp;"+
						 	"<a class=\"btn btn-mini\" onclick=\"delMens('"+row['MEN_ID']+"')\"><i class=\"icon-trash\"></i></a>&nbsp;"+
						"</td>"+"</tr>"
			);
		});
		
		$("#tableMens").append("</tbody>");
	};
	
	
	
	/*
	 * delPaiement
	 */
	delPaiement = function(pyeId){
		if(confirm("Voulez vous supprimer vraiment cet élément ?")){
			$.ajax({
				   type: "POST", 
				   url: ">mensualite>DeletePaiement", 
				   data : {
					   pyeId : pyeId
				   },
				   async: false, 
				   success: function(data){
					   alert(data);
				   },
			  	   error:function(xhr, ajaxOptions, thrownError){
			  		 	alert(list);
						alert("Error delPaiement");
						alert(xhr.statusText);
				    	alert(thrownError);
				   }
			});
			refreshDetailPaiement();
		}
	}
	
	
	/*
	 * editPaiement
	 */
	editPaiement = function(paieid,date,prev,paie,remis,mode){
		
		var menid = $("#MEN_ID_DETAILS").val();
		var frmid = $("#FRM_ID_DETAILS").val();
		var etuid = $("#ETU_ID_DETAILS").val();
		
		
		$("#PYE_ID").val(paieid);
		$("#PYE_MEN_ID").val(menid);
		$("#PYE_FRM_ID").val(frmid);
		$("#PYE_ETU_ID").val(etuid);
		$("#PYE_DATE").val(date);
		$("#PYE_PREVISION").val(prev);
		$("#PYE_PAIEMENT").val(paie);
		$("#PYE_MODE").val(mode);
		
		
		if(remis == '1'){
			$("#PYE_REMIS").prop('checked', true);
		}else{
			$("#PYE_REMIS").prop('checked', false);
		}
		
		$("#paiementDialog").dialog({
			modal: true,
			width: 400,
			
			buttons: {
				"Enregistrer": function(){	    
						$.ajax({
							   type: "POST", 
							   url: ">mensualite>EditPaiement", 
							   data : $('#paiementForm').serialize(),
							   async: false, 
							   success: function(data){
								   alert(data);
							   },
						  	   error:function(xhr, ajaxOptions, thrownError){
						  		 	alert(list);
									alert("Error delPaiement");
									alert(xhr.statusText);
							    	alert(thrownError);
							   }
						});
						refreshDetailPaiement();
					
					$(this).dialog("close");
					getList();
				},
				"Annuler": function(){
						$(this).dialog("close");
					}
				},
		});
	}
	
	
	
	/**
	 * getEtudOfForm
	 */
	getEtudOfForm=function(){
		
		var pform = $("#MEN_FRM_ID").val();
		
		var FORM_ID = pform;
		var list;
		$.ajax({
			   type: "POST", 
			   url: ">mensualite>GetEtudOfForm", 
			   data : {
				   FORM_ID : FORM_ID
			   },
			   async: false, 
			   success: function(data){
				   list = data;
			   },
		  	   error:function(xhr, ajaxOptions, thrownError){
		  		 	alert(list);
					alert("Error getEtudOfForm");
					alert(xhr.statusText);
			    	alert(thrownError);
			   }
		});
		$("#MEN_ETU_ID").empty();
		list = eval('(' + list + ')');
		$.each(list, function(key, row) {
			$("#MEN_ETU_ID").append(
					"<option value=\""+ row.ETU_ID + "\">" + row.nomPrenom + "</option>"
			);
		});
		
	}
	
	//main
	
	
});
