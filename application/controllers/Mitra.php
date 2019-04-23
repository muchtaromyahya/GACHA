<?php 
class Mitra extends CI_Controller {
    public function index() {
        $this->load->view('header1');
        $this->load->view('mitra/mitra');
    }
    public function tambahlowongan(){ 
        // digunakan untuk menampilan menambah lowongan untuk mitra
        if($_SESSION['status']=='Mitra') {
            $this->load->view('header1');
            $this->load->view('lowongan/post_lowongan');
        } else {
            $this->session->set_flashdata('alert','Anda tidak berhak mengakses Halaman Sebelumnya!');
            redirect('Home');
        }
    }
    public function tambah(){
        // agar ketika di klik tambah akan direct ke home
        $this->LowonganModel->tambah();
        redirect('Home');

    }
    public function daftarlowongan(){
        // digunakan untuk melihat data pendaftar yang sudah mendaftar lowongan
        if($_SESSION['status']=='Mitra') {
            $this->load->view('header1');
            $this->load->view('lowongan/view_lowongan');
        } else {
            $this->session->set_flashdata('alert','anda tidak mempunyai hak untuk mengakses halaman sebelumnya!');
            redirect('Home');
        }
    }
    public function viewpendaftar(){
        if($_SESSION['status']== 'Mitra'){
            $this->load->view('header1');
            $this->load->view('lowongan/data_pendaftar');
        } else{
            $this->session->set_flashdata('alert', 'anda tidak mempunyai hak untuk mengakses halaman sebelumnya!');
            redirect('Home');
        }
    }


}

?>