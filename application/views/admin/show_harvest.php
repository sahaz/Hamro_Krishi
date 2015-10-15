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


<div class="table-responsive">
<table border="2" class="table table-striped table-hover table-condensed" >
   <tr>
      
   
      <th align="center">Harvest Info.</th>
      <th align="center" >Name and Image</th>
      <th align="center" >Harvest Description</th>
      
      <th align="center">Modification option</th>
   </tr>
   <?php 
   
   
   foreach($value->result() as $r)
   {
      echo'<tr>';
 
      echo'<td width="20%">';
      echo "<strong>";
    echo "Farmer's id: ";
    echo "</strong>";
    echo $r->farmers_id;
    echo"<br>";
    echo "<strong>";
    echo "Date added: ";
    echo "</strong>";
    echo $r->entry_date;

       
      echo'<td width="20%" align="center">';
      ?><img src="<?php echo site_url('uploads/farmersprofile/'.$r->harvest_image);?>" height="124" width="115" border="2" />
      
    <?php
    echo"<br>";
    echo "<strong>";
    echo "Harvest: ";
    echo "</strong>";
    echo $r->harvest_name;
  
    echo'<td >';
    echo "<strong>";
    echo "Descriptions: ";
    echo "</strong>";
      echo $r->harvest_description;
      
    
      
     ?>

      
      <td width="75" align="center"><a href="<?php echo site_url('admin/con_harvest/delete_harvest/'.$r->id);?>"><div class="btn btn-danger">DELETE</div></a></td>
<?php
   }
   
?>
</table>
</div>
</div>
<?php }?>