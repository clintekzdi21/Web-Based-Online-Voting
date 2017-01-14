function dhan(pid){
	var url = 'allin/foracc.php?pid='+pid;
	

	$.getJSON(url, function(data) {
        $.each(data, function(index, data) {

            console.log(data);

            $("#fullname").val(data.USERNAME);
            $("#fullnam").val(data.IDACCOUNT);
            document.getElementById("dxd").innerHTML = data.USERNAME;
            
        	
		});
 
    }); 
	$("#vince").click();
}

function aa(){
	//var ex=$("#fullname").val();
	var e = document.getElementById("wla");
    var str = e.options[e.selectedIndex].text;
    alert(e);
}
