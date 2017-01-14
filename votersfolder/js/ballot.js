var selected_candidate = new Array();

$(document).ready(function(){
	var user = JSON.parse(window.localStorage['votingUser'] || '{}');

	 $('#current_user').html(user[0].fullname);

	 console.log(user);
	 console.log(user[2].session_id);

	 loadCandidates();
	 get_ballot();
});

$(document).on("click", "#lstPositions li", function() {

	var user = JSON.parse(window.localStorage['votingUser'] || '{}');
	console.log(user);
	$('#headerContent').addClass('hidden');
	$('#mainContent').addClass('hidden');

	$('#lstPositions li').removeClass('active');
    $(this).addClass("active");

    $('#listofCandidates').removeClass('hidden');

    $('#lblPosition').html($(this).text());



    $.ajax({
        url: '/Web Based Online Voting/votersfolder/php/loadCandidate.php',
        async: true,
        type: 'POST',
        crossDomain: true,
        dataType: 'json',
        data: {
            positionID: $(this).attr("data-id")	
        },
        success: function(response) {
        	var decode = response;
        	var photo;
        	console.log(decode);

        	$('#candidatesContent').empty();
        	if(decode.success == true){

        		window.localStorage['data'] = JSON.stringify(decode.candidates);

        		for(var i = 0; i < decode.candidates.length; i++){

        			if(decode.candidates[i].position_name == 'Senator'){

        				if(user[0].college_name == decode.candidates[i].college_name){
        					if(decode.candidates[i].c_image == null){
        						photo = 'votersfolder/img/photo.jpg'
		        			}else{
		        				photo = 'data:image/jpg;base64,' + decode.candidates[i].c_image;
		        			}

	        			var html = '<div style="padding-bottom: 105px;float: left;margin: 10px;">\
									<div class="col-md-3"  style="padding-left: 70px; padding-top: 10px">\
										<div class="row mix-grid">\
											<div class="circular">\
												<a class="candidates"><img class="circular" src="'+ photo +'" alt="" width="144px"/>\
												<div style="text-align: center;">\
													<input type="hidden" id="candidate_id" name="candidate_id" value="' + decode.candidates[i].cand_id + '">\
													<input type="hidden" id="candidate_fullname" name="candidate_fullname" value="' + decode.candidates[i].fullname + '">\
													<input type="hidden" id="candidate_CollegeName" name="candidate_CollegeName" value="' + decode.candidates[i].college_name + '">\
													<h4>'+ decode.candidates[i].fullname +'</h4>\
													<h4>'+ decode.candidates[i].party_name +'</h4>\
												</div>\
												</a>\
												<a class="upAcc"  href="javascript:CandDet('+decode.candidates[i].cand_id+')" style="margin-left:45px;">View Details</a>\
											</div>\
										</div>\
									</div>\
								</div>'
						$('#candidatesContent').append(html).trigger('create');
        				}
        			}else{
        				if(decode.candidates[i].c_image == null){
        						photo = 'votersfolder/img/photo.jpg'
		        			}else{
		        				photo = 'data:image/jpg;base64,' + decode.candidates[i].c_image;
		        			}

	        			var html = '<div style="padding-bottom: 105px;float: left;margin: 10px;">\
									<div class="col-md-3"  style="padding-left: 70px; padding-top: 10px">\
										<div class="row mix-grid">\
											<div class="circular">\
												<a class="candidates"><img class="circular" src="'+ photo +'" alt="" width="144px"/>\
												<div style="text-align: center;">\
													<input type="hidden" id="candidate_id" name="candidate_id" value="' + decode.candidates[i].cand_id + '">\
													<input type="hidden" id="candidate_fullname" name="candidate_fullname" value="' + decode.candidates[i].fullname + '">\
													<input type="hidden" id="candidate_CollegeName" name="candidate_CollegeName" value="' + decode.candidates[i].college_name + '">\
													<h4>'+ decode.candidates[i].fullname +'</h4>\
													<h4>'+ decode.candidates[i].party_name +'</h4>\
												</div>\
												</a>\
													<a class="upAcc"  href="javascript:CandDet('+decode.candidates[i].cand_id+')" style="margin-left:45px;">View Details</a>\
											</div>\
										</div>\
									</div>\
								</div>'
						$('#candidatesContent').append(html).trigger('create');
        			}
        		}
        	}
        },
        error: function(error) {
        	console.log('Error ...', error)
        }
    });

});

$(document).on("click",".candidates", function(){
	 //limit of vote
	 var data = JSON.parse(window.localStorage['data'] || '{}');
	 var user = JSON.parse(window.localStorage['votingUser'] || '{}');
	 //if the candidate already voted
	 var ballot = JSON.parse(window.localStorage['ballotinfo'] || '{}');
	 //user login
	 var Votersstudent = JSON.parse(window.localStorage['votingUser'] || '{}');
	

	 var candidateID = $(this).find('input[name="candidate_id"]').val();
	 var candidateFullname = $(this).find('input[name="candidate_fullname"]').val();
	 var candidateCollegeName = $(this).find('input[name="candidate_CollegeName"]').val();

	 
	 var data_info;
	 var ballotinfo;
	 candidate = new Object();

	 candidate.cand_id = candidateID;
	 candidate.StudentID = Votersstudent[0].student_id;

	 console.log(Votersstudent[0].student_id);


	for (var i = 0; i < data.length; i++) {
        if (data[i].cand_id === candidateID) {
        	data_info = data[i];
        }
    }

    candidate.position_id = data_info.position_id;
    candidate.position_name = data_info.position_name;
    candidate.fullname = data_info.fullname;
    candidate.photo = data_info.c_image;
    candidate.session_id = user[2].session_id;
    candidate.vp_id = user[0].vp_id;
    candidate.de_id = Votersstudent[1].de_id;

    for (var i = 0; i < data.length; i++) {
    	if (data[i].position_id === data_info.position_id) {
            ballotinfo = data[i];
        }
    }
    

    if (ballot.length > 0) {
        var vCounter = 0
        for (var i = 0; i < ballot.length; i++) {
            if (ballot[i]["cand_id"] == candidate.cand_id) {
                alert('Selected candidate(s) was already in your list. Please choose another candidate');
                return;
            }

            if (ballot[i].position_id === data_info.position_id) {
                vCounter = vCounter + 1;
            }
            console.log(vCounter);
        }

        if (vCounter >= data_info.maxwin) {
            alert('You are only allowed to vote ' + data_info.maxwin + ' candidate(s) for ' + data_info.position_name);
            return;
        }
    }

    toast($(this).find('input[name="candidate_fullname"]').val() + ' is added to your ballot.')


    selected_candidate.push(candidate);
    window.localStorage['ballotinfo'] = JSON.stringify(selected_candidate);

    get_ballot();
});

$(document).on("click", ".home", function(){
	$('#headerContent').removeClass('hidden');
	$('#mainContent').removeClass('hidden');
	$('#listofCandidates').addClass('hidden');

});

$(document).on("click", ".remove_candidate", function() {
    console.log($(this).attr("data-id"));

    var ballot = JSON.parse(window.localStorage['ballotinfo'] || '{}');
    var candidate_id = $(this).attr("data-id");

    if (ballot.length > 0) {
        for (var i = 0; i < ballot.length; i++) {
            if (ballot[i].cand_id === candidate_id) {
                ballot.splice(i, 1);
                window.localStorage['ballotinfo'] = JSON.stringify(ballot);
            }
        }

        for (var i = 0; i < selected_candidate.length; i++) {
            if (selected_candidate[i].cand_id === candidate_id) {
                selected_candidate.splice(i, 1);
            }
        }

    } else {
        console.log('removeItem');
        window.localStorage.removeItem("ballotinfo");
    }
    console.log(ballot);


    get_ballot();
});

function get_ballot(){
	var ballot = JSON.parse(window.localStorage['ballotinfo'] || '{}');

	console.log(ballot);

	$('#my_ballot').empty();

	var photo;


	if(ballot.length > 0){
		for(var i=0; i < ballot.length; i++){

			if(ballot[i].photo == null){
				photo = 'votersfolder/img/photo.jpg';
			}else{
				photo = 'data:image/jpg;base64,'+ballot[i].photo;
			}

			var html =  '<div style="float: left;text-align: center;">\
							<div class="col-md-12"  style="border: 1px;">\
								<img src="'+ photo +'" alt="" width="90px" style="float: left;"/><a href="#" data-id="' + ballot[i].cand_id + '" class="remove_candidate"><i class="fa fa-times"></i></a>\
								<h5><b>'+ ballot[i].fullname +'</b></h5>\
								<h5>'+ ballot[i].position_name +'</h5>\
							</div>\
						</div>'
			$('#my_ballot').append(html);
		}
	}
}

function clearballot(){
	console.log('Success');
	window.localStorage.removeItem("ballotinfo");
    selected_candidate.splice(0, selected_candidate.length);
    get_ballot();
}

function loadCandidates(){
	console.log('Success');
	$.ajax({
	    url: '/Web Based Online Voting/votersfolder/php/loadPosition.php',
	    async: true,
	    type: 'POST',
	    crossDomain: true,
	    dataType: 'json',
	    data: {
	    		
	    },
	    success: function(response) {
	    	var decode = response;
			console.log(decode);
	    	if(decode.success == true){
	    		$('#lstPositions').empty();

	    		for(var i=0; i < decode.positions.length; i++){
	    			var html = '<li data-id="' + decode.positions[i].position_id + '" class="last ">\
								<a href="#">\
								<i class="fa fa-user"></i>\
								<span class="title">\
									' + decode.positions[i].position_name + '\
								</span>\
								</a>\
							</li>'
					$('#lstPositions').append(html);
	    		}
	    	}
	    	
	    },
	    error: function(error) {
	    	console.log('error...',error);
	    }
	});
}

function submit_ballot(){
	var ballot = JSON.parse(window.localStorage['ballotinfo'] || '{}');
	var user = JSON.parse(window.localStorage['votingUser'] || '{}');


	if(ballot.length < 1){
		alert('WARNING: You are not allowed to submit empty ballot. Please try again');
	}

	var my_ballot = new Array();
    for (var i = 0; i < ballot.length; i++) {
        myballot = new Object();

        myballot.cand_id = ballot[i].cand_id;
        myballot.session_id = ballot[i].session_id;
        myballot.de_id = ballot[i].de_id;
        myballot.vp_id = ballot[i].vp_id;
        my_ballot.push(myballot);
    }
    console.log(my_ballot);

	$.ajax({
	    url: '/Web Based Online Voting/votersfolder/php/ballot.php',
	    async: true,
	    type: 'POST',
	    crossDomain: true,
	    dataType: 'json',
	    data: {
	        data: my_ballot
	    },
	    success: function(response) {
	    	var decode = response;

	    	if(decode.success == true){
	    		console.log(decode);
	    		alert(decode.msg);
	    		logout();
	    	}
	    },
	    error: function(error) {
	    	console.log('Error...', error);
	    }
	});

	window.localStorage.removeItem("votingUser");
	window.localStorage.removeItem("ballotinfo");
	window.localStorage.removeItem("data");
	window.location.href = "loginVoter.php";
}

function logout(){

	var user = JSON.parse(window.localStorage['votingUser'] || '{}');


	$.ajax({
	    url: 'votersfolder/php/logout.php',
	    async: true,
	    type: 'POST',
	    crossDomain: true,
	    dataType: 'json',
	    data: {
	        data: user[2].vp_id
	    },
	    success: function(response) {
	    	var decode = response;

	    	if(decode.success == true){
	    		console.log(decode);
	    	}
	    },
	    error: function(error) {
	    	console.log('Error...', error);
	    }
	});


	window.localStorage.removeItem("votingUser");
	window.localStorage.removeItem("ballotinfo");
	window.localStorage.removeItem("data");
	window.location.href = "loginVoter.php";
}

function toast(message) {
    var $toast = $('<div class="ui-loader ui-overlay-shadow ui-body-e ui-corner-all"><h4>' + message + '</h4></div>');

    $toast.css({
        display: 'block',
        background: '#2a2a2a',
        opacity: 0.90,
        position: 'fixed',
        padding: '7px',
        'text-align': 'center',
        width: '270px',
        color: '#fff',
        left: ($(window).width() - 284) / 2,
        top: $(window).height() / 2 - 20
    });

    var removeToast = function() {
        $(this).remove();
    };

    $toast.click(removeToast);

    $toast.appendTo($.mobile.pageContainer).delay(1500);
    $toast.fadeOut(400, removeToast);
}

function previewBallot(){
	$('#myModal').modal('show');

	toast("This are the candidate you've choosen.")




	var ballot = JSON.parse(window.localStorage['ballotinfo'] || '{}');


	$('#previewcandidates').empty();

	var photo;


	if(ballot.length > 0){
		for(var i=0; i < ballot.length; i++){

			console.log(ballot);

			if(ballot[i].photo == null){
				photo = 'votersfolder/img/photo.jpg';
			}else{
				// $data = fread($img, filesize($file_name));
				photo = 'data:image/jpg;base64,'+ballot[i].photo;
			}

			var html =  '<div style="float: left;text-align: center;">\
							<div class="col-md-12"  style="border: 1px;">\
								<img src="'+ photo +'" alt="" width="90px" style="float: left;"/>\
								<h5><b>'+ ballot[i].fullname +'</b></h5>\
								<h5>'+ ballot[i].position_name +'</h5>\
							</div>\
						</div>'
			$('#previewcandidates').append(html);
		}
	}
}

function CandDet(id){
	$('#myDet').modal('show');

	toast("Candidate Information!.")




	var data = JSON.parse(window.localStorage['data'] || '{}');


	$('#candidatesdet').empty();
	if(data.length > 0){
		for(var i=0; i < data.length; i++){

			if(data[i].cand_id == id){
				console.log(data);

				var photo = 'data:image/jpg;base64,'+data[i].c_image;

				var html =  '<div class="col-md-12"  style="border: 1px;">\
							<div style="float: left;text-align: center;">\
								<div class="col-md-12"  style="border: 1px;">\
								<img src="'+ photo +'" alt="" width="300px" style="float:center;"/>\
									<h4><b>'+ data[i].fullname +'</b></h4>\
									<h4><b>'+ data[i].position_name +'</b></h4>\
									<h4><b>'+ data[i].party_name +'</b></h4>\
									<h4>'+ data[i].college_name +'</h4>\
									<h4>'+ data[i].course_name +'</h4>\
								</div>\
							</div>\
							</div>\
							<div class="col-md-12">\
										<div class="row">\
											<div class="form-group has-success">\
												<div class="form-group">\
											<label class="control-label">Candidates Details</label>\
											<textarea id="cd" name="cdetail" class="form-control col-md-12" rows="3" disabled>'+ data[i].c_details +'</textarea>\
											<label class="control-label">Platform</label>\
											<textarea id="cd" name="cdetail" class="form-control col-md-12" rows="3" disabled>'+ data[i].platform +'</textarea>\
											</div>\
											</div>\
										</div>\
										</div>'
				$('#candidatesdet').append(html);
			}
		}
	}
}

function proceddbutton(){
	$('#myModal').modal('hide');
	$('#proceedmodal').modal('show');
}