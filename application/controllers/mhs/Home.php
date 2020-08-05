<?php

class Home extends CI_Controller {

    public function index() {
        $this->load->view('mhs/dashboard-head');
        $this->load->view('mhs/dashboard');
        $this->load->view('mhs/dashboard-foot');
    }
    

}