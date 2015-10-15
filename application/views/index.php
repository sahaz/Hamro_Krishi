<?php 
                  

$this->load->view('includes/header.php');?>
   <?php $this->load->view('includes/semi_header.php');?>
    <?php $this->load->view('includes/menu.php');?>
    

<div class="well">
   <div class="row">
       <?php if(null != $this->session->userdata('f_status')) {?>
       <div class="col-lg-9">
            <div id="myCarousel" class="carousel  slide" data-ride="carousel">
   
   <ol class="carousel-indicators">
      <?php
      $n=0;
      foreach($slider ->result() as $s) {?>
      <li data-target="#myCarousel" data-slide-to=$n <?php if($n==0){?>class="active" <?php }?>></li>
   <?php $n+=1;}?>
   </ol>
   <div class="carousel-inner">
      <?php 
      $z=0;
      foreach($slider ->result() as $t) {?>
      <div <?php if($z==0){?>class="item active" <?php }else{?> class="item" <?php }?> >
         <a href="<?php echo site_url('uploads/slider/'.$t->slider_image);?>" rel="prettyPhoto[pp_gal]" title="<?php echo $t->image_description ;?>">
         <img src="<?php echo site_url('uploads/slider/'.$t->slider_image);?>"/>
         </a>
          <div class="carousel-caption">
            <?php echo $t->image_description ;?>
            
            </div>
      </div>
            <?php $z+=1;}?>
   </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
       <div class="col-lg-3">
           <div class="well well-sm">
               <h5 class="text-center">Be Part of HamroKrishi</h5>
               <h6 class="text-center">Submit your  krishi news, stories and pictures</h6><hr>
               <a class="btn btn-success btn-lg center-block" href="<?php echo site_url('farmersprofile_controller/submit_data/NEWS');?>"><span class="glyphicon glyphicon-share"></span> &nbsp;&nbsp;SUBMIT KRISHI NEWS </a><hr>
               <a class="btn btn-info btn-lg center-block" href="<?php echo site_url('farmersprofile_controller/submit_data/STORY');?>"><span class="glyphicon glyphicon-share"></span> &nbsp;&nbsp;SUBMIT KRISHI STORY </a><hr>
               <a class="btn btn-primary btn-lg center-block" href="<?php echo site_url('farmersprofile_controller/submit_data/PHOTO');?>"><span class="glyphicon glyphicon-share-alt"></span> &nbsp;&nbsp;SUBMIT KRISHI PHOTOS</a><hr>
           </div>
       </div>
       <?php } else {?>
       
	<div class="col-lg-9">
            <div id="myCarousel" class="carousel  slide" data-ride="carousel">
   
   <ol class="carousel-indicators">
      <?php
      $n=0;
      foreach($slider ->result() as $s) {?>
      <li data-target="#myCarousel" data-slide-to=$n <?php if($n==0){?>class="active" <?php }?>></li>
   <?php $n+=1;}?>
   </ol>
   <div class="carousel-inner">
      <?php 
      $z=0;
      foreach($slider ->result() as $t) {?>
      <div <?php if($z==0){?>class="item active" <?php }else{?> class="item" <?php }?> >
         <a href="<?php echo site_url('uploads/slider/'.$t->slider_image);?>" rel="prettyPhoto[pp_gal]" title="<?php echo $t->image_description ;?>">
         <img src="<?php echo site_url('uploads/slider/'.$t->slider_image);?>"/>
         </a>
          <div class="carousel-caption">
            <?php echo $t->image_description ;?>
            
            </div>
      </div>
            <?php $z+=1;}?>
   </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
       
        <div class="col-lg-3">
   <?php if($this->session->flashdata('error')){?>
 
     
     <div class="alert alert-danger alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <span class="glyphicon glyphicon-remove-sign"></span> <?php echo $this->session->flashdata('error');?>
        
     </div>
   <?php }
     
   if($this->session->flashdata('signout')){?>
     
                             
                            <div class="alert alert-success alert-dismissible" role="alert">
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <span class="glyphicon glyphicon-ok-sign"></span> <?php echo $this->session->flashdata('signout');?>
                            </div> 

            <?php
            }
            if($this->session->flashdata('delete_profile')){?>
     
                             
                            <div class="alert alert-success alert-dismissible" role="alert">
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <span class="glyphicon glyphicon-ok-sign"></span> <?php echo $this->session->flashdata('delete_profile');?>
                            </div> 

            <?php
            }?>
                                       
    <div class="well well-sm">
      <h2> Sign in  &nbsp;<span class="glyphicon glyphicon-circle-arrow-down"></span></h2>
      <h6>Login and enjoy exciting features included.</h6>
         
       <hr>
    <form class="form-horizontal" action="<?php echo site_url('login_controller/process_signin');?>" method="POST" id="baseform" >
        
         
         <div class="form-group">
           <label class="col-sm-4 control-label"> Email:</label>
           <div class="col-sm-7">
           <input type="text" id="email" name="email" class="required email form-control"  />

           </div>
         </div>

   
             
         <div class="form-group">
           <label class="col-sm-4 control-label"> Password:</label>
           <div class="col-sm-7">
           <input type="password" id="pass" name="pass" class="required form-control"   />


           </div>
         </div>

            <div class="form-group">
               <div class="col-sm-11 control-label">
               <input type="submit" class="btn btn-success btn-sm" id="submit" name="submit" value="Sign In" /><br><br>
               </div>
             </div>
    </form>
       Haven't registered ? Sign Up here &nbsp;<a class="btn btn-info" href="<?php echo site_url('login_controller/sign_up');?>"><span class="glyphicon glyphicon-plus"></span> Sign UP </a>
    </div>
      </div>
       <?php }?>
   </div>
    <br>
    <div class="row">
        <?php if(null == $this->session->userdata('f_status')) {?>
        <div class="col-lg-5">
           <div class="well well-sm">
          
              <h3>Agro News<span class="glyphicon glyphicon-globe"></span></h3>
               <h6>Keep up-to-date with all the happenings around the Nepal's Agricultural horizon</h6>
          <hr>
          
          
          <?php 
            $num2=1;
          
            foreach($samachar ->result() as $u) { 
               if($num2<=4){  ?> 
                  <div class="media">
                  <div class="media-left">
                  <a href="<?php echo site_url('news_controller/display_samachar/'.$u->id);?>">
                  <img class="media-object" src="<?php echo site_url('uploads/krishinews/'.$u->news_image);?>" alt="<?php echo $u->news_headline; ?>" height="60" width="80">
                  </a>
                  </div>
                  <div class="media-body">
                   <small>
                 <?php echo $u->news_date;
                 echo"<br>";
                 echo $u->news_location; ?></small>
                     <h5 class="media-heading"> <?php echo $u->news_headline;?></h5>
                     
                     <a href="<?php echo site_url('news_controller/display_samachar/'.$u->id);?>">    
                     <button class="btn btn-info btn-xs" type="button" >
                          <span class="glyphicon glyphicon-search"></span>  Read More...
                        </button></a>
               
             
                   </div>
                  </div>
          <?php $num2+=1;}
          
             }?>
          
          
          
          <?php $num=0; 
             foreach($samachar->result() as $u) { 
          $num+=1;} ;?>
          
          <br><a href="<?php echo site_url('news_controller/display_samachar');?>">    
         <button class="btn btn-success btn-sm" type="button" >
            All News <span class="badge"><?php echo $num;?></span>
         </button></a>
      
      
 
       
   </div>
       </div>
        <div class="col-lg-4">
            <div class="well well-sm">
          <h3> Agro Stories</h3>
          <h6>Be inspired from our energetic youths</h6>
          <hr>
          
            <?php 
            $num3=1;
          
            foreach($story ->result() as $v) { 
               if($num3<=4){  ?> 
                  <div class="media">
                  <div class="media-left">
                  <a href="<?php echo site_url('news_controller/display_story/'.$v->id);?>">
                  <img class="media-object" src="<?php echo site_url('uploads/krishinews/'.$v->news_image);?>" alt="<?php echo $v->news_headline; ?>" height="50" width="70">
                  </a>
                  </div>
                  <div class="media-body">
                   
                   <small>
                 <?php echo $u->news_date; ?></small>
                     <h6 class="media-heading"> <?php echo $u->news_headline;?></h6>
                     
                     <a href="<?php echo site_url('news_controller/display_story/'.$u->id);?>">    
                     <button class="btn btn-warning btn-xs" type="button" >
                          <span class="glyphicon glyphicon-search"></span>  Read More...
                        </button></a>  
                     
               
             
                   </div>
                  </div>
          <?php $num3+=1;}
          
             }?>
          
          
          
          <?php $num4=0; 
             foreach($story->result() as $u) { 
          $num4+=1;} ;?>
          
          <br><a href="<?php echo site_url('news_controller/display_story');?>">    
         <button class="btn btn-success btn-sm" type="button" >
            All Stories <span class="badge"><?php echo $num4;?></span>
         </button></a>
      
      
 
     </div>
        </div>
        <div class="col-lg-3">
            <div class="well well-sm">
                <h4 class="text-center">Our Registered Krishaks</h4>
                <hr>
                <div class='row'>
                    
                 <?php foreach($krishaks->result() as $r) {?>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 outer_krishak_small">
                    
                       
                         <a href="<?php echo site_url('profile_controller/single_profile/'.$r->id);?>"> 
                  <img class="img-rounded  img-responsive center-block" src="<?php echo site_url('uploads/farmersprofile/'.$r->farmers_image);?>" height="160" width="130" /></a>
                            
                      
                    
                </div>
                 <?php } ?>
                   
                   
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success btn-xs center-block" href="<?php echo site_url('profile_controller/display_profile');?>">
                        View All Krishaks </a>
                            </div>
                    </div>
                </div>
             <?php if(null == $this->session->userdata('f_status')) {?>
            <div class="well well-sm">
                <h6>Do you want to feature your krishi story, krishi samachar and your krishi related pictures ? </h6>
                <a class="btn btn-primary btn-md center-block" href="<?php echo site_url('farmersprofile_controller/guest_submit');?>">
                    
                        Submit Krishi Stories, News & Pictures</a>
            </div>
             <?php }?>
        </div>
        <?php } else {?>
        <div class="col-lg-5">
           <div class="well well-sm">
          
              <h3>Agro News<span class="glyphicon glyphicon-globe"></span></h3>
               <h6>Keep up-to-date with all the happenings around the Nepal's Agricultural horizon</h6>
          <hr>
          
          
          <?php 
            $num2=1;
          
            foreach($samachar ->result() as $u) { 
               if($num2<=4){  ?> 
                  <div class="media">
                  <div class="media-left">
                  <a href="<?php echo site_url('news_controller/display_samachar/'.$u->id);?>">
                  <img class="media-object" src="<?php echo site_url('uploads/krishinews/'.$u->news_image);?>" alt="<?php echo $u->news_headline; ?>" height="60" width="80">
                  </a>
                  </div>
                  <div class="media-body">
                   <small>
                 <?php echo $u->news_date;
                 echo"<br>";
                 echo $u->news_location; ?></small>
                     <h5 class="media-heading"> <?php echo $u->news_headline;?></h5>
                     
                     <a href="<?php echo site_url('news_controller/display_samachar/'.$u->id);?>">    
                     <button class="btn btn-info btn-xs" type="button" >
                          <span class="glyphicon glyphicon-search"></span>  Read More...
                        </button></a>
               
             
                   </div>
                  </div>
          <?php $num2+=1;}
          
             }?>
          
          
          
          <?php $num=0; 
             foreach($samachar->result() as $u) { 
          $num+=1;} ;?>
          
          <br><a href="<?php echo site_url('news_controller/display_samachar');?>">    
         <button class="btn btn-success btn-sm" type="button" >
            All News <span class="badge"><?php echo $num;?></span>
         </button></a>
      
      
 
       
   </div>
       </div>
        <div class="col-lg-5">
            <div class="well well-sm">
          <h3><span class="glyphicon glyphicon-star"></span> Agro Stories</h3>
          <h6>Be inspired from our energetic youths</h6>
          <hr>
          
            <?php 
            $num3=1;
          
            foreach($story ->result() as $v) { 
               if($num3<=4){  ?> 
                  <div class="media">
                  <div class="media-left">
                  <a href="<?php echo site_url('news_controller/display_story/'.$v->id);?>">
                  <img class="media-object" src="<?php echo site_url('uploads/krishinews/'.$v->news_image);?>" alt="<?php echo $v->news_headline; ?>" height="50" width="70">
                  </a>
                  </div>
                  <div class="media-body">
                   
                   <small>
                 <?php echo $u->news_date; ?></small>
                     <h6 class="media-heading"> <?php echo $u->news_headline;?></h6>
                     
                     <a href="<?php echo site_url('news_controller/display_story/'.$u->id);?>">    
                     <button class="btn btn-warning btn-xs" type="button" >
                          <span class="glyphicon glyphicon-search"></span>  Read More...
                        </button></a>  
                     
               
             
                   </div>
                  </div>
          <?php $num3+=1;}
          
             }?>
          
          
          
          <?php $num4=0; 
             foreach($story->result() as $u) { 
          $num4+=1;} ;?>
          
          <br><a href="<?php echo site_url('news_controller/display_story');?>">    
         <button class="btn btn-success btn-sm" type="button" >
            All Stories <span class="badge"><?php echo $num4;?></span>
         </button></a>
      
      
 
     </div>
        </div>
        <div class="col-lg-2">
            <div class="well well-sm">
                <h4 class="text-center">Our Registered Krishaks</h4>
                <hr>
                <div class='row'>
                    
                 <?php 
                 $permit=0;
                 foreach($krishaks->result() as $r) {
                     if ($permit < 6){?>
                    
                        <div class="col-lg-6 col-md-3 col-sm-3 col-xs-4  outer_krishak_small">
                             <a href="<?php echo site_url('profile_controller/single_profile/'.$r->id);?>"> 
                                <img class="img-rounded img-responsive center-block" src="<?php echo site_url('uploads/farmersprofile/'.$r->farmers_image);?>" height="50" width="50" />
                             </a>
                        </div>
                       
                  
         
                     <?php  $permit+=1;} } ?>
                 
                   
                    
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success btn-xs center-block" href="<?php echo site_url('profile_controller/display_profile');?>">
                        View All Krishaks </a>
                            </div>
                    </div>
                </div>
             
        </div>
        <?php }?>
    </div>
    
</div>
     
          
     

             
          
 
