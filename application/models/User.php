<?php

class User extends CI_Model {
    public function validate($username,$password) {
        $password=md5($password);
        $query= $this->db->query("SELECT * FROM registration WHERE username = BINARY '$username' and password='$password'");
        return $query;
    }
    public function tambah(){
        $username=$this->input->post('uname',true);
        $email=$this->input->post('email',true);
        $verify=$this->User->cek($username,$email);
        if($verify->num_rows()==1){
        $this->session->set_flashdata('alert','username atau email sudah terpakai!');
        redirect('Home');
        } else {

            $data= [
                'nama'=>$this->input->post('fullname',true),
                'username'=>$this->input->post('uname',true),
            'password'=>md5($this->input->post('psw1',true)),
            'email'=>$this->input->post('email',true),
            'tempat'=>$this->input->post('Tempat',true),
            'tanggalLahir'=>$this->input->post('tanggal',true),
            'status'=>$this->input->post('status',true),
            ];
            $this->db->insert('registration',$data);
        }
    }
    public function cek($username,$email){
        $this->db->where('username',$username);
        $this->db->where('email',$email);
        $result=$this->db->get('registration',1);
        return $result;
    }
     public function getdata($username) {
         $this->db->where('username',$username);
         $result=$this->db->get('registration',1);
        return $result->row_array();
     }
     public function edit($username) {
        $data=$this->User->getdata($this->input->post('username'),true);
        if (md5($this->input->post('password'))==$data['password'] && $this->input->post('passwordbaru',true)){
            $newdata= [
                'nama'=>$this->input->post('perusahaan',true),
            'password'=>md5($this->input->post('passwordbaru',true)),
            'email'=>$this->input->post('email',true),
            'tempat'=>$this->input->post('Tempat',true),
            'tanggalLahir'=>$this->input->post('tanggal',true),
            ];
            $this->db->where('username',$username);
            $this->db->update('registration',$newdata);
            $this->session->set_flashdata('success','Update Berhasil');
            $_SESSION['nama']=$newdata['nama'];
            $_SESSION['email']=$newdata['email'];
            $_SESSION['tempat']=$newdata['tempat'];
            $_SESSION['tanggal']=$newdata['tanggalLahir'];
        } else if (md5($this->input->post('password'))==$data['password'] && $_POST['passwordbaru']==""){
            $newdata= [
                'nama'=>$this->input->post('perusahaan',true),
            'email'=>$this->input->post('email',true),
            'tempat'=>$this->input->post('Tempat',true),
            'tanggalLahir'=>$this->input->post('tanggal',true),
            ];
            $this->db->where('username',$username);
            $this->db->update('registration',$newdata);
            $this->session->set_flashdata('success','Update Berhasil');
            $_SESSION['nama']=$newdata['nama'];
            $_SESSION['email']=$newdata['email'];
            $_SESSION['tempat']=$newdata['tempat'];
            $_SESSION['tanggal']=$newdata['tanggalLahir'];
        } else {
            $this->session->set_flashdata('alert','Update gagal');
        }

        
     }
}

?>