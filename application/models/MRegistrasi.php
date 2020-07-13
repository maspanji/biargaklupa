<?php

class MRegistrasi extends CI_Model {

    public function insert_new_register($nim,$nama,$hp,$email,$tema,$url){
        $data = array('nim'=>$nim, 'nama'=>$nama,'no_hp'=>$hp,'email'=>$email,'tema_skripsi'=>$tema, 'url_berkas'=>$url);
        $status = $this->db->insert('mahasiswa',$data);
        echo $status;
    }
    
}
