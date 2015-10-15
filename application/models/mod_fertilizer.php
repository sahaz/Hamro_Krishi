<?php 
class Mod_fertilizer extends CI_Model{
   
public function show_fertilizer()
{
   $value=$this->db->get('fertilizer');
   return $value;
}


public function upload_fertilizer($data)
{
   $this->db->insert('fertilizer',$data);
}

public function select_fertilizer($id)
{
   $value=$this->db->get_where('fertilizer',array("id"=>$id));
   return $value;
}

public function upload_edit_fertilizer($data,$id)
{
   $this->db->where('id',$id);
   $this->db->update('fertilizer',$data);
}

public function delete_fertilizer($id)
{
   $this->db->where('id',$id);
   $this->db->delete('fertilizer');
}
        


}
 
