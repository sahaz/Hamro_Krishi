<?php 
class Mod_diseases extends CI_Model{
   
public function show_diseases()
{
   $value=$this->db->get('disease');
   return $value;
}


public function upload_diseases($data)
{
   $this->db->insert('disease',$data);
}

public function select_diseases($id)
{
   $value=$this->db->get_where('disease',array("id"=>$id));
   return $value;
}

public function upload_edit_diseases($data,$id)
{
   $this->db->where('id',$id);
   $this->db->update('disease',$data);
}

public function delete_diseases($id)
{
   $this->db->where('id',$id);
   $this->db->delete('disease');
}
public function delete_diseases_crops($id)
{
   $this->db->where('crop_id',$id);
   $this->db->delete('disease');
}

   public function select_crops_diseases($id)
{
   $value=$this->db->get_where('disease',array("crop_id"=>$id));
   return $value;
}
     


}
 
