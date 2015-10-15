<?php $this->load->view('admin/includes/header.php');?>
   <body>
      <div class="container well">  
    <ul class="nav nav-pills nav-justified">
   
       <li><a href="<?php echo site_url('admin/con_dashboard/show_dashboard'); ?>"><h4><span class="glyphicon glyphicon-home"></span></h4><h5>DASH</h5></a></li>
 
       <li <?php if($page == "crop"){?>class="active"<?php }?> ><a href="<?php echo site_url('admin/con_crops/show_crops'); ?>"><h4><span class="glyphicon glyphicon-fire"></span><br></h4><h5> CROPS</h5></a></li>
 
   <li <?php if($page == "disease"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/con_diseases/show_diseases'); ?>"><h4><span class="glyphicon glyphicon-flash"></span><br></h4><h5> DISEASE</h5></a></li>
   
   <li <?php if($page == "soil"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/con_soil/show_soil'); ?>"><h4><span class="glyphicon glyphicon-tree-deciduous"></span><br></h4><h5> SOIL</h5></a></li>
   
   <li <?php if($page == "maps"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/con_maps/show_maps'); ?>"><h4><span class="glyphicon glyphicon-leaf"></span><br></h4><h5> MAPs</h5></a></li>
   <li <?php if($page == "fertilizer"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/con_fertilizer/show_fertilizer'); ?>"><h4><span class="glyphicon glyphicon-tint"></span><br></h4><h5> FERTILIZER</h5></a></li>
   
   <li <?php if($page == "profile"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/con_farmersprofile/show_farmersprofile'); ?>"><h4><span class="glyphicon glyphicon-user"></span><br></h4><h5> PROFILES</h5></a></li>
   <li <?php if($page == "harvest"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/con_harvest/show_harvest'); ?>"><h4><span class="glyphicon glyphicon-circle-arrow-down"></span><br></h4><h5> HARVESTS</h5></a></li>
   
   <li <?php if($page == "news"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/con_krishinews/show_krishinews'); ?>"><h4><span class="glyphicon glyphicon-globe"></span><br></h4><h5> NEWS</h5></a></li>

   
   
   
   <li <?php if($page == "slider"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/con_slider/show_slider_images'); ?>"><h4><span class="glyphicon glyphicon-picture"></span><br></h4><h5> SLIDER</h5></a></li>
   <li <?php if($page == "data"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/con_data/show_data'); ?>"><h4><span class="glyphicon glyphicon-list"></span><br></h4><h5> DATA</h5></a></li>
   <li <?php if($page == "help"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/con_help/show_help'); ?>"><h4><span class="glyphicon glyphicon-question-sign"></span><br></h4><h5> HELP</h5></a></li>
   
   <li <?php if($page == "aboutus"){?>class="active"<?php }?>><a href="<?php echo site_url('admin/con_aboutus/show_aboutus'); ?>"><h4><span class="glyphicon glyphicon-map-marker"></span><br></h4><h5> ABOUTUS</h5></a></li>
</ul>
      </div>
   
   </body>
</html>
   