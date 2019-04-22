<?php 
class Mitra extends CI_Controller {
    public function index() {
        $this->load->view('header1');
        $this->load->view('mitra/mitra');
    }
    public function tambahlowongan(){
        if($_SESSION['status']=='Mitra') {
            $this->load->view('header1');
            $this->load->view('lowongan/post_lowongan');
        } else {
            $this->session->set_flashdata('alert','Anda tidak berhak mengakses Halaman Sebelumnya!');
            redirect('Home');
        }
    }
    public function tambah(){
        $this->LowonganModel->tambah();
        redirect('Home');

    }
    public function daftarlowongan(){
        if($_SESSION['status']=='Mitra') {
            $this->load->view('header1');
            $this->load->view('lowongan/view_lowongan');
        } else {
            $this->session->set_flashdata('alert','anda tidak mempunyai hak untuk mengakses halaman sebelumnya!');
            redirect('Home');
        }
    }
    public function editlowongan(){
        if($_SESSION['status']== 'Mitra'){
            $this->load->view('header1');
            $this->load->view('lowongan/edit_lowongan');
        } else{
            $this->session->set_flashdata('alert','anda tidak mempunyai hak untuk mengakses halaman sebelumnya!');
            redirect('Home');
        }
    }

}

?>