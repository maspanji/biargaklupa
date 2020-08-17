<?php

/*
 * Controller untuk distribusi mahasiswa yang baru mengambil skripsi
 * 
 */

class Distribusi extends CI_Controller {

    /**
     * Menampilkan halaman dengan data dosen, mahasiswa, periode aktif, untuk keperluan distribusi.
     */
    public function baru() {
        //load data dosen
        $this->load->model('koord/mdosen', 'mdosen');
        $data['data_dosen'] = $this->mdosen->get_all_dosen();

        //load data dosen dan jumlah bimbingan
        $data['data_dosen_dan_bimbingan'] = $this->mdosen->get_all_dosen_with_jml_bimbingan();

        //load data mahasiswa
        $this->load->model('koord/mmahasiswa', 'mmahasiswa');
        $data['data_mahasiswa'] = $this->mmahasiswa->get_all_new_verified_mahasiswa();

        //load periode aktif
        $this->load->model('koord/mperiode', 'mperiode');
        $data['data_periode'] = $this->mperiode->get_periode_aktif();

        //load page
        $this->load->view('koord/dashboard-head');
        $this->load->view('koord/distribusi_baru', $data);
        $this->load->view('koord/dashboard-foot');
    }

    //proses penyimpanan distribusi baru
    public function proses_distribusi_baru() {
        //ambil data dari javascript ajax
        $list_id_mhs = $this->input->post('list_id_mhs');
        $id_dosen = $this->input->post('id_dosen');
        $id_periode = $this->input->post('id_periode');
        //untuk setiap mahasiswa, masukkan ke dalam bimbingan
        $this->load->model('koord/mbimbingan', 'mbimbingan');
        foreach ($list_id_mhs as $id_mhs) {
            $this->mbimbingan->insert_bimbingan_baru($id_periode, $id_dosen, $id_mhs);
        }
    }

    //menuju ke halaman lihat bimbingan dosen
    public function lihat() {
        //load data dosen dan jumlah bimbingan
        $this->load->model('koord/mdosen', 'mdosen');
        $data['data_dosen_dan_bimbingan'] = $this->mdosen->get_all_dosen_with_jml_bimbingan();
        //load page
        $this->load->view('koord/dashboard-head');
        $this->load->view('koord/distribusi_per_dosen', $data);
        $this->load->view('koord/dashboard-foot');
    }

    //melihat bimbingan berdasarkan id dosen
    public function lihat_bimbingan() {
        //load helper dan model
        $this->load->helper('url');
        $this->load->model('koord/mbimbingan', 'mbimbingan');
        $this->load->model('koord/mdosen','mdosen');
        
        //mendapatkan data
        $id_dosen = $this->uri->segment(4);
        $data['list_mahasiswa'] = $this->mbimbingan->get_all_bimbingan_by_id_dosen($id_dosen);
        $data['nama_dosen'] = $this->mdosen->get_dosen_by_id_dosen($id_dosen);
        
        //menuju ke halaman
        $this->load->view('koord/dashboard-head');
        $this->load->view('koord/distribusi_per_dosen_detail', $data);
        $this->load->view('koord/dashboard-foot');
    }

    //mendapatkan mahasiswa bimbingan dan nama dosennya
    //"SELECT mahasiswa.nim, mahasiswa.nama , dosen.nama FROM mahasiswa JOIN bimbingan JOIN dosen ON mahasiswa.id_mhs = bimbingan.mahasiswa_id_mhs AND dosen.id_dosen=bimbingan.dosen_id_dosen"
}
