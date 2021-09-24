<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Tentang extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
        {
            $data['slide'] = $this->db->order_by('id','desc')->get('tb_slide');
            $this->load->view('admin/v_slide',$data);
        }

    public function add(){
        $data['k']  = $this->db->get('tb_blogkategori');
        $this->load->view('admin/v_slide_add',$data);
    }

    public function store(){
        $foto1  = $_FILES['foto'];
            if ($foto1) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '0';
                $config['upload_path'] = './uploads/slide/';
                $this->upload->initialize($config);
                if ($this->upload->do_upload('foto')) {
                    $foto = $this->upload->data('file_name');p[]
                    $this->upload->display_errors();
                }
            }

        $data = [
            'judul'			=> $this->input->post('judul'),
            'subjudul'		=> $this->input->post('subjudul'),
            'link'		    => $this->input->post('link'),
            'foto'          => $foto,
        ];
        $this->db->insert('tb_slide',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan Slide !</div>');
        redirect(base_url('admin/slide'));
    }

    public function edit($id){
    	$data['slide']		= $this->db->where('id',$id)->get('tb_slide')->row_array();
        $this->load->view('admin/v_slide_edit',$data);

    }

    public function update($id){
        $foto       = $_FILES['foto']['name'];

        $data = [
            'judul'         => $this->input->post('judul'),
            'subjudul'      => $this->input->post('subjudul'),
            'link'          => $this->input->post('link'),
        ];

        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/slide/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $gambarLama = $this->input->post('foto_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/slide/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
        $this->db->where('id',$id);
        $this->db->update('tb_slide',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil mengedit Artikel !</div>');
        redirect(base_url('admin/blog'));
    }

    public function delete($id){
        $data = $this->db->query("SELECT * FROM tb_slide where id='$id'");
        foreach ($data->result() as $u){
            unlink('uploads/slide/'.$u->foto);
        } 
        $this->db->where('id',$id)->delete('tb_slide');
        $this->session->set_flashdata('sukses','<div class="alert alert-success"> Berhasil Menghapus Artikel !</div>');
        redirect(base_url('admin/blog'));
    }


}
        
    /* End of file  User.php */
        
                            

		 