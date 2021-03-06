<?php

class MPeriode extends CI_Model {

    function insert_new_periode($periode, $keterangan) {
        $query = "INSERT INTO periode(nama_periode,keterangan) VALUES(?,?)";
        $result = $this->db->query($query, array($periode, $keterangan));
        if ($result = 1) {
            echo "Berhasil memasukkan data !";
        } else {
            echo "Gagal memasukkan data !";
        }
    }
    
    function get_periode_aktif(){
        $this->db->order_by('tanggal_ditambahkan','DESC');
        $query = $this->db->get('periode');
        return $query->row();
    }

}
