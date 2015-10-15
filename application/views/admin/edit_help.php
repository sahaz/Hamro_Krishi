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
<h1>ADD Help:</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_help/process_edit_help/'.$r->id);?>" method="POST"  >
   
   
   <div class="form-group">
      <label class="col-sm-3 control-label">Help for :</label>
      <div class="col-sm-6">
            <select name="help_section">
                         <option value="home" <?php if ($r->help_section == "home"){?> selected="selected" <?php }?>>Home Page</option>
                         <option value="disease" <?php if ($r->help_section == "disease"){?> selected="selected" <?php }?>>Disease Section</option>
                         <option value="soil" <?php if ($r->help_section == "soil"){?> selected="selected" <?php }?>>Soil Section</option>
                         <option value="maps" <?php if ($r->help_section == "maps"){?> selected="selected" <?php }?>>MAPs Section</option>
                         <option value="fertilizer" <?php if ($r->help_section == "fertilizer"){?> selected="selected" <?php }?>>Fertilizer Section</option>
                         <option value="krishak" <?php if ($r->help_section == "krishak"){?> selected="selected" <?php }?>>Krishak Section</option>
                         <option value="agro_news" <?php if ($r->help_section == "agro_news"){?> selected="selected" <?php }?>>Agro News Section</option>
                         <option value="agro_stories" <?php if ($r->help_section == "agro_stories"){?> selected="selected" <?php }?>>Agro Stories Section</option>
                         <option value="signup" <?php if ($r->help_section == "signup"){?> selected="selected" <?php }?>>Signup Page Section</option>
                     
            </select>
      </div>
   </div>
   
    
 <div class="form-group">
      <label class="col-sm-3 control-label">Help Description:</label>
      <div class="col-sm-6">
        <textarea rows="10" cols="40" name="help_description" id="help_description" class="required form-control"><?php echo $r->help_description; ?></textarea>
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