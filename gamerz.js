/*function convertImgToBase64(url, callback, outputFormat){
  var canvas = document.createElement('CANVAS');
  var ctx = canvas.getContext('2d');
  var img = new Image;
  img.crossOrigin = 'Anonymous';
  img.onload = function(){
    canvas.height = img.height;
    canvas.width = img.width;
      ctx.drawImage(img,0,0);
      var dataURL = canvas.toDataURL(outputFormat || 'image/jpg');
      callback.call(this, dataURL);
        // Clean up
      canvas = null; 
  };
  img.src = url;
}*/

// $('#').click(function(event){
//     //var imageUrl = $(this).find('input[name=url]').val();
//     var imageUrl = $("#imgInp").val();
//     console.log('imageUrl', imageUrl);
//     convertImgToBase64(imageUrl, function(base64Img){
//         $('#previewing')
//             .find('textarea')
//                 .val(base64Img)
//                 .end()
//             .find('a')
//                 .attr('href', base64Img)
//                 .text(base64Img)
//                 .end()
//             .find('img')
//                 .attr('src', base64Img);
//     });
    
//     event.preventDefault();
// });
function seller(){
  $('#dhan').click();
  
}

  function AjaxStudent() {
   var si=$("#sdid").val();
   var studid=$("#sid").val();
   var studname=$("#sname").val();
   var courseID=$("#selcourse").val();
   var acady=$("#acad").val();
   var semest=$("#selsem").val();
   // alert(semest+si+studid+studname);
   // alert(courseID);
 
                        $.ajax({
                        type: "POST",
                        url: "UPDATE.php",
                        cache: "false",
                        async: "false",
                        data: {
                          actionjs: 'UPstudent',
                          sdid: si,
                          sID: studid,
                          sName: studname,
                          cID: courseID,
                          ac: acady,
                          sem: semest
                         
                        },
                        success:function(data){
                            
                            alert(data);
                            $("#clos").click();
                            $("input:text").val("");
                            window.location.href = "students.php";
                            //$("#sltv").load("StudLoad.php");
                        }
       });
 }

  function AjaxAccount() {
   var acc_id=$("#aid").val();
   var acc_p =$('#pad').val();
   var accName=$("#on").val();
   var accuser=$("#un").val();
   var accpass=$("#pass").val();
   var acc_np =$("#Npass").val();
   var acc_cp =$("#Cpass").val();
   // alert(acc_id);
  
                        $.ajax({
                        type: "POST",
                        url: "UPDATE.php",
                        cache: "false",
                        async: "false",
                        data: {
                          actionjs: 'UPaccount',
                           a_id: acc_id,
                           p_id: acc_p,
                           owner: accName,
                           user: accuser,
                           passw: accpass,
                           newp: acc_np,
                           conp: acc_cp
                         
                        },
                        success:function(data){
                            
                            alert(data);
                            $("#clos1").click();
                            $("input:text").val("");
                            $("#pass").val("");
                            $("#Npass").val("");
                            $("#Cpass").val("");
                            //$("#accbody").load("ACCOUNTLOAD.php");
                            window.location.href = "accounts.php";
                        }
       });
 }

 function AjaxCourse1() {
   var cid=$("#Colname").val();
   var cName=$("#Coname").val();
   var scol =$('#scors').val();
   // alert(cid+cName+scol);
                        $.ajax({
                        type: "POST",
                        url: "UPDATE.php",
                        cache: "false",
                        async: "false",
                        data: {
                          actionjs: 'UPcourse',
                           coID : cid,
                           couName: cName,
                           selCol: scol

                        },
                        success:function(data){
                            
                            alert(data);
                            //$("#clos1").click();
                            $("input:text").val("");
                           // $("#courbody").load("CourseLoad.php");
                           window.location.href = "course.php";
                        }
       });
 }

function AjaxSet() {
   var did=$("#de_id").val();
   var acid=$("#St").val();
                        $.ajax({
                        type: "POST",
                        url: "UPDATE.php",
                        cache: "false",
                        async: "false",
                        data: {
                          actionjs: 'UPset',
                           deid : did,
                           stat: acid

                        },
                        success:function(data){  
                            alert(Data);
                           // $("#cs").exit();
                            $("input:text").val("");
                            window.location.href = "election.php";
                            //$("#courbody").load("EDateLoad.php");
                        }
       });
 }

 function AjaxSet1() {
   var did=$("#de_id").val();
  // alert(did);
   // var acid=$("#acc_id").val();
   // var status =$('#stat').val();
   // alert(cid+cName+scol);
                        $.ajax({
                        type: "POST",
                        url: "UPDATE.php",
                        cache: "false",
                        async: "false",
                        data: {
                          actionjs: 'UPset',
                           deid : did

                        },
                        success:function(data){
                            
                            alert(data);
                            //$("#clos1").click();
                            $("input:text").val("");
                            //$("#courbody").load("CourseLoad.php");
                        }
       });
 }

function UpdateCandidate(cid){
   var url = 'fetchcandidate.php?id='+cid;
    
     $.getJSON(url, function(data) {
        $.each(data, function(index, data) {
            
            console.log(data);
            var photo = data.C_IMAGE;
            alert(photo);
            
  
      });
 
    }); 

  $("#movefaster").click();
}