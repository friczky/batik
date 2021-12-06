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
            
			$data['kategori'] = $this->db->order_by('id','desc')->get('tb_kategori',5)->result();
            $data['produk'] = $this->db->select('*')->from('tb_produk')->join('tb_kategori','tb_kategori.id = tb_produk.id_kategori')->order_by('tb_produk.id','desc')->get()->result();
            $this->load->view('admin/v_dashboard',$data);
        }

}
        
    /* End of file  User.php */
        
                            

		 