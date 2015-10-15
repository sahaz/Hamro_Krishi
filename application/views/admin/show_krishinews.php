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
<a class="btn btn-success" href="<?php echo site_url('admin/con_krishinews/add_krishinews');?>">Add New News</a><br><br>

<div class="table-responsive">
<table border="2" class="table table-striped table-hover" >
   <tr>
      <th colspan="1">News Descriptions</th>
      
      
      <th>News Body</th>
     
      <th>SEO Options</th>
      
      <th colspan="2">Modification options</th>
   </tr>
   <?php 
   
   
   foreach($value->result() as $r)
   {
      echo'<tr>';
      echo'<td width="20%" >';
       ?><img src="<?php echo site_url('uploads/krishinews/'.$r->news_image);?>" height="124" width="115" border="2" />
     <?php
      
        echo "<br>";
      echo "<strong>";
      echo "ID: &nbsp";
      echo "</strong>";
      echo $r->id;
      echo"<br>";
       echo "<strong>";
      echo "News Type: ";
       echo "</strong>";
       echo $r->news_type;
      echo"<br>";
       echo "<strong>";
      echo "Date: ";
       echo "</strong>";
        echo $r->news_date;
      echo"<br>";
       echo "<strong>";
      echo "Location: ";
       echo "</strong>";
        echo $r->news_location;
      echo "</td>";
   
 
  
      echo'<td align="center">';
      echo "<strong>";
      echo "Headline: ";
       echo "</strong>";
        echo $r->news_headline;
        echo "<br>";
      echo "<strong>";
      echo "Body: ";
       echo "</strong>";
        echo $r->news_body;
      
      
   
      
      echo'<td width="20%">';
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

      <td width="75" align="center"><a href="<?php echo site_url('admin/con_krishinews/edit_krishinews/'.$r->id);?>"><div class="btn btn-warning">EDIT</div></a></td>
      <td width="75" align="center"><a href="<?php echo site_url('admin/con_krishinews/delete_krishinews/'.$r->id);?>"><div class="btn btn-danger">DELETE</div></a></td>
<?php
   }
   
?>
</table>
</div>
</div>
<?php }?>