$(function() {

	edit=function(mode,etuid,nom,pre,frmid){
		if(mode == 'E'){
			$("#ETU_ID").val(etuid);
			$("#ETU_NOM").val(nom);
			$("#ETU_PRENOM").val(pre);
			$("#ETU_FRM_ID").val(frmid);
			

		}
		if(mode == 'N'){
			$("#ETU_ID").val('');
			$("#ETU_NOM").val('');
			$("#ETU_PRENOM").val('');
			$("#ETU_FRM_ID").val('');

		}
		
		
	
		$("#etudDialog").dialog({
			modal: true,
			width: 700,
			buttons: {
				"Enregistrer": function(){ 
					if($("#ETU_NOM").val().length < 3){
						alert ("Nom trop court !")
						return (0);
					}
					if($("#ETU_PRENOM").val().length < 3){
						alert ("Prénom trop court !")
						return (0);
					}						
				

					$.ajax({
						   type: "POST", 
						   url: ">infEtud" +
						   		"iants>Save", 
						   data: {
							   mode			 : mode,
							   ETU_ID 		 : $("#ETU_ID").val(),
							   ETU_NOM 	 	 : $("#ETU_NOM").val(),
							   ETU_PRENOM 	 : $("#ETU_PRENOM").val(),
							   ETU_FRM_ID 	 : $("#ETU_FRM_ID").val(),
						   },
						   async: false, 
						   success: function(data){
							   location.href = ">informations>Index>infEtudiants";
						   },
					  	   error:function(xhr, ajaxOptions, thrownError){
								alert("edit ass error."+"\nstatusText: "+xhr.statusText+"\nthrownError: "+thrownError);
						   }
					});
					$(this).dialog("close");
				},
				"Annuler": function(){
						$(this).dialog("close");
					}
				},
		});
	};
	
	del=function(pid){
		if(confirm("Voulez vous supprimer vraiment cet élément ?")){
			$.ajax({
				   type: "POST", 
				   url: ">infEtudiants>Delete", 
				   data: {
					   ETU_ID : pid
				   },
				   async: false, 
				   success: function(data){
					   location.href = ">informations>Index>infEtudiants";
				   },
			  	   error:function(xhr, ajaxOptions, thrownError){
						alert("del access error."+"\nstatusText: "+xhr.statusText+"\nthrownError: "+thrownError);
				   }
			});
		}
	};

});
