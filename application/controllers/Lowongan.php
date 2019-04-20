<?php 
class Lowongan extends CI_Controller {
     public function index() {
            $this->load->view('header1');
            $this->load->view('lowongan/lowongan');
     }
}   
?>