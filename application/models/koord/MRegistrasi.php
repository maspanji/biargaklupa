<?php

/*
 * Class Model untuk regisrasi, dari sudut pandang koordinator TA
 * 
 */

class MRegistrasi extends CI_Model {

    public function get_all_registran() {
        $this->db->where('verifikasi', null);
        $this->db->order_by('waktu_reg');
        $query = $this->db->get("mahasiswa");
        return $query->result();
    }

    /**
     * 
     * @param type $user_id user id, bukan nim.
     * @param type $status status 0 untuk ditolak, 1
     */
    public function verifikasi_mhs($user_id, $status) {
        $this->db->set('verifikasi', $status);
        $this->db->where('nim', $user_id);
        $this->db->update('mahasiswa');
    }


}
