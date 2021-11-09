<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$data['about'] =  $this->db->where('id',1)->get('tb_tentang')->row_array();
		$data['produk'] =  $this->db->get('tb_produk')->result();
		$data['kategori'] =  $this->db->where('id',1)->get('tb_kategori')->result();
		$data['kontak'] =  $this->db->where('id',1)->get('tb_kontak')->row_array();
		$data['slide']	= $this->db->get('tb_slide')->result();
		$this->load->view('home/v_home',$data);
	}

	public function shop(){
		$data['about'] 		=  $this->db->where('id',1)->get('tb_tentang')->result();
		$data['produk'] 	=  $this->db->get('tb_produk')->result();
		$data['kategori'] 	=  $this->db->where('id',1)->get('tb_kategori')->result();
		$data['kontak'] 	=  $this->db->where('id',1)->get('tb_kontak')->row_array();
		$this->load->view('home/v_shop',$data);
	}

	public function detail($slug){
		$data['about'] 		=  $this->db->where('id',1)->get('tb_tentang')->result();
		$data['produk'] 	=  $this->db->where('slug',$slug)->get('tb_produk')->row_array();
		$data['kategori'] 	=  $this->db->where('id',1)->get('tb_kategori')->result();
		$data['kontak'] 	=  $this->db->where('id',1)->get('tb_kontak')->row_array();
		$this->load->view('home/v_detail',$data);
	}

	public function contact(){
		$data['about'] 		= $this->db->where('id',1)->get('tb_kontak')->row_array;
		$this->load->view('home/v_contact',$data);
	}

	public function about(){
		$data['about'] 		= $this->db->where('id',1)->get('tb_tentang')->row_array;
		$this->load->view('home/v_about',$data);
	}
}
