<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Kategori extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
        {
            $data['slide'] = $this->db->order_by('id','desc')->get('tb_kategori');
            $this->load->view('admin/v_kategori',$data);
        }

    public function store(){
   
        $data = [
            'nama'			=> $this->input->post('nama'),
            'deskripsi'		=> $this->input->post('deskripsi'),
        ];
        $this->db->insert('tb_kategori',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan kategori !</div>');
        redirect(base_url('admin/kategori'));
    }

    public function update($id){
     
        $data = [
            'nama'			=> $this->input->post('nama'),
            'deskripsi'		=> $this->input->post('deskripsi'),
        ];

        $this->db->where('id',$id);
        $this->db->update('tb_kategori',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil mengedit kategori !</div>');
        redirect(base_url('admin/kategori'));
    }

    public function delete($id){
        $this->db->where('id',$id)->delete('tb_kategori');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus kategori !</div>');
        redirect(base_url('admin/kategori'));
    }


}
        
    /* End of file  User.php */
        
                            

		 