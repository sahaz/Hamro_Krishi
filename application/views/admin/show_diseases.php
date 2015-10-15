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
<br><br>
<a class="btn btn-success" href="<?php echo site_url('admin/con_diseases/add_diseases');?>">Add New Disease</a><br><br>

<div class="table-responsive">
<table border="2" class="table table-striped table-hover" >
   <tr>
      <th colspan="1">Disease Descriptions</th>
      
      
      <th>Cause or Identification</th>
      <th>Symptoms</th>
      <th>Preventive Measures</th>
      <th>SEO Options</th>
      
      <th colspan="2">Modification options</th>
   </tr>
   <?php 
   
   
   foreach($value->result() as $r)
   {
      echo'<tr>';
      echo'<td width="15%" >';
       ?><img src="<?php echo site_url('uploads/diseases/'.$r->disease_image);?>" height="124" width="115" border="2" />
     <?php
      
        echo "<br>";
      echo "<strong>";
      echo "ID: &nbsp";
      echo "</strong>";
      echo $r->id;
      echo"<br>";
       echo "<strong>";
      echo "Name: ";
       echo "</strong>";
       echo $r->disease_name;
      echo"<br>";
       echo "<strong>";
      echo "Locally known as: ";
       echo "</strong>";
       echo $r->disease_lname;
      echo"<br>";
       echo "<strong>";
      echo "Type: ";
       echo "</strong>";
        echo $r->disease_type;
      echo"<br>";
        echo "<strong>";  
      echo "Aff. Crop: ";
        echo "</strong>";
      
     foreach($value2->result() as $s)
      {
         if($r->crop_id == $s->id)
         {
             
             
             echo $s->crop_name;
             
         }
      }
      
   
      
      
     
         
  
      
      
      echo'<td align="center">';
      echo $r->disease_causes;
      
      
      
      echo'<td align="center">';
      echo $r->disease_symptoms;
      
      
      
      echo'<td align="center">';
      echo $r->disease_preventive_measures;
      
      
      
      echo'<td>';
        echo "<strong>";
        echo "K:";
          echo "</strong>";
      echo $r->seo_keyword;
      echo"<br>";
         echo "<strong>";
        echo "T:";
          echo "</strong>";
      echo $r->seo_title;
      echo"<br>";
         echo "<strong>";
        echo "M:";
          echo "</strong>";
      echo $r->metadata;
      
     ?>

      <td width="75" align="center"><a href="<?php echo site_url('admin/con_diseases/edit_diseases/'.$r->id);?>"><div class="btn btn-warning">EDIT</div></a></td>
      <td width="75" align="center"><a href="<?php echo site_url('admin/con_diseases/delete_diseases/'.$r->id);?>"><div class="btn btn-danger">DELETE</div></a></td>
<?php
   }
   
?>
</table>
</div>
</div>
<?php }?>