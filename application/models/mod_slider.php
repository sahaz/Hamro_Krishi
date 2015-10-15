<?php 
class Mod_slider extends CI_Model{

   public function show_slider_images()
   {
      $value=$this->db->get('slider');
      return $value;
         
   }
   
      public function upload_slider_images($data)
   {
      $this->db->insert('slider',$data);
 
         
   }
      public function select_images($id)
   {
      $value=$this->db->get_where('slider',array("id"=>$id));
      return $value;
         
   }
      public function delete_slider_images($id)
   {
      $this->db->where('id',$id);
      $this->db->delete('slider');
         
   }
   
   
}


   