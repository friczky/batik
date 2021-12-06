<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Produk extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
        {
            $data['produk'] = $this->db->query('Select p.id, p.nama,p.foto,p.harga, k.kategori From tb_produk p JOIN tb_kategori k on p.id_kategori = k.id ORDER BY p.id DESC')->result();
            
            $this->load->view('admin/v_produk',$data);
        }

    public function add(){
        $data['k']  = $this->db->get('tb_kategori')->result();
        $this->load->view('admin/v_produk_add',$data);

    }

    public function store(){
        $id_user = $this->session->userdata('id') ;
        $foto1  = $_FILES['foto'];
            if ($foto1) {
                $config['allowed_types'] = 'jpg|png|gif|jpeg|svg';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/produk/';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    // $this->upload->display_errors();
                }
            }
         $nama      = $this->input->post('nama');
		 $string    = url_title($nama, 'dash', true);
		 $trim      = trim($string); 
		 $pre_slug  = strtolower(str_replace(" ", "-", $trim)); 
		 $slug      = $pre_slug.'.html'; 

        $data = [
            'id_user'       => $id_user,
            'id_kategori'   => $this->input->post('id_kategori'),
            'nama'			=> $nama,
            'slug'			=> $slug,
            'deskripsi'		=> $this->input->post('deskripsi'),
			'harga'			=> $this->input->post('harga'),
            'foto'          => $foto,
        ];
        $this->db->insert('tb_produk',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Success added product !</div>');
        redirect(base_url('admin/produk'));
    }

    public function edit($id){
    	$data['p'] = $this->db->query('Select p.id, p.nama,p.foto,p.harga,p.deskripsi,p.id_kategori, k.kategori From tb_produk p JOIN tb_kategori k on p.id_kategori = k.id WHERE p.id ='.$id)->row_array();
        $data['k']      = $this->db->get('tb_kategori')->result();
  
        $this->load->view('admin/v_produk_edit',$data);

    }

    public function update($id){
        $foto       = $_FILES['foto']['name'];

         $nama      = $this->input->post('nama');
         $string    =url_title($nama, 'dash', true);
         $trim      =trim($string); 
         $pre_slug  =strtolower(str_replace(" ", "-", $trim)); 
         $slug       =$pre_slug.'.html'; 

        $data = [
            'id_user'       => $this->session->userdata('id'),
            'id_kategori'   => $this->input->post('id_kategori'),
            'nama'			=> $nama,
            'slug'			=> $slug,
            'deskripsi'		=> $this->input->post('deskripsi'),
			'harga'			=> $this->input->post('harga'),
        ];
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/produk/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $gambarLama = $this->input->post('foto_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . './uploads/produk/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
        $this->db->where('id',$id);
        $this->db->update('tb_produk',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Success updated Product !</div>');
        redirect(base_url('admin/produk'));
    }

    public function delete($id){
        $data = $this->db->query("SELECT * FROM tb_produk where id='$id'");
        foreach ($data->result() as $u){
            unlink('uploads/produk/'.$u->foto);
        } 
        $this->db->where('id',$id)->delete('tb_produk');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Success Deleted Product !</div>');
        redirect(base_url('admin/produk'));
    }

	public function kategori(){
		if ( isset($_POST['simpan']) ){
			$data = [
				'id_user'            => $this->session->userdata('id') ,
                'kategori'           => $this->input->post('kategori'),
			];
			$this->db->insert('tb_kategori',$data);
			$this->session->set_flashdata('sukses','<div class="alert alert-success"> Success added category !</div>');
        	redirect(base_url('admin/produk/kategori'));
		} elseif (isset($_POST['update'])) {
			$id = $this->input->post('id');
			$data = [
            'id_user'            => $this->session->userdata('id') ,
            'kategori'           => $this->input->post('kategori'),
			];
			$this->db->where('id',$id)->update('tb_kategori',$data);
			$this->session->set_flashdata('sukses','<div class="alert alert-success"> Success update category !</div>');
        	redirect(base_url('admin/produk/kategori'));
		} elseif (isset($_POST['hapus'])){
			$id =  $this->input->post('id');
			$this->db->where('id',$id)->delete('tb_kategori');
			$this->session->set_flashdata('sukses','<div class="alert alert-success"> Success delete category !</div>');
        	redirect(base_url('admin/produk/kategori'));
		} else {
			$data['kategori'] = $this->db->order_by('id','desc')->get('tb_kategori')->result();
			$this->load->view('admin/v_produk_kategori',$data);
		}
		
	}

}
        
    /* End of file  User.php */
        
                            

		 