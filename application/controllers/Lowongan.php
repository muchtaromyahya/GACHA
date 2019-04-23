<?php 
class Lowongan extends CI_Controller {
     public function index() {
            $this->load->view('header1');
            $this->load->view('lowongan/lowongan');
     }
     public function hapuslowongan($id) {
          if ($_SESSION['status']=='Mitra') {
               $this->db->where('id', $id);
               $this->db->delete('lowongan');
               $this->session->set_flashdata('success','data berhasil di hapus!');
               redirect('Mitra/daftarLowongan');
          } else {
               redirect('Home');
          }
          
          
     }
     public function editlowongan($id){
          // digunakan untuk meng update post lowongan yang sudah di update sebelumnya
          if($_SESSION['status']== 'Mitra'){
               
               
              $data['datum']=$this->LowonganModel->edit($id);
              $this->load->view('header1');
              $this->load->view("lowongan/edit_lowongan",$data);
              
               
          } else{
              $this->session->set_flashdata('alert','anda tidak mempunyai hak untuk mengakses halaman sebelumnya!');
              redirect('Home');
          }
      }
      public function ubah($id) {
          $this->LowonganModel->ubahdb($id);
          redirect('Mitra/daftarLowongan');
      }
     public function applylowongan($id,$username) {
          $data['id']=$id;
          $data['user']=$username;
          $this->load->view('header1');
          $this->load->view('lowongan/daftar_magang',$data);

     }
     
}   
?>