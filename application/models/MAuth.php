<?php

class MAuth extends CI_Model{
    
    public function cek_akun($username, $password){
        $query = $this->db->get_where("akun",array('username'=>$username,'password'=>$password),"1");
        $row = $query->row();
        return $row;
    }
}
