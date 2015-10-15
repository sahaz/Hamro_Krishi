
<html>
   <head>
       
        <script src="<?php echo site_url('script/jquery.js');?>" ></script>
      <script src="<?php echo site_url('script/jquery.validate.js');?>"></script>
      <script src="<?php echo site_url('script/override.js');?>"></script>
     
       <script src="<?php echo site_url('script/js/html5shiv.min.js');?>"></script>
      <script src="<?php echo site_url('script/js/respond.min.js');?>"></script>
      <script src="<?php echo site_url('script/js/bootstrap.min.js');?>"></script>
     
   <script src="<?php echo site_url('script/ckeditor/ckeditor.js');?>"></script>
       
   <script src="<?php echo site_url('script/prettyphoto/js/jquery-1.4.4.min.js');?>" type="text/javascript" charset="utf-8"></script> 
   <script src="<?php echo site_url('script/prettyphoto/js/jquery.prettyPhoto.js');?>" type="text/javascript" charset="utf-8"></script>
   <script src="<?php echo site_url('script/ckeditor/ckeditor.js');?>"></script>
    <link rel="stylesheet" href="<?php echo site_url('script/prettyphoto/css/prettyPhoto.css');?>" type="text/css" media="screen" charset="utf-8" />
   <link href="<?php echo site_url('script/css/bootstrap.min.css');?>" rel="stylesheet">
   <link href="<?php echo site_url('script/css/custom.css');?>" rel="stylesheet">
      
 
    <script charset="utf-8" type="text/javascript">
      $(document).ready(function(){ 
         $("a[rel^='prettyPhoto']").prettyPhoto();  
         });  
   </script>   
    
   <script type="text/javascript">
      $(document).ready(function(){
         $.noConflict()
         
         $('#baseform').validate();
         
      });
   </script>
   
   
      <script type="text/javascript">
      $(document).ready(function(){
          
              
             $('#box').click(function(){
                 
                  
                $('#add').html("<input type='text' id='text' /><br>");
                 });
                  
               
               
                 
              
               
            });
      </script>
     </head>
   <body>
