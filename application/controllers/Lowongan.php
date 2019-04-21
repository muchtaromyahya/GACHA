<?php 
class Lowongan extends CI_Controller {
     public function index() {
            $this->load->view('header1');
            $this->load->view('lowongan/lowongan');
     }
     public function tampil(){
          $data=$this->LowonganModel->getalllowongan();
          $table="";
          foreach ($data->result as $row){
               $table=$table+
               "<tr>
                    <td>".$row->username."</td>
                    <td>".$row->kategori."</td>
                    <td>".$row->jurusan."</td>
                    <td>".$row->durasi."</td>
                    <td>".$row->valid."</td>
                    <td>".$row->semester."</td>
                    <td>".$row->sks."</td>
                    <td>".$row->ipk."</td>
                    <td>".$row->umum."</td>
                    <td>".$row->khusus."</td>
                    
               </tr>
               ";
          }
          return $table;
     }
}   
?>