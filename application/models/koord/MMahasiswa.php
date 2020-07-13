<?php

class MMahasiswa extends CI_Model {

    public function update_id_akun_by_nim($nim,$id_akun) {
        $this->db->set('akun_id_akun', $id_akun);
        $this->db->where('nim', $nim);
        $this->db->update('mahasiswa');
    }

}
