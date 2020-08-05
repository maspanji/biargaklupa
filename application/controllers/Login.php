<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mauth');
    }

    public function index() {
        $data['page_title'] = "Login Page";
        $this->load->view('page_head', $data);
        $this->load->view('login_page');
        $this->load->view('page_foot');
    }

    public function do_login() {
        //deteksi role
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $password = "salted" . $password;
        $password = md5($password);

        $result = $this->mauth->cek_akun($username, $password);
        if ($result == null) {
            echo "akun tidak ditemukan !";
        } else {
            $role = $result->role;
            $id_akun = $result->id_akun;

            $this->load->helper('url');
            //register session
            $data = ['role' => $role, 'id_akun' => $id_akun, 'username' => $username];
            $this->session->set_userdata($data);

            //redirect ke masing-masing halaman
            if ($role == "KRD") {
                redirect('koord/home');
            } else if ($role == "MHS") {
                redirect('mhs/home');
            }
        }
    }


    public function session_test() {
        echo $this->session->__get('role')."<br>";
        echo $this->session->__get('id_akun')."<br>";
        echo $this->session->__get('username')."<br>";
    }

    public function destroy_session() {
        $this->session->sess_destroy();
    }

}
