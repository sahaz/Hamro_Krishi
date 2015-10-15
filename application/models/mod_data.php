<?php 
class Mod_data extends CI_Model{
   
public function show_data()
{
   $value=$this->db->get('all_data');
   return $value;
}


public function upload_data($data)
{
   $this->db->insert('all_data',$data);
}

public function select_data_of($page)
{
   $value=$this->db->get_where('all_data',array("data_of"=>$page));
   return $value;
}
public function select_data($id)
{
   $value=$this->db->get_where('all_data',array("id"=>$id));
   return $value;
}

public function upload_edit_data($data,$id)
{
   $this->db->where('id',$id);
   $this->db->update('all_data',$data);
}

public function delete_data($id)
{
   $this->db->where('id',$id);
   $this->db->delete('all_data');
}

        


}
 
