<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = 'data/';
                $config['allowed_types']        = 'rar|zip';
                $config['max_size']             = '100240000';
                $config['max_width']            = '10240';
                $config['max_height']           = '7680';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->session->set_flashdata('alert',$this->upload->display_errors());
                        $this->load->view('header1', $error);
                        $this->load->view('lowongan/daftar_magang', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $nim=$this->input->post('nim',true);
                        $nama=$this->input->post('nama',true);
                        $email=$this->input->post('email',true);
                        $jurusan=$this->input->post('jurusan',true);
                        $kampus=$this->input->post('kampus',true);
                        $semester=$this->input->post('semester',true);
                        $sks=$this->input->post('sks',true);
                        $ipk=$this->input->post('ipk',true);
                        $file=$data['upload_data']['file_name'];
                        $lowongan=$this->input->post('id',true);  
                        $datum= [
                            'nama'=>$nama,
                            'nim'=>$nim,
                            'perguruantinggi'=>$kampus,
                            'jurusan'=>$jurusan,
                            'email'=>$email,
                            'semester'=>$semester,
                            'sks'=>$sks,
                            'ipk'=>$ipk,
                            'berkas'=>$file,
                            'lowongan'=>$lowongan,
                        ];
                        $this->db->insert('pendaftar',$datum);

                        $this->session->set_flashdata('success','data berhasil di upload');
                        redirect('Home');
                        
                }
        }
}
?>