<?php

/*
 * Class Registrasi untuk keperluan verifikasi registrasi mahasiswa
 * 
 */

class Registrasi extends CI_Controller {

    public function index() {
        $this->load->model('koord/mregistrasi', 'mregistrasi');
        $data['result'] = $this->mregistrasi->get_all_registran();
        $this->load->view("koord/dashboard-head");
        $this->load->view('koord/data_registrasi_baru', $data);
        $this->load->view("koord/dashboard-foot");
    }

    /**
     * method untuk verifikasi data user
     */
    public function verifikasi() {
        $nim = $this->input->post("id_mhs");
        $status_verifikasi = $this->input->post("status");
        if (status == "0") {
            //jika mahasiswa tidak terverifikasi
            $this->load->model('koord/mregistrasi', 'mregistrasi');
            $this->mregistrasi->verifikasi_mhs($nim, $status_verifikasi);
        } else {
            //jika mahasiswa sudah terverifikasi
            $this->load->model('koord/mregistrasi', 'mregistrasi');
            $this->load->model('koord/makun', 'makun');
            $this->load->model('koord/mmahasiswa','mahasiswa');
            //generate password
            $this->load->helper('randompwd');
            //uncomment untuk produksi
            //$generated_password = generate_random_password();
            //menambahkan salted teks
            $generated_password = "a"; //generated password selama development
            $generated_password = "salted".$generated_password;
            $generated_password = md5($generated_password);
            
            //buat id akun
            $id_akun = uniqid();
            //insert into tabel akun
            $this->mregistrasi->verifikasi_mhs($nim, $status_verifikasi);
            $this->makun->insert_akun_mhs($id_akun,$nim,$generated_password,'MHS');
            $this->mahasiswa->update_id_akun_by_nim($nim,$id_akun);
        }
    }

}
