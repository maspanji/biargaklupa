<?php

class MRegistrasi extends CI_Model {

    public function insert_new_register($nim,$nama,$hp,$email){
        $data = array('nim'=>$nim, 'nama'=>$nama,'no_hp'=>$hp,'email'=>$email);
        $status = $this->db->insert('registrasi_baru',$data);
        echo $status;
    }
    
}
