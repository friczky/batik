<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$data['about'] =  $this->db->where('id',1)->get('tb_tentang')->row_array();
		$data['produk'] =  $this->db->order_by('id','desc')->get('tb_produk',5)->result();
		$data['kategori'] =  $this->db->where('id',1)->get('tb_kategori')->result();
		$data['kontak'] =  $this->db->where('id',1)->get('tb_kontak')->row_array();
		$data['slide']	= $this->db->get('tb_slide')->result();
		$this->load->view('home/v_home',$data);
	}

	public function shop(){
		$data['about'] 		=  $this->db->where('id',1)->get('tb_tentang')->row_array();
		$data['produk'] 	=  $this->db->order_by('id','desc')->get('tb_produk')->result();
		$data['kategori'] 	=  $this->db->get('tb_kategori')->result();
		$data['kontak'] 	=  $this->db->where('id',1)->get('tb_kontak')->row_array();
		$this->load->view('home/v_shop',$data);
	}

	public function category($id){
		
		$data['about'] 		=  $this->db->where('id',1)->get('tb_tentang')->row_array();
		$data['produk'] 	=  $this->db->where('id_kategori',$id)->get('tb_produk')->result();
		$data['kategori'] 	=  $this->db->get('tb_kategori')->result();
		$data['kontak'] 	=  $this->db->where('id',1)->get('tb_kontak')->row_array();
		$data['category']   =  $this->db->where('id',$id)->get('tb_kategori')->row_array();
		$this->load->view('home/v_category',$data);
	}


	public function detail($slug){

		$data['about'] 		=  $this->db->where('id',1)->get('tb_tentang')->row_array();
		$data['produk'] 	=  $this->db->where('slug',$slug)->get('tb_produk')->row_array();
		$data['produk'] 	=  $this->db->select('*')->from('tb_produk')->join('tb_kategori','tb_kategori.id = tb_produk.id_kategori')->where('tb_produk.slug',$slug)->get()->row_array();
		$data['kategori'] 	=  $this->db->where('id',1)->get('tb_kategori')->result();
		$data['kontak'] 	=  $this->db->where('id',1)->get('tb_kontak')->row_array();
		$this->load->view('home/v_detail',$data);
	}

	public function contact(){
		$data['about'] 			= $this->db->where('id',1)->get('tb_tentang')->row_array();
		$data['contact'] 		= $this->db->where('id',1)->get('tb_kontak')->row_array();
		$this->load->view('home/v_contact',$data);
	}

	public function about(){
		$data['about'] 		= $this->db->where('id',1)->get('tb_tentang')->row_array();
		$this->load->view('home/v_about',$data);
	}
}
