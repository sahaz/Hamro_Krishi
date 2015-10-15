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
<a class="btn btn-success" href="<?php echo site_url('admin/con_soil/add_soil');?>">Add New Place</a><br><br>

<div class="table-responsive">
<table border="2" class="table table-striped table-hover" >
   <tr>
      <th>Image of the place</th>
      <th>Description of the place</th>
     
      <th>Climate Conditions</th>    
      <th>Soil components</th>    
      
      <th>Mineral Contents</th>
      <th>Nutrient Contents</th>
      
      <th>SEO Options</th>
      
      <th colspan="2">Modification options</th>
   </tr>
   <?php 
   
   
   foreach($value->result() as $r)
   {
       
      echo'<tr>';
        
      echo'<td align="center">';
      ?><img src="<?php echo site_url('uploads/soil/'.$r->place_image);?>" height="124" width="115" border="2" />
     <?php
      
      echo'<td width="35%">';
      echo "<strong>";
      echo "ID: ";
      echo "</strong>";
      echo $r->id;
      echo "<br>";
      echo "<strong>";
      echo "Name: ";
      echo "</strong>";
      echo $r->place;
      echo "<br>";
      echo "<strong>";
      echo "Region: ";
      echo "</strong>";
     
      if($r->dev_region == "EDR")
         {
             echo "EDR";
         }
      elseif($r->dev_region == "CDR") 
         {
             echo "CDR";
         }
      elseif($r->dev_region == "WDR") 
         {
             echo "WDR";
         }
      elseif($r->dev_region == "MWDR") 
         {
             echo "MWDR";
         }
      elseif($r->dev_region == "FWDR") 
         {
             echo "FWDR";
         }
         
      echo "<br>";
      echo "<strong>";
      echo "Soil type: ";
      echo "</strong>";
      echo "<br>";
         
      if($r->soil_type == 1)
         {
             echo "Soils of Great Himalayas";
         }
      elseif($r->soil_type == 2) 
         {
             echo "Soils of the mountain land";
         }
      elseif($r->soil_type == 3) 
         {
             echo "Soils of river valleys";
         }
      elseif($r->soil_type == 4) 
         {
             echo "Soils of Silawik range";
         }
      elseif($r->soil_type == 5) 
         {
             echo "Soils of inner terai valley";
         }
      elseif($r->soil_type == 6) 
         {
             echo "Soils of the Terai Plane";
         }
         
      
      
      
      echo'<td width="15%">';
      echo "<strong>";
      echo "Avg temp: ";
      echo "</strong>";
      echo $r->avg_temp;
      echo "<br>";
      echo "<strong>";
      echo "Avg rain: ";
      echo "</strong>";
      echo $r->avg_rainfall;
      echo "<br>";
      echo'<td>';
      echo "<strong>";
      echo "N: ";
      echo "</strong>";
      echo $r->nitrogen;
      echo "<br>";
      echo "<strong>";
      echo "P: ";
      echo "</strong>";
      echo $r->phosphorous;
      echo "<br>";
      echo "<strong>";
      echo "K: ";
      echo "</strong>";
      echo $r->potassium;
      echo "<br>";
       echo "<strong>";
      echo "pH value: ";
      echo "</strong>";
      echo $r->ph_value;
      
    
      echo'<td align="center">';
      echo $r->mineral;
      
      
      
      echo'<td align="center">';
      echo $r->nutrient;
    
      
      
       echo'<td width="10%">';
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

      <td width="75" align="center"><a href="<?php echo site_url('admin/con_soil/edit_soil/'.$r->id);?>"><div class="btn btn-warning">EDIT</div></a></td>
      <td width="75" align="center"><a href="<?php echo site_url('admin/con_soil/delete_soil/'.$r->id);?>"><div class="btn btn-danger">DELETE</div></a></td>
<?php
   }
   
?>
</table>
</div>
</div>
<?php }?>