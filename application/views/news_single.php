<?php 
   $this->load->view('includes/header.php');
 $this->load->view('includes/semi_header.php');
 $this->load->view('includes/menu.php');
 $a=$value1->row();
 ?>
<div class="well well-lg">
     <ol class="breadcrumb btn-xs">
                      You are here :  
                        <li><a href="<?php echo site_url('hamrokrishi/index');?>">Home</a></li>
                        
                        <li class="active">
                            <?php if($a->news_type == "story"){ ?>
                            <a href="<?php echo site_url('news_controller/display_story');?>" >Agro Stories</a>
                        <?php }elseif ($a->news_type == "samachar"){ ?>
                            <a href="<?php echo site_url('news_controller/display_samachar');?>" >Agro News</a>
                    <?php    }?></li>
                        
                  </ol>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="well well-sm">
                
             
                <div class="row">
                    <div class="col-lg-12">
                      <h3><?php echo $a->news_headline;?></h3>
                      
                       <h5>Date : <?php echo $a->news_date;?><br>
                           
                           Location : <?php echo $a->news_location;?>
                        </h5>   <hr>
                     
                   
                  
                       
                          <a href="<?php echo site_url('uploads/krishinews/'.$a->news_image);?>" rel="prettyPhoto" title="<?php echo $a->news_image ;?>">
                            <img  class="img-rounded thumbnail img-responsive center-block" src="<?php echo site_url('uploads/krishinews/'.$a->news_image);?>" height="200" width="250" />
                          </a>
                   
                        
        
                        <p class="lead">   <?php echo $a->news_body;?></p>
                           
                        </div>
                        </div>
                
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>