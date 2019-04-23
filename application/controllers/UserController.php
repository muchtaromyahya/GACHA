<?php 
class UserController extends CI_Controller {
    public function signin() {
        $username=$this->input->post('uname',true);
        $password=$this->input->post('psw',true);
        $validate=$this->User->validate($username,$password);
        if($validate->num_rows()==1){
            $data=$validate->row_array();
            $uname=$data['username'];
            $status=$data['status'];
            $email=$data['email'];
            $nama=$data['nama'];
            $tempat=$data['tempat'];
            $tanggal=$data['tanggal'];
            $dataSession = array (
                'username' => $uname,
                'status' => $status,
                'email' =>$email,
                'nama'=>$nama,
                'tempat'=>$tempat,
                'tanggal'=>$tanggal,
                'Logged_in' => true
            );
            $this->session->set_userdata($dataSession);
            $this->session->set_flashdata('success','Login Berhasil!');
            redirect('Home');
        } else {
            $this->session->set_flashdata('alert','Login Gagal!');
            redirect('Home');
        }
    }
    public function signout(){
        session_destroy();        
        redirect('Home');
        
    }
    public function register(){
        $this->User->tambah();
        $this->session->set_flashdata('success','registrasi berhasil');
        redirect('Home');
        

        

    }
    public function setting() {
        if (isset($_SESSION['Logged_in'])) {
            $data['data']=$this->User->getdata($_SESSION['username']);
            $this->load->view('header1');
            $this->load->view('akun/setting',$data);
        } else {
            $this->session->set_flashdata('alert','anda tidak dapat mengakses halaman sebelumnya!');
            redirect('Home');
        }
        
    }
    public function edit() {
    $this->User->edit($_SESSION['username']);   
    redirect('Home');

         
        
    }
}
?>