<?php

class Home extends CI_Controller {

    public function index() {
        //load data nama mahasiswa
        $id_akun = $this->session->__get('id_akun');
        $this->load->model('mhs/mmahasiswa','mmahasiswa');
        
        //load data nama dan id_mhs
        $data['mahasiswa']=$this->mmahasiswa->get_nama_mhs_by_idakun($id_akun);
        $data_tambahan_session_mhs = ['id_mhs' => $data['mahasiswa']->id_mhs ];
        $this->session->set_userdata($data_tambahan_session_mhs);
        
        //load data pembimbing
        $data['pembimbing']=$this->mmahasiswa->get_pembimbing_by_idakun($id_akun);
                
        $this->load->view('mhs/dashboard-head');
        $this->load->view('mhs/dashboard',$data);
        $this->load->view('mhs/dashboard-foot');
    }
    

}