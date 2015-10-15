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
<br>


<div class="table-responsive">
<table border="2" class="table table-striped table-hover table-condensed" >
   <tr>
      <th>Farmer's Description</th>
     
      <th>Farming Information</th>
      
      <th>Experiences</th>
      <th>Training</th>
      
      <th>Option</th>
   </tr>
   <?php 
   
   
   foreach($value->result() as $r)
   {
      echo'<tr>';
      echo'<td>';
      ?><img src="<?php echo site_url('uploads/farmersprofile/'.$r->farmers_image);?>" height="124" width="115" border="2" />
     <?php
     
      echo"<br>";
      echo "<strong>";
      echo "ID: ";
      echo "</strong>";
      echo $r->id;
      echo"<br>";
      
      
      echo "<strong>";
      echo "Name: ";
      echo "</strong>";
      echo $r->farmers_name;
      echo"<br>";
      
      echo "<strong>";
      echo "Sex: ";
      echo "</strong>";
      echo $r->farmers_sex;
      echo"<br>";
      
      
       
      echo "<strong>";
      echo "Email: ";
      echo "</strong>";
      echo $r->farmers_email;
      echo"<br>";
      
      
      
      
      echo "<strong>";
      echo "Address: ";
      echo "</strong>";
      echo $r->farmers_address;
      echo"<br>";
      
      
      
     
      echo "<strong>";
      echo "Phone: ";
      echo "</strong>";
      echo $r->farmers_phone;
      echo"<br>";
      
      
      
      
      

      
      
      
     echo'<td align="center">';
     echo "<strong>";
      echo "Main Crop: ";
     echo "</strong>";
      echo $r->farmers_maincrop;
      echo"<br>";
      
     
      
  echo "<strong>";
      echo "Area of farming: ";
     echo "</strong>";
      echo $r->farmers_area;
      echo"<br>";
      
       echo "<strong>";
      echo "Date joined: ";
     echo "</strong>";
   echo $r->date_joined;
      echo"<br>";
      
   echo "<strong>";
      echo "Access level: ";
     echo "</strong>";
   echo $r->access_level;
      echo"<br>";
       
  
      echo'<td>';
      echo $r->farmers_experiences;
      
      echo'<td width="30%" >';
      echo $r->farmers_training;
      
   
   
      
      
     
      
      
      
      
          
     ?>

      
      <td width="75" align="center"><a href="<?php echo site_url('admin/con_farmersprofile/delete_farmersprofile/'.$r->id);?>"><div class="btn btn-danger">DELETE</div></a></td>
<?php
   }
   
?>
</table>
</div>
</div>
<?php }?>