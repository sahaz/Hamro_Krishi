<?php 
class Mod_login extends CI_Model{
   
   
   
 
   
   public function check_admin($data)
   {
      
         $res=$this->db->get_where('user',array('email'=>$data['email'], 'password'=>$data['password']));
         return $res;
   }
    
}