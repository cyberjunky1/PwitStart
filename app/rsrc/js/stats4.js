$(function() {

	 $( "#DATE_BEG" ).datepicker({
		 showOn: "button",
		 buttonImage: "../rsrc/img/calendar.gif",
		 buttonImageOnly: true,
		 dateFormat: 'yy-mm-dd'
	 });
	 
	 $( "#DATE_END" ).datepicker({
		 showOn: "button",
		 buttonImage: "../rsrc/img/calendar.gif",
		 buttonImageOnly: true,
		 dateFormat: 'yy-mm-dd'
	 }); 	 
	 
	 

	 getStat4=function(){
			date1 = $("#DATE_BEG").val();
			date2 = $("#DATE_END").val();
			frm  = $("#FRM_ID").val();
			var list ;		
			$.ajax({
				   type: "POST", 
				   url: ">stats4>GetStat", 
				   data: {
					   DATE_BEG: date1,
					   DATE_END: date2,
					   FRM_ID: frm 
				   },
				   async: false,
				   dataType: 'JSON', 
				   success: function(data){
					   list = data;
				   },
			  	   error:function(xhr, ajaxOptions, thrownError){
			  		 	alert(list);
						alert("Error GetStat");
						alert(xhr.statusText);
				    	alert(thrownError);
				   }
			});
		
			var tab = $("#tablePrev");
			tab.empty();
			$("#tablePrev").append(
					"<thead><tr>" +
						"<th>Num</th>"+
						"<th>Formation</th>"+
						"<th>Etudiant</th>"+
						"<th>PREV</th>"+
						"<th>PAIE</th>"+				
						"<th>delta</th>"+
					"</tr></thead><tbody>"  
			);
			var note = "";
			var nbr = 1;
			var t1 = 0;var t2 = 0;var t3 = 0;
			
			$.each(list, function(key, row) {
				$("#tablePrev").append(
						"<tr>" +
							"<td>"+nbr +"</td>"+
							"<td>"+row['FRM_NAME'] +"</td>"+
							"<td>"+row['ETU_NOM']+" "+row['ETU_PRENOM'] +"</td>"+
							"<td>"+row['PREV'] +"</td>"+
							"<td>"+row['PAIE'] +"</td>"+
							"<td>"+row['delta'] +"</td>"+
						"</tr>"
				);
				nbr ++;
				t1 += parseFloat(row['PREV']);
				t2 += parseFloat(row['PAIE']) ;
				t3 += parseFloat(row['delta']);
			});
			
			$("#tablePrev").append(
					"<tr>" +
						"<td><b>Total</b></td>"+
						"<td></td>"+
						"<td></td>"+
						"<td><b>"+t1+"</b></td>"+
						"<td><b>"+t2+"</b></td>"+
						"<td><b>"+t3 +"</b></td>" +
					"</tr>"
			);
			
			$("#tablePrev").append("</tbody>");
		};
	//main
	
	
});
