<?php

class Registrasi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('mregistrasi','mregistrasi');
    }
    
    public function index() {
        $data['page_title'] = "Registasi Baru";
        $this->load->view('page_head', $data);
        $this->load->view('registrasi_baru');
        $this->load->view('page_modal');
        $this->load->view('page_foot');
    }
    
    public function register_baru(){
        $nim = $this->input->post("nim");
        $nama = $this->input->post("nama");
        $hp = $this->input->post("no_hp");
        $email = $this->input->post("email");
        $tema = $this->input->post("tema");
        $url = $this->input->post("url");
        $this->mregistrasi->insert_new_register($nim,$nama,$hp,$email,$tema,$url);
    }
    
}
