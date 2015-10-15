<?php 
   $this->load->view('includes/header.php');
 $this->load->view('includes/semi_header.php');
 $this->load->view('includes/menu.php');
 $a=$value2->row();
 ?>
<div class="well well-sm">
     <ol class="breadcrumb btn-xs">
                      You are here :  
                        <li><a href="<?php echo site_url('hamrokrishi/index');?>">Home</a></li>
                        
                        <li class="active"><?php if($a->news_type == "story"){
                            echo "Agro Stories";
                        }elseif ($a->news_type == "samachar"){
                            echo "Agro News";
                        }?></li>
                        
                  </ol>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-9">
            <?php if($a->news_type == "story"){
                             echo "<h4>"."Agro Stories"."</h4>";
                        }elseif ($a->news_type == "samachar"){
                            echo "<h4>"."Agro News"."</h4>";
                            }?><hr>
             <?php foreach($value2->result() as $r) {?>
            <div class="well well-sm">
                <div class="row">
                    <div class="col-lg-12">
                    
                       
                    
                        
                            <div class="media">
                        <div class="media-left">
                         <a href="<?php echo site_url('news_controller/single_news/'.$r->news_type.'/'.$r->id);?>"> 
                        <img class="img-rounded  img-responsive center-block" src="<?php echo site_url('uploads/krishinews/'.$r->news_image);?>" height="180" width="130" />
                        </a>
                    
                        </div>
                        <div class="media-body">
                         
                         <small>
                       <?php echo $r->news_date;
                       echo"<br>";
                       echo $r->news_location; ?></small>
                           <h4 class="media-heading"> <?php echo $r->news_headline;?></h4>

                           <a href="<?php echo site_url('news_controller/single_news/'.$r->news_type.'/'.$r->id);?>">    
                           <button class="btn btn-warning btn-xs" type="button" >
                                <span class="glyphicon glyphicon-search"></span>  Read More...
                           </button></a>  
                     
               
             
                   </div>
                  </div>
                        
                    
                </div>
                </div>
            </div>
             <?php }?>
        </div>
        <div class="col-lg-1"></div>        
    </div>
</div>