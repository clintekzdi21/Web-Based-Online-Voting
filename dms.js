

  function getcandidate(cid){
      var url = 'dms.php?cid='+cid;
      
      alert(url);
      $.getJSON(url, function(data) {
        $.each(data, function(index, data) {
          $('.list-group').wrap('<a class="list-group-item" href="#" onclick="dhan()">'+data.fullname+'</a>');
            
        
    });
 
   });   
   }
