function generate(){
//alert('sulod');
	$.ajax({
       url: 'http://localhost/Web Based Online Voting/gen.php',
       async: true,
       type: 'POST',
        crossDomain: true,
        dataType: 'json',
        success: function(response)
        {
			var decode = response;
			console.log(decode);
			if (decode.success == suc) 
			 {
				$('#myModal').modal("show");
			 	return;
			 }
			
			//$('#myModal').modal("hide");
		},
		error: function(response)
			{
				$('#myModal').modal("hide");
				alert(response.responseText);
                 console.log("Error");
                //alert(response);
                return;
            }
	});
}

function getID(id){
	var idd = id;
	alert(idd);
}