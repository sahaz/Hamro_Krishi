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
<h1>ADD Help:</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_help/process_help');?>" method="POST"  >
   
   
   <div class="form-group">
      <label class="col-sm-3 control-label">Help for :</label>
      <div class="col-sm-6">
            <select name="help_section">
                         <option value="home">Home Page</option>
                         <option value="disease">Disease Section</option>
                         <option value="soil">Soil Section</option>
                         <option value="maps">MAPs Section</option>
                         <option value="fertilizer">Fertilizer Section</option>
                         <option value="krishak">Krishak Section</option>
                         <option value="agro_news">Agro News Section</option>
                         <option value="agro_stories">Agro Stories Section</option>
                         <option value="signup">Signup Page Section</option>
                     
            </select>
      </div>
   </div>
   
    
 <div class="form-group">
      <label class="col-sm-3 control-label">Help Description:</label>
      <div class="col-sm-6">
        <textarea rows="10" cols="40" name="help_description" id="help_description" class="required form-control"></textarea>
      </div>
 </div><br>
   

   
  
  
   
   <div class="form-group">
        <div class="col-md-4 control-label">
  <input type="submit" class="btn btn-info" id="submit" name="submit" value="UPLOAD" /><br><br>
        </div>
        </div>

   
</form>
</div>
<?php }?>