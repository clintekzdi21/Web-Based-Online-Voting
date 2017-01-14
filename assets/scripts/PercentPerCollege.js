$(document).ready(function(){
	run();
});

function run(){
	$.ajax({
	    url: '/Web Based Online Voting/Colleges_VoteInPercentage.php',
	    async: true,
	    type: 'POST',
	    crossDomain: true,
	    dataType: 'json',
	    data: {
	    		
	    },
	    success: function(response) {
	    	var decode = response;
	    	if(decode.success == true){
	    		$('#tbl_colleges tbody > tr').remove();
	    		var total = 0;
	    		for(var i=0; i < decode.WhoVoted.length; i++){
	    			
	    				var percent = decode.WhoVoted[i].nullif / decode.TotalStudentPerCollege[i].nullif * 100
	    				var PercentWhoVotes = 100 - percent.toFixed(0);
	    				var total = total + PercentWhoVotes;

	    				if(PercentWhoVotes<=50){
	    				var html = '<tr style="color:red">\
	    							<td>'+ (i+1)+'</td>\
	    							<td>'+decode.TotalStudentPerCollege[i].college_name+'</td>\
	    							<td >'+PercentWhoVotes+'%</td>\
	    							</tr>'
						$('#tbl_colleges tbody').append(html);	
	    		}
	    				else{
	    				var html = '<tr>\
	    							<td>'+ (i+1)+'</td>\
	    							<td>'+decode.TotalStudentPerCollege[i].college_name+'</td>\
	    							<td >'+PercentWhoVotes+'%</td>\
	    							</tr>'
						$('#tbl_colleges tbody').append(html);	
	    				}

	    				
	    	}

	    				
	    	}
	    	
	    },
	    error: function(error) {
	    	console.log('error...',error);
	    }
	});
}