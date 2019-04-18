<?php 
class Login extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('akun/login');
    }
}

?>