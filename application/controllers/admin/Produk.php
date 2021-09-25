<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Blog extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
        {
            $data['produk'] = $this->db->order_by('id','desc')->get('tb_produk');
            $this->load->view('admin/v_produk',$data);
        }

    public function add(){
        $data['k']  = $this->db->get('tb_kategori');
        $this->load->view('admin/v_produk_add',$data);

    }

    public function store(){
        $foto1  = $_FILES['foto'];
            if ($foto1) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/produk/';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }
         $nama     = $this->input->post('nama');
		 $string    = url_title($nama, 'dash', true);
		 $trim      = trim($string); 
		 $pre_slug  = strtolower(str_replace(" ", "-", $trim)); 
		 $slug       =$pre_slug.'.html'; 

        $data = [
            'judul'			=> $nama,
            'slug'			=> $slug,
            'kategori'		=> $this->input->post('kategori'),
            'deskripsi'		=> $this->input->post('deskripsi'),
			'harga'			=> $this->input->post('harga'),
            'foto'          => $foto,
        ];
        $this->db->insert('tb_produk',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan Produk !</div>');
        redirect(base_url('admin/produk'));
    }

    public function edit($id){
    	$data['blog']		= $this->db->where('id',$id)->get('tb_blog')->row_array();
        $data['k']          = $this->db->get('tb_blogkategori');
  
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
            'judul'			=> $nama,
            'slug'			=> $slug,
            'kategori'		=> $this->input->post('kategori'),
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
                unlink(FCPATH . '/uploads/produk/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
        $this->db->where('id',$id);
        $this->db->update('tb_produk',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil mengedit produk !</div>');
        redirect(base_url('admin/produk'));
    }

    public function delete($id){
        $data = $this->db->query("SELECT * FROM tb_blog where id='$id'");
        foreach ($data->result() as $u){
            unlink('uploads/produk/'.$u->foto);
        } 
        $this->db->where('id',$id)->delete('tb_produk');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus produk !</div>');
        redirect(base_url('admin/produk'));
    }

    //Upload image summernote
	function upload_image(){
		if(isset($_FILES["image"]["name"])){
			$config['upload_path'] = './uploads/produk/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('image')){
				$this->upload->display_errors();
				return FALSE;
			}else{
				$data = $this->upload->data();
		        //Compress Image
		        $config['image_library']='gd2';
		        $config['source_image']='./uploads/produk/'.$data['file_name'];
		        $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= TRUE;
	            $config['quality']= '60%';
	            $config['width']= 800;
	            $config['height']= 800;
	            $config['new_image']= './uploads/produk/'.$data['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
				echo base_url().'uploads/blog/'.$data['file_name'];
			}
		}
	}

	//Delete image summernote
	function delete_image(){
		$src = $this->input->post('src');
		$file_name = str_replace(base_url(), '', $src);
		if(unlink($file_name)){
	        echo 'File Delete Successfully';
	    }
	}

}
        
    /* End of file  User.php */
        
                            

		 