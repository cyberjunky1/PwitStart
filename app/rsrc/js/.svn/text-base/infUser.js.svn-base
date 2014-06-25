$(function() {

	edit=function(mode,usrId,lname,fname,login,mail,right){
		if(mode == 'E'){
			$("#USR_ID").val(usrId);
			$("#USR_LNAME").val(lname);
			$("#USR_FNAME").val(fname);
			$("#USR_LOGIN").val(login);
			$("#USR_MAIL").val(mail);
			$("#USR_RIGHTS").val(right);
			$("#USR_PSW").val('');
			$("#USR_PSW_C").val('');
			

		}
		if(mode == 'N'){
			$("#USR_ID").val('');
			$("#USR_LNAME").val('');
			$("#USR_FNAME").val('');
			$("#USR_LOGIN").val('');
			$("#USR_MAIL").val('');
			$("#USR_RIGHTS").val('');

			$("#USR_PSW").val('');
			$("#USR_PSW_C").val('');

		}
		
		
	
		$("#userDialog").dialog({
			modal: true,
			width: 700,
			buttons: {
				"Enregistrer": function(){ 
					if($("#USR_LNAME").val().length < 4){
						alert ("Nom trop court !")
						return (0);
					}
					if($("#USR_FNAME").val().length < 4){
						alert ("Prénom trop court !")
						return (0);
					}						
					if($("#USR_MAIL").val().length < 4){
						alert ("Mail obligatoire !")
						return (0);
					}
					if($("#USR_LOGIN").val().length < 4){
						alert ("Login trop court !")
						return (0);
					}
					
					if(mode == 'E'){
						if($("#USR_PSW").val().length > 0){
							if($("#USR_PSW").val().length < 4){
								alert ("mot de passe trop court !")
								return (0);
							}
							if($("#USR_PSW").val() != $("#USR_PSW_C").val()){
								alert ("confirmation mot de passe incorrect !")
								return (0);
							}
						}
					}
					
					if(mode == 'N'){
						if($("#USR_PSW").val().length < 4){
							alert ("mot de passe trop court !")
							return (0);
						}
						if($("#USR_PSW").val() != $("#USR_PSW_C").val()){
							alert ("confirmation mot de passe incorrect !")
							return (0);
						}
					}
					

					$.ajax({
						   type: "POST", 
						   url: ">infUser>Save", 
						   data: {
							   mode			 : mode,
							   USR_ID 		 : $("#USR_ID").val(),
							   USR_LNAME 	 : $("#USR_LNAME").val(),
							   USR_FNAME 	 : $("#USR_FNAME").val(),
							   USR_LOGIN 	 : $("#USR_LOGIN").val(),
							   USR_PSW 	 	 : $("#USR_PSW").val(),
							   USR_MAIL 	 : $("#USR_MAIL").val(),
							   USR_RIGHTS 	 : $("#USR_RIGHTS").val()
						   },
						   async: false, 
						   success: function(data){
							   location.href = ">informations>Index>infUser";
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
				   url: ">infUser>Delete", 
				   data: {
					   	usr_id : pid
				   },
				   async: false, 
				   success: function(data){
					   location.href = ">informations>Index>infUser";
				   },
			  	   error:function(xhr, ajaxOptions, thrownError){
						alert("del access error."+"\nstatusText: "+xhr.statusText+"\nthrownError: "+thrownError);
				   }
			});
		}
	};

});
