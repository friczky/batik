<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
    }

    public function index()
        {
            $data['blog'] = $this->db->order_by('id','desc')->get('tb_produk');
			$data['kategori'] = $this->db->order_by('id','desc')->get('tb_kategori',5)->result();
			$data['produk'] = $this->db->order_by('id','desc')->get('tb_produk')->result();
            $this->load->view('admin/v_dashboard',$data);
        }

}
        
    /* End of file  User.php */
        
                            

		 