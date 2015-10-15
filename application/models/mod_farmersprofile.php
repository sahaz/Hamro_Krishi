<?php 
class Mod_farmersprofile extends CI_Model{
   
public function show_farmersprofile()
{
   $value=$this->db->get('farmers_profile');
   return $value;
}
  public function check_farmer($data)
   {
      
         $res=$this->db->get_where('farmers_profile',array('farmers_email'=>$data['email'], 'farmers_password'=>$data['password'],'access_level'=>"farmer"));
         return $res;
   }


public function select_farmersprofile($id)
{
   $value=$this->db->get_where('farmers_profile',array("id"=>$id));
   return $value;
}

public function register_farmer($data)
   {
      $this->db->insert('farmers_profile',$data);
   }
   
public function delete_farmersprofile($id)
{
   $this->db->where('id',$id);
   $this->db->delete('farmers_profile');
}
public function update_profilepic($data,$id)
{
   $this->db->where('id',$id);
   $this->db->update('farmers_profile',$data);
}
public function select_farmersharvests($id)
{
   $value=$this->db->get_where('harvest',array("farmers_id"=>$id));
   return $value;
}
public function update_experience($data,$id)
{
   $this->db->where('id',$id);
   $this->db->update('farmers_profile',$data);
}
public function add_harvest($data)
   {
      $this->db->insert('harvest',$data);
   }
   
   public function select_harvest($id)
{
   $value=$this->db->get_where('harvest',array("id"=>$id));
   return $value;
}
public function delete_harvest($id)
{
   $this->db->where('id',$id);
   $this->db->delete('harvest');
}
public function select_myphotos($id)
{
   $value=$this->db->get_where('farmers_pictures',array("farmers_id"=>$id));
   return $value;
}
public function add_myphotos($data)
   {
      $this->db->insert('farmers_pictures',$data);
   }
   public function delete_myphotos($id)
{
   $this->db->where('id',$id);
   $this->db->delete('farmers_pictures');
}
public function select_id_by_photos($id)
{
   $value=$this->db->get_where('farmers_pictures',array("id"=>$id));
   return $value;
}
public function delete_farmers_photos($id)
{
   $this->db->where('farmers_id',$id);
   $this->db->delete('farmers_pictures');
}
public function delete_profile($id)
{
   $this->db->where('id',$id);
   $this->db->delete('farmers_profile');
}
public function delete_harvest_photos($id)
{
   $this->db->where('farmers_id',$id);
   $this->db->delete('harvest');
}
}
 
