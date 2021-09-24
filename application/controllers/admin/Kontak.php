<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Kontak extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
        {
            $data['kontak'] = $this->db->order_by('id','desc')->get('tb_kontak');
            $this->load->view('admin/v_kontak',$data);
        }

    public function add(){
        $this->load->view('admin/v_kontak_add');
    }

    public function store(){
        
        $data = [
            'nama'			=> $this->input->post('nama'),
            'alamat'		=> $this->input->post('username'),
            'email'		    => $this->input->post('password'),
            'telpon'		=> $this->input->post('email'),
            'maps'          => $this->input->post('maps')
        ];
        $this->db->insert('tb_kontak',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan user !</div>');
        redirect(base_url('admin/kontak'));
    }

    public function edit($id){
    	$data['kontak']		= $this->db->where('id',$id)->get('tb_kontak')->row_array();
        $this->load->view('admin/v_kontak_edit',$data);

    }

    public function update($id){
        $data = [
            'nama'          => $this->input->post('nama'),
            'username'      => $this->input->post('username'),
            'password'      => $this->input->post('password'),
            'email'         => $this->input->post('email'),
        ];
        
        $this->db->where('id',$id);
        $this->db->update('tb_kontak',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil mengedit user !</div>');
        redirect(base_url('admin/kontak'));
    }

    public function delete($id){
        
        $this->db->where('id',$id)->delete('tb_kontak');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus User !</div>');
        redirect(base_url('admin/kontak'));
    }

}
        
    /* End of file  User.php */
        
                            

		 