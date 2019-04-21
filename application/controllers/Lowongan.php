<?php 
class Lowongan extends CI_Controller {
     public function index() {
            $this->load->view('header1');
            $this->load->view('lowongan/lowongan');
     }
     public function hapuslowongan($id) {
          $this->db->where('id', $id);
          $this->db->delete('lowongan');
          $this->session->set_flashdata('success','data berhasil di hapus!');
          redirect('Mitra/daftarLowongan');
     }
     
}   
?>