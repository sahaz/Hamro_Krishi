
<html>
   <head>
       
        <?php if(isset($title)){?>
            
       <title><?php echo $title;?></title>       
      <?php 
     } 
     
     else 
      {?>
       <title>Hamro Krishi</title>
      
      <?php }?>
      
      <script src="<?php echo site_url('script/jquery.js');?>" ></script>
      <script src="<?php echo site_url('script/jquery.validate.js');?>"></script>
       <script src="<?php echo site_url('script/js/html5shiv.min.js');?>"></script>
      <script src="<?php echo site_url('script/js/respond.min.js');?>"></script>
 <script src="<?php echo site_url('script/ckeditor/ckeditor.js');?>"></script>
      
    
    <link href="<?php echo site_url('script/css/bootstrap.min.css');?>" rel="stylesheet">
      <script>
      $(document).ready(function(){
         
         $('#baseform').validate();
         
      });
   </script>
      </head>
   <body>
