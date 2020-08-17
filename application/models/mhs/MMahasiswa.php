<?php

/**
 * Description of MMahasiswa
 *
 * @author maspa
 */
class MMahasiswa extends CI_Model {
    
    //mendapatkan nama bahasiswa berdasarkan id_akun
    public function get_nama_mhs_by_idakun($id_akun) {
        $query_string = "SELECT mahasiswa.nama, mahasiswa.id_mhs FROM mahasiswa WHERE akun_id_akun='" . $id_akun . "'";
        $result = $this->db->query($query_string);
        return $result->row();
    }
    
    //mendapat kan pembibing bersarkan id_akun
    public function get_pembimbing_by_idakun($id_akun) {
        $query_string = "SELECT dosen.nama FROM dosen,bimbingan "
                . "WHERE dosen.id_dosen=bimbingan.dosen_id_dosen "
                . "AND bimbingan.mahasiswa_id_mhs = "
                . "(select mahasiswa.id_mhs from mahasiswa where mahasiswa.akun_id_akun = '" . $id_akun . "')";
        $result = $this->db->query($query_string);
        return $result->row();
    }
    

}
