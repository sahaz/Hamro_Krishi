<?php if(null == $this->session->userdata('status')){
 redirect('admin/backend/backend_login');
}
else
{ ?>
<?php
$this->load->view('admin/includes/semi_header.php');
$this->load->view('admin/includes/menu.php');

$r=$value->row();
?>
<div class="container well"> 
<h1>ADD KRISHI NEWS :</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_krishinews/process_edit_krishinews/'.$r->id);?>" method="POST" enctype="multipart/form-data" >
   
   <div class="form-group">
      <label class="col-sm-3 control-label">Type of the News:</label>
      <div class="col-sm-6">
            <input type="radio" name="news_type" value="story" <?php if ($r->news_type == "story"){?> checked="checked" <?php } ?> /> <label>Story</label>
            <input type="radio" name="news_type" value="samachar" <?php if ($r->news_type == "samachar"){?> checked="checked" <?php } ?>/> <label>Samachar</label>
      </div>
   </div>
   
    
 
   
      
   <div class="form-group">
      <label class="col-sm-3 control-label">  Date:</label>
      <div class="col-sm-6">
            <input type="text"  name="news_date" id="news_date" value="<?php echo $r->news_date ;?>" class="required form-control" />
      </div>
   </div>
      
   <div class="form-group">
      <label class="col-sm-3 control-label">  Location:</label>
      <div class="col-sm-6">
      <input type="text"  name="news_location" id="news_location" value="<?php echo $r->news_location ;?>" class="required form-control" />
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">  News Headline:</label>
      <div class="col-sm-6">
         <input type="text" name="news_headline" id="news_headline" value="<?php echo $r->news_headline ;?>"  class="required form-control" />
      
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">  News Body:</label>
      <div class="col-sm-6">
         <textarea rows="10" cols="20" name="news_body" id="news_body"  class="required form-control"><?php echo $r->news_body ;?></textarea>
      
      </div>
   </div>
  
   <div class="form-group">
      <label class="col-sm-3 control-label">SEO TITLE:</label>
      <div class="col-sm-6">
   <input type="text"   name="seo_title" id="seo_title" value="<?php echo $r->seo_title ;?>" class="required form-control" />
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">SEO KEYWORD:</label>
      <div class="col-sm-6">
   <input type="text"   name="seo_keyword" id="seo_keyword" value="<?php echo $r->seo_keyword ;?>" class="required form-control" />
      </div>
   </div>
   
    
  <div class="form-group">
      <label class="col-sm-3 control-label"> META DATA:</label>
      <div class="col-sm-6">
        <textarea rows="4" cols="20" name="metadata" id="metadata" class="required form-control"><?php echo $r->metadata; ?> </textarea>
      </div>
   </div>
  
  
   <div class="form-group">
      <label class="col-sm-3 control-label"> Image of the News:</label>
      <div class="col-sm-6">
        <input type="file" name="news_image" id="news_image" />
         <p class="help-block">upload images related to the news </p>
      </div>
   </div>
   <br>
   
   <div class="form-group">
        <div class="col-md-4 control-label">
  <input type="submit" class="btn btn-info" id="submit" name="submit" value="UPLOAD" /><br><br>
  <input type="hidden" id="hidden" name="hidden" value="<?php echo $r->news_image;?>" /><br><br>      <br><br>
        </div>
        </div>

   
</form>
</div>
<?php }?>