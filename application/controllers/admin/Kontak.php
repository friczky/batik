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
            $data['contact'] = $this->db->where('id',1)->get('tb_kontak')->row_array();
            $this->load->view('admin/v_kontak',$data);
        }

    public function edit($id){
    	$data['kontak']		= $this->db->where('id',$id)->get('tb_kontak')->row_array();
        $this->load->view('admin/v_kontak_edit',$data);
    }

    public function update(){

		$id = 1 ;
        $data = [
            'nama'			=> $this->input->post('nama'),
            'alamat'		=> $this->input->post('alamat'),
            'email'		    => $this->input->post('email'),
            'telpon'		=> $this->input->post('telpon'),
            'maps'          => $this->input->post('maps')
        ];
        
        $this->db->where('id',$id);
        $this->db->update('tb_kontak',$data);
        $this->session->set_flashdata('contact', '<div class="alert alert-success">Success Update Contact!</div>');
        redirect(base_url('admin/kontak'));
    }
}
        
    /* End of file  User.php */

                            

		 