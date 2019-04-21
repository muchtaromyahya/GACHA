<?php
class LowonganModel extends CI_Model {
    public function tambah(){
        $uname=$_SESSION['username'];
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
}

?>