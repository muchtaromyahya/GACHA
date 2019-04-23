<?php
class LowonganModel extends CI_Model {
    public function tambah(){
        $uname=$_SESSION['nama'];
        $kategori=$this->input->post('kategori',true);
        $jurusan=$this->input->post('jurusan[]',true);
        $durasi=$this->input->post('durasi',true);
        $valid=$this->input->post('until',true);
        $semester=$this->input->post('semester',true);
        $sks=$this->input->post('sks',true);
        $ipk=$this->input->post('ipk',true);
        $umum=$this->input->post('persyaratanumum',true);
        $khusus=$this->input->post('persyaratankhusus',true);

        for($i=0;$i<count($jurusan);$i++){
            $data= [
                'username'=>$uname,
                'kategori'=>$kategori,
                'jurusan'=>$jurusan[$i],
                'durasi'=>$durasi,
                'valid'=>$valid,
                'semester'=>$semester,
                'sks'=>$sks,
                'ipk'=>$ipk,
                'umum'=>$umum,
                'khusus'=>$khusus,
            ];
            $this->db->insert('lowongan',$data);
            $this->session->set_flashdata('success','lowongan berhasil ditambahkan!');
        }

    }
    public function getalldata($username){
        $this->db->where('username',$username);
        $result=$this->db->get('lowongan');
        return $result;
    }
    public function tampil(){
        $data=$this->LowonganModel->getalldata($_SESSION['nama']);
        $table="";
        $no=1;
        foreach ($data->result() as $row){
             $table=$table.
             "<tr>
                  <td>$no</td>
                  <td>$row->username</td>
                  <td>$row->kategori</td>
                  <td>$row->jurusan</td>
                  <td>$row->durasi</td>
                  <td>$row->valid</td>
                  <td>$row->semester</td>
                  <td>$row->sks</td>
                  <td>$row->ipk</td>
                  <td>$row->umum</td>
                  <td>$row->khusus</td>
                  <td>
                  <form action='".base_url("Lowongan/hapuslowongan/$row->id")."' method='post'>
                  <button class='bg-danger login'  type='submit'>Hapus</button>
                  </form>
                  <form action='".base_url("Lowongan/editlowongan/$row->id")."' method='post'>
                  <button class='bg-success login'type='submit'>Edit</button>
                  </form>
                  </td>
             </tr>
             ";
             $no=$no+1;

        }
        return $table;
   }
   public function edit($id) {
    $this->db->where('id',$id);
    return $this->db->get('lowongan')->row_array();
   }
   public function ubahdb($id) {
    $uname=$_SESSION['nama'];
    $kategori=$this->input->post('kategori',true);
    $durasi=$this->input->post('durasi',true);
    $valid=$this->input->post('until',true);
    $semester=$this->input->post('semester',true);
    $sks=$this->input->post('sks',true);
    $ipk=$this->input->post('ipk',true);
    $umum=$this->input->post('persyaratanumum',true);
    $khusus=$this->input->post('persyaratankhusus',true);
    $data= [
        'username'=>$uname,
        'kategori'=>$kategori,
        'durasi'=>$durasi,
        'valid'=>$valid,
        'semester'=>$semester,
        'sks'=>$sks,
        'ipk'=>$ipk,
        'umum'=>$umum,
        'khusus'=>$khusus,
    ];
    $this->db->where('id',$id);
    $this->db->update('lowongan',$data);
    $this->session->set_flashdata('success','Update Berhasil');



   }
   
}

?>