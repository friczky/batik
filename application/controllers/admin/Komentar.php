<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Komentar extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
        {
       		$data['komentar'] = $this->db->get('tb_komentar')->result() ;
            
            $this->load->view('admin/v_komentar',$data);
        }

    public function add(){
        $data['k']  = $this->db->get('tb_kategori')->result();
        $this->load->view('admin/v_produk_add',$data);

    }

	public function store($slug){

        $data = [
            'id_produk'       => $this->input->post('id_produk'),
            'nama'   		  => $this->input->post('nama'),
			'email'   		  => $this->input->post('email'),
			'komentar'        => $this->input->post('komentar'),
			'waktu'        	  => date('d-m-Y'),
        ];
        $this->db->insert('tb_komentar',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Success added product !</div>');
        redirect(base_url('detail/'.$slug));
    }

	public function product($id){
		$produk = $this->db->where('id',$id)->get('tb_produk')->row_array();
		$slug = $produk['slug'];
		redirect(base_url('detail/'.$slug));
	}

    public function delete($id){
       
        $this->db->where('id',$id)->delete('tb_komentar');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Success Deleted Comment !</div>');
        redirect(base_url('admin/komentar'));
    }

}
        
    /* End of file  User.php */
        
                            

		 