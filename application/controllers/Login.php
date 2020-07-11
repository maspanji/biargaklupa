<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends CI_Controller {

    public function index() {
        $data['page_title'] = "Login Page";
        $this->load->view('page_head',$data);
        $this->load->view('login_page');
        $this->load->view('page_foot');
    }
    
    public function do_login(){
        //deteksi role
        //set session sebagai role
        //masuk sesuai dashboard role
        $this->load->helper('url');
        //home koordinator TA
        redirect('koord/home');
    }

}
