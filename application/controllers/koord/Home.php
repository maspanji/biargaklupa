<?php

class Home extends CI_Controller {

    public function index() {
        $this->load->view('koord/dashboard-head');
        $this->load->view('koord/dashboard');
        $this->load->view('koord/dashboard-foot');
    }
    

}