$(function() {

	edit=function(mode,frmid,frmname,label,annee){
		if(mode == 'E'){
			$("#FRM_ID").val(frmid);
			$("#FRM_NAME").val(frmname);
			$("#FRM_LABEL").val(label);
			$("#FRM_ANNEE").val(annee);
			

		}
		if(mode == 'N'){
			$("#FRM_ID").val('');
			$("#FRM_NAME").val('');
			$("#FRM_LABEL").val('');
			$("#FRM_ANNEE").val('');

		}
		
		
	
		$("#formDialog").dialog({
			modal: true,
			width: 700,
			buttons: {
				"Enregistrer": function(){ 
					if($("#FRM_NAME").val().length < 2){
						alert ("Nom trop court !")
						return (0);
					}
					if($("#FRM_LABEL").val().length < 4){
						alert ("label trop court !")
						return (0);
					}						
				

					$.ajax({
						   type: "POST", 
						   url: ">infFormations>Save", 
						   data: {
							   mode			 : mode,
							   FRM_ID 		 : $("#FRM_ID").val(),
							   FRM_NAME 	 : $("#FRM_NAME").val(),
							   FRM_LABEL 	 : $("#FRM_LABEL").val(),
							   FRM_ANNEE 	 : $("#FRM_ANNEE").val(),
						   },
						   async: false, 
						   success: function(data){
							   location.href = ">informations>Index>infFormations";
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
				   url: ">infFormations>Delete", 
				   data: {
					   FRM_ID : pid
				   },
				   async: false, 
				   success: function(data){
					   location.href = ">informations>Index>infFormations";
				   },
			  	   error:function(xhr, ajaxOptions, thrownError){
						alert("del access error."+"\nstatusText: "+xhr.statusText+"\nthrownError: "+thrownError);
				   }
			});
		}
	};

});
