<?php

class Periode extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('koord/mperiode','mperiode');
    }
    
    public function index(){
        $this->load->view('koord/dashboard-head');
        $this->load->view('koord/setup_periode');
        $this->load->view('koord/dashboard-foot');
    }
    
    public function simpan_baru(){
        //dapatkan data periode dan keterangan
        $periode = $this->input->post("periode");
        $keterangan = $this->input->post("keterangan");    
        //simpan periode
        $this->mperiode->insert_new_periode($periode,$keterangan);
        
    }
    
}
