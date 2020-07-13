<?php

class MAkun extends CI_Model{
    
    function insert_akun_mhs($id_akun,$username,$password,$role){
        $data = array(
            'id_akun'=>$id_akun, 
            'username'=>$username,
            'password'=>$password,
            'role'=>$role);
        $this->db->insert('akun',$data);
        
    }
    
}
