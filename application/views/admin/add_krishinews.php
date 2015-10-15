<?php if(null == $this->session->userdata('status')){
 redirect('admin/backend/backend_login');
}
else
{ ?>
<?php
$this->load->view('admin/includes/semi_header.php');
$this->load->view('admin/includes/menu.php');

?>
<div class="container well"> 
<h1>ADD KRISHI NEWS :</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_krishinews/process_krishinews');?>" method="POST" enctype="multipart/form-data" >
   
   <div class="form-group">
      <label class="col-sm-3 control-label">Type of the News:</label>
      <div class="col-sm-6">
            <input type="radio" name="news_type" value="story" checked="checked" /> <label>Story</label>
            <input type="radio" name="news_type" value="samachar"/> <label>Samachar</label>
      </div>
   </div>
   
    
 
   
      
   <div class="form-group">
      <label class="col-sm-3 control-label">  Date:</label>
      <div class="col-sm-6">
            <input type="text"  name="news_date" id="news_date" class="required form-control" />
      </div>
   </div>
      
   <div class="form-group">
      <label class="col-sm-3 control-label">  Location:</label>
      <div class="col-sm-6">
      <input type="text"  name="news_location" id="news_location" class="required form-control" />
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">  News Headline:</label>
      <div class="col-sm-6">
         <input type="text" name="news_headline" id="news_headline" class="required form-control" />
      
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">  News Body:</label>
      <div class="col-sm-6">
         <textarea rows="10" cols="20" name="news_body" id="news_body" class="required form-control"></textarea>
      
      </div>
   </div>
  
   <div class="form-group">
      <label class="col-sm-3 control-label">SEO TITLE:</label>
      <div class="col-sm-6">
   <input type="text"   name="seo_title" id="seo_title" class="required form-control" />
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">SEO KEYWORD:</label>
      <div class="col-sm-6">
   <input type="text"   name="seo_keyword" id="seo_keyword" class="required form-control" />
      </div>
   </div>
   
    
  <div class="form-group">
      <label class="col-sm-3 control-label"> META DATA:</label>
      <div class="col-sm-6">
        <textarea rows="4" cols="20" name="metadata" id="metadata" class="required form-control"></textarea>
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
        </div>
        </div>

   
</form>
</div>
<?php }?>