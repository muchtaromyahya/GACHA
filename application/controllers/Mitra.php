<?php 
class Mitra extends CI_Controller {
    public function index() {
        $this->load->view('header1');
        $this->load->view('mitra/mitra');
    }
    public function tambahlowongan(){
        $this->losd->view('lowongan/post_lowongan');
    }

}

?>