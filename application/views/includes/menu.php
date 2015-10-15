
<div class="well-sm">
  
<nav  class="navbar navbar-default nav-justified">
    
    <div class="navbar-header navbar-left">
      
        
    </div>
    
    
        <ul class="nav navbar-nav ">
            <li <?php if($page == "home"){?>class="active"<?php }?> ><a href="<?php echo site_url('hamrokrishi/index'); ?>"><img src="<?php echo site_url('uploads/users/hk_house_bw.png');?>" height="40" width="40" ></a></li>
            <li <?php if($page == "disease"){?>class="active"<?php }?> ><a href="<?php echo site_url('disease_controller/display_crops'); ?>"><h4>Diseases</h4> </a></li>
            <li <?php if($page == "soil"){?>class="active"<?php }?> ><a href="<?php echo site_url('soil_controller/display_soil'); ?>"><h4>Soil</h4> </a></li>
            <li <?php if($page == "fertilizer"){?>class="active"<?php }?> ><a href="<?php echo site_url('fertilizer_controller/display_fertilizer'); ?>"><h4>Fertilizers</h4> </a></li>
            <li <?php if($page == "maps"){?>class="active"<?php }?> ><a href="<?php echo site_url('maps_controller/display_maps'); ?>"><h4>Medicinal Plants</h4> </a></li>
            <li <?php if($page == "profile"){?>class="active"<?php }?> ><a href="<?php echo site_url('profile_controller/display_profile'); ?>"><h4>Krishaks</h4> </a></li>
            <li <?php if($page == "samachar"){?>class="active"<?php }?> ><a href="<?php echo site_url('news_controller/display_samachar'); ?>"><h4>Agro News</h4> </a></li>
            <li <?php if($page == "story"){?>class="active"<?php }?> ><a href="<?php echo site_url('news_controller/display_story'); ?>"><h4>Agro Stories</h4> </a></li>
            <li <?php if($page == "aboutus"){?>class="active"<?php }?> ><a href="<?php echo site_url('aboutus_controller/display_aboutus'); ?>"><h4>About Us</h4> </a></li>
            <li <?php if($page == "help"){?>class="active"<?php }?> ><a href="<?php echo site_url('help_controller/display_help'); ?>"><img class="img-responsive" src="<?php echo site_url('uploads/all_data/help.png');?>" height="40" width="40" ></a></li>
            
            
  </ul>
        <?php  if( $this->session->userdata('f_status')){ ?>
        
       <ul class="nav navbar-header navbar-right">
           <li <?php if($page == "farmersprofile"){?>class="active"<?php }?> ><a  href="<?php echo site_url('farmersprofile_controller/display_farmer'); ?>" ><h4> <span class="glyphicon glyphicon-user"></span> My Profile  &nbsp;&nbsp;&nbsp;</h4></a></li>
        </ul>
      <?php   } ?>
    
</nav>
</div>