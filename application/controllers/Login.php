<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('login/v_login');
    }

    public function auth(){
      
        $email      = $this->input->post('email');
        $password   = md5($this->input->post('password'));

        $data = $this->db->query("SELECT * FROM tb_user where email='$email' and password='$password'");

        if ($data->num_rows() > 0) {
                $user = $data->row_array();
                $data_sess = array(
                    'nama'    		=> $user['nama'],
					'username'    	=> $user['username'],
                    'email'         => $email,
                    'foto'          => $user['foto'],
                    'id'       		=> $user['id'],
                    'role'          => $user['role'],
                    'status'		=> 'login',
                );
                $this->session->set_userdata( $data_sess );
            
            redirect(base_url('admin'));
            }else {
                $this->session->set_flashdata('alert','<div class="alert alert-warning">Email or Password Wrong !</div>');
                redirect(base_url('login'));
        }
        

    }

    public function logout(){
        
        $this->session->sess_destroy();
        $this->session->set_flashdata('alert','<div class="alert alert-warning">Success logout !</div>');
        redirect(base_url('login'));
        
    }
        
}
        
    /* End of file  Login.php */
        
                            