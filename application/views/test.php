<head>
     <script src="<?php echo site_url('script/jquery.js');?>" ></script>
      <script>
      $(document).ready(function(){
          
              
             $('#box').click(function(){
                 
                  
                $('#add').html("<input type='text' id='text' /><br>");
                 });
                  
               
               $('#box2').click(function(){
                 
                  
                $('#addmore').append("<input type='text' id='text' /><br>");
                  
              
               });
                 
              
               
            });
      </script>
   </head>
   <body>
      <p id="box">Add</p>
      
      
      <p id='add'></p> 
      <p id="box2">Add multiple</p>
      <p id='addmore'></p>
      
      
   </body>