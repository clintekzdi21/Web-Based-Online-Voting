
/* function readURL(input) {
            var reader = new FileReader();
            if (input.files && input.files[0]) {
 
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
           
            reader.readAsDataURL(input.files[0]);
        }
        
    }
    
    $("#file").change(function(){
        readURL(this);
    });
*/
$(function() {
        $("#file").change(function() {
            //$("#message").empty();         // To remove the previous error message
            var file = this.files[0];
            var imagefile = file.type;
            var match= ["image/jpeg","image/png","image/jpg"];  
            if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
            {
            $('#blah').attr('src','http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image');
            alert('Please Select A valid Image File!');
            //$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
            return false;
            }
            else
            {
                var reader = new FileReader();  
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }       
        });
    });
    function imageIsLoaded(e) { 
        $("#file").css("color","green");
        $('#previewing').css("display", "block");
        $('#blah').attr('src', e.target.result);
        $('#blah').attr('width', '200px');
        $('#blah').attr('height', '150px');
    };
