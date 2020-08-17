<?php

/**
 * Description : model untuk data dosen.
 *
 * @author maspa
 */

class MDosen extends CI_Model{
    //put your code here
    public function get_all_dosen(){
        $this->db->select('id_dosen,nama');
        $query = $this->db->get('dosen');
        return $query->result();
    }
    
    public function get_all_dosen_with_jml_bimbingan(){
        $query_dosen_jml_bimb = "SELECT dosen.id_dosen,dosen.nama, count(bimbingan.dosen_id_dosen) "
                . "as total_bimb FROM dosen LEFT JOIN bimbingan "
                . "ON dosen.id_dosen = bimbingan.dosen_id_dosen GROUP BY dosen.nama";
        $query = $this->db->query($query_dosen_jml_bimb);
        return $query->result();
    }
    
    public function get_dosen_by_id_dosen($id_dosen){
        $query_string = "SELECT dosen.nama FROM dosen WHERE dosen.id_dosen=".$id_dosen;
        $query = $this->db->query($query_string);
        return $query->row();
    }
    
}
