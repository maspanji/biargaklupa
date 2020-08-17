<?php

class MMahasiswa extends CI_Model {
    //meng-update id_akun berdasarkan nim
    public function update_id_akun_by_nim($nim, $id_akun) {
        $this->db->set('akun_id_akun', $id_akun);
        $this->db->where('nim', $nim);
        $this->db->update('mahasiswa');
    }
    
    //mendapatkan mahasiswa yang sudah terverifikasi 
    public function get_all_new_verified_mahasiswa() {
        $query = "SELECT * FROM mahasiswa WHERE id_mhs NOT IN (SELECT bimbingan.mahasiswa_id_mhs FROM bimbingan) AND verifikasi=1 ORDER BY waktu_reg";
        $query = $this->db->query($query);
        return $query->result();
    }

}
