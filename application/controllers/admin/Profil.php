<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Profil extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
        {
            $id = $this->session->userdata('id') ;
            $data['user'] = $this->db->where('id',$id)->get('tb_user')->row_array();
            $this->load->view('admin/v_profile',$data);
        }

    public function update($id){
        $foto       = $_FILES['foto']['name'];

       
        $data = [
            'nama'			=> $this->input->post('nama'),
            'username'		=> $this->input->post('username'),
            'email'			=> $this->input->post('email'),
        ];
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/user/';
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
            $gambarLama = $this->input->post('foto_old');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/user/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('foto', $gambarBaru);
        } else {
            // echo $this->upload->display_errors();
        }
        $this->db->where('id',$id);
        $this->db->update('tb_user',$data);
        $this->session->set_flashdata('sukses', '<div class="alert alert-success">Success update user !</div>');
        redirect(base_url('admin/profil'));
    }

	public function change_password(){
		$id = $this->session->userdata('id');
		$data['user'] = $this->db->where('id',$id)->get('tb_user')->row_array();
		$this->load->view('admin/v_profile_password',$data);
	}

	public function update_password($id){
		if (isset($_POST['profile'])) {
        $password_lama = md5($this->input->post('password_lama'));
        $password_lama1 = $this->input->post('password_lama1');
        $password_baru  = md5($this->input->post('password_baru'));
        if ($password_lama == $password_lama1){
            $pwd = [
                'password' => $password_baru
            ];

            $this->db->where('id',$id)->update('tb_user',$pwd);
            $this->session->set_flashdata('sukses', '<div class="alert alert-success">Success update password !</div>');
            redirect(base_url('admin/user/profile'));
        } else {
            $this->session->set_flashdata('password_salah', '<div class="alert alert-danger">Old Password is Wrong!</div>');
            redirect(base_url('admin/user/change_password'));  
        }
        } if (isset($_POST['user'])) {
           $password_lama = md5($this->input->post('password_lama'));
        $password_lama1 = $this->input->post('password_lama1');
        $password_baru  = md5($this->input->post('password_baru'));
        if ($password_lama == $password_lama1){
            $pwd = [
                'password' => $password_baru
            ];

            $this->db->where('id',$id)->update('tb_user',$pwd);
            $this->session->set_flashdata('sukses', '<div class="alert alert-success">Success update password !</div>');
            redirect(base_url('admin/user/edit/$id'.$id));
        } else {
            $this->session->set_flashdata('password_salah', '<div class="alert alert-danger">Old Password is Wrong!</div>');
            redirect(base_url('admin/user/edit/'.$id));  
        }
        } else {
            
        }
        
	}


}
        
    /* End of file  User.php */
        
                            

		 