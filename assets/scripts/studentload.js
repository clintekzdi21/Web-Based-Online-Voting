/*$(document).ready(function(){
	fecthStudent();
});*/

var GLOBAL =  new Array();

var global_array = new Array();
	 global_object = new Object();

function fecthStudent() {
    $.ajax({
        url: 'http://localhost/Web Based Online Voting/student.php',
        async: true,
        type: 'POST',
        crossDomain: true,
        dataType: 'json',
        success: function(response) {
            var decode = response;

            if (decode) {
                if (decode.students.length > 0) {
                    for (var i = 0; i < decode.students.length; i++) {
                        var row = decode.students;

						global_variable = i;
                        var html = '<tr class="odd">'+
                                    '<td class=" sorting_1">' + row[i].student_id + '</td>'+
                                    '<td class=" ">' + row[i].fullname + '</td>'+
                                    '<td class=" ">' + row[i].course_name + '</td>'+
                                    '<td class=" ">'+
                                      '<div class="text-center">'+
                                       '<input data-id="'+row[i].student_id+'" type="checkbox" id="' + row[i].student_id + '">'+
                                      '</div>'+
                                    '</td>'+
                                '</tr>';
                        $("#sample_editable_1 tbody").append(html);
                    }
                }
            }

        },
        error: function(error) {
            console.log("Error:");
            console.log(error.responseText);
            console.log(error.message);
            return;
        }
    });
}

function print(){
	global_array.splice(0,global_array.length);
	 // $('#sample_editable_1').find('input[type="checkbox"]:checked').each(function () {
		// //console.log($(this).data('id'));
  //       global_array.push($(this).data('id'));
		// //global_object.id = $(this).data('id');
	 //    //global_array.push(global_object);
  //   });

    $('#sample_editable_1 tbody tr').each(function() {
        $(this).find('input:checkbox:checked').each(function() {
            console.log($(this).data('id'));
            global_array.push($(this).data('id'));
            // global_object.id = $(this).data('id');
            // global_array.push(global_object);
        });
    });

	console.log(global_array);
	
	$.ajax({
    	        url: 'http://localhost/Web Based Online Voting/print.php',
                async: true,
                type: 'POST',
                crossDomain: true,
                dataType: 'json',
                data: {
                    data: global_array
                },
                success: function(response) {

                    var decode = response;
                    if (decode.success == true) {
                        $('#contentstudent').addClass('hidden');
                        $('#printStudent').removeClass('hidden');

                        if (decode) {
                            if (decode.students.length > 0) {
                                for (var i = 0; i < decode.students.length; i++) {
                                    var row = decode.students;

                                    var html = '<tr class="odd">\
                                                <td class=" sorting_1">' + row[i].fullname + '</td>\
                                                <td class=" sorting_1">' + row[i].student_id + '</td>\
                                                <td class=" ">' + row[i].vpassword + '</td>\
                                                </tr>';
                                    $("#printStudent tbody").append(html);

                                }
                            }
                        }
                        
                    } 
                },
				error: function(error) {
                    console.log("Error:");
                    console.log(error);
                     return;
                }
			});
}