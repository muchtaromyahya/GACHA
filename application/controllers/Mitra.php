<?php 
class Mitra extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('mitra/mitra');
    }
}

?>