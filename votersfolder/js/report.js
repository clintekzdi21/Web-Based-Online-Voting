$(document).ready(function(){
	position();
	getResult();
});

function getResult(){
	var positions = JSON.parse(window.localStorage['positions'] || '{}');
	var html = '';
	$.ajax({
	    url: '/OnlineV/votersfolder/php/report.php',
	    async: true,
	    type: 'POST',
	    crossDomain: true,
	    dataType: 'json',
	    data: {
	        
	    },
	    success: function(response) {
	    	var decode = response;
	    	console.log(decode.result);

	    	$('#content2').empty();
            if (decode.success == true) {
                if (decode.result.length > 0) {

                    for (var i = 0; i < positions.length; i++) {
                        var data = positions[i];
                        html += '<h1>' + data.position_name + '</h1>\
                                <div class="row">\
                                    <div class="col-lg-12">\
                                        <div class="table-responsive">\
                                            <table class="table" id="tbl_candidate">\
                                                <thead>\
                                                    <tr>\
                                                        <th style="width:60%">Candidate</th>\
                                                        <th style="width:20%">Total Votes</th>\
                                                        <th style="width:20%">Percentage</th>\
                                                    </tr>\
                                                </thead>\
                                                <tbody>';

                        for (var a = 0; a < decode.result.length; a++) {
                            var row = decode.result[a];
                            console.log(row.position_id);
                            if (data.position_id == row.position_id) {
                            	console.log('result',row);
                                var percent = row.nullif / row.count * 100;
                                var img = row.c_image;	
                                var new_img;
                                if (img == '') {
                                    new_img = 'votersfolder/img/photo.jpg';
                                } else {
                                    new_img = 'data:image/x-xbitmap;base64,' + img;
                                }
                                html += '<tr>\
                                        <td class="table-profile">\
                                            <div class="table-image" style="float:left;">\
                                                <img src="' + new_img + '" width="100px" class="img-responsive img-circle" alt="Generic placeholder thumbnail">\
                                            </div>\
                                            <div class="table-info" style="float:left;">\
                                                <h4>' + row.fullname + '</h4>\
                                                <small>' + row.college_name + '</small>\
                                                <small>' + row.course_name + '</small>\
                                                <small>' + row.party_name + '</small>\
                                            </div>\
                                        </td>\
                                        <td class="table-score">' + row.nullif + '</td>\
                                        <td class="table-score">'+percent.toFixed(2)+'%</td>\
                                    </tr>';
                                $("#tbl_candidate tbody").append(html);
                            }
                        }
                        html += '</tbody>\
                                </table>\
                            </div>\
                        </div>\
                    </div>';
                    }
                }
            } else {
                alert(decode.msg);
                return false;
            }
            $('#content2').append(html);
	    },
	    error: function(error) {
	    	console.log(error);
	    }
	});
}

function position(){
	$.ajax({
	    url: '/OnlineV/votersfolder/php/loadPosition.php',
	    async: true,
	    type: 'POST',
	    crossDomain: true,
	    dataType: 'json',
	    data: {
	    },
	    success: function(response) {
	    	var decode = response;
	    	console.log(decode.positions)
	    	window.localStorage['positions'] = JSON.stringify(decode.positions);
	    },
	    error: function(error) {
	    	console.log(error);
	    }
	});
}