<?php 
class About extends CI_Controller {
    public function index() {
        $this->load->view('header1');
        $this->load->view('About');
    }
}
?>