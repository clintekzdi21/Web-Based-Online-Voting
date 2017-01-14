function AjaxParty() 
{
  var partylist=$("#Pname").val();
     $.ajax({
        type:"POST",
        url:"adding.php",
        cache : "false",
        async:"false",
    data: 
    {
      action:'addparty',
      partyname: partylist
    },
    success:function(data)
    {
        alert(data);
        $("input:text").val("");
    }
    });
 }
 
function AjaxElecDate()
{
  var edate=$("#ed").val();
    $.ajax({
      type:"POST",
      url:"adding.php",
      cache : "false",
      async:"false",
    data: 
    {
      action:'addelecDate',
      elecD: edate
    },
    success:function(data)
    {
      alert(data);
      $("input:text").val("");
    }
    });
 }

  function AjaxPosition() 
  {
    var positioname=$("#pos").val();
    var maxw=$("#nwin").val();
    var posO=$("#PosOr").val();
      $.ajax({
        type:"POST",
        url:"adding.php",
        cache : "false",
        async:"false",
      data: 
      {
      action:'addposition',
      position: positioname,
      maxwin: maxw,
      posort: posO
      },
      success:function(data)
      {
        alert(data);
        $("input:text").val("");
      }                                 
      });
 }

 function AjaxCollege() 
 {
    var collegename=$("#Cname").val();
      $.ajax({
        type:"POST",
        url:"adding.php",
        cache : "false",
        async:"false",
      data: 
      {
        action:'addcollege',
        colName: collegename
      },
      success:function(data)
      {                    
        alert(data);
        $("input:text").val("");
      }                  
      });
 }

 function AjaxCourse() 
 {
    var collegeID=$("#scors").val();
    var coName=$("#Coname").val();
      $.ajax({
        type:"POST",
        url:"adding.php",
        cache : "false",
        async:"false",
      data: 
      {
        action:'addcourses',
        cidx: collegeID,
        cnamex: coName
      },
      success:function(data)
      {                    
        alert(data);
        $("input:text").val("");
      }                   
      });
 }

 function AjaxAccount1() 
 {
    var name=$("#OName").val();
    var user=$("#UName").val();
    var pas=$("#pass").val();
    var role=$("#selAcc").val();
    alert(role);
      $.ajax({
        type:"POST",
        url:"adding.php",
        cache : "false",
        async:"false",
      data: 
      {
        action:'addAccount',
        name1: name,
        user1: user,
        pass1: pas,
        role1: role
      },
      success:function(data)
      {                    
        alert(data);
        $("input:text").val("");
      }                   
      });
 }

function AjaxStudent1() 
{
   var stud_id=$("#sid").val();
   var stud_name=$("#sname").val();
   var acady=$("#acad").val();
   var scourse=$("#selcourse").val();
   var semester=$("#selsem").val();
      $.ajax({
        type: "POST",
        url: "adding.php",
        cache: "false",
        async: "false",
      data: 
      {
        action: 'addstudent',
        sid: stud_id,
        sname: stud_name,
        acad: acady,
        selcour:scourse,
        sem: semester
      },
      success:function(data)
      {
        alert(data);
        $("input:text").val("");
      }
      });
 }