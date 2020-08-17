<?php

/**
 * Model untuk bimbingan
 *
 * @author maspa
 */
class MBimbingan extends CI_Model {

    //memasukkkan bimbingan baru
    public function insert_bimbingan_baru($id_periode, $id_dosen, $id_mahasiswa) {
        $data = array(
            'periode_idperiode' => $id_periode,
            'dosen_id_dosen' => $id_dosen,
            'mahasiswa_id_mhs' => $id_mahasiswa
        );
        $this->db->insert('bimbingan', $data);
    }

    //mendapatkan list bimbingan dosen berdasarkan id dosen
    public function get_all_bimbingan_by_id_dosen($id_dosen) {
        $query_string = "SELECT mahasiswa.id_mhs, mahasiswa.nim, mahasiswa.nama, dosen.nama as 'pembimbing', mahasiswa.tema_skripsi "
                . "FROM mahasiswa JOIN bimbingan JOIN dosen "
                . "ON mahasiswa.id_mhs = bimbingan.mahasiswa_id_mhs AND dosen.id_dosen=bimbingan.dosen_id_dosen "
                . "AND dosen.id_dosen=".$id_dosen;
        $query = $this->db->query($query_string);
        return $query->result();
    }

}
