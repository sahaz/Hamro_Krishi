<?php 
class Mod_ourteam extends CI_Model{
    public function show_aboutus()
   {
      $value=$this->db->get('ourteam');
      return $value;
         
   }
    public function select_aboutus($id)
   {
      $value=$this->db->get_where('ourteam',array('id'=>$id));
      return $value;
         
   }
   
   public function upload_aboutus($data)
   {
      $this->db->insert('ourteam',$data);
   }
     public function upload_edit_aboutus($data,$id)
   {  
        $this->db->where('id',$id);
      $this->db->update('ourteam',$data);
   }
    public function delete_aboutus($id)
   {  
        $this->db->where('id',$id);
      $this->db->delete('ourteam');
   }
}