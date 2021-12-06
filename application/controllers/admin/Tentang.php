<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Tentang extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');

        if ($this->session->userdata('role')=='Karyawan') {
        	redirect(base_url('admin'));
        }
    }

    public function index()
	{
		if (isset($_POST['update'])){
			$foto       = $_FILES['foto']['name'];

			$data = [
				'judul'	=> $this->input->post('judul'),
				'deskripsi' => $this->input->post('deskripsi')
			];
			$config['allowed_types'] = 'jpg|png|gif|jfif';
			$config['max_size'] = '4096';
			$config['upload_path'] = './uploads/system/';
			$this->upload->initialize($config);
			if ($this->upload->do_upload('foto')) {
				$gambarLama = $this->input->post('foto_old');
				if ($gambarLama != 'default.jpg') {
					unlink(FCPATH . '/uploads/system/' . $gambarLama);
				}
				$gambarBaru = $this->upload->data('file_name');
				$this->db->set('foto', $gambarBaru);
			} else {
				// echo $this->upload->display_errors();
			}
			$this->db->where('id',1)->update('tb_tentang',$data);
			redirect(base_url('admin/tentang'));
		} else {
			$data['about'] = $this->db->order_by('id','desc')->get('tb_tentang')->row_array();
				$this->load->view('admin/v_tentang',$data);
		}
	}

}
        
    /* End of file  User.php */
        
                            

		 