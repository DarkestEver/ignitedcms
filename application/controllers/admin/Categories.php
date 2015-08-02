<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct()
	{
		  parent::__construct();
		  {
			  //check to see if they have permissions for categories!!
		  }
	}

	public function index()
	{
		$this->db->select('*');
		$this->db->from('categories');
		$query = $this->db->get();
		
		$data['query'] = $query;
		


		$this->load->view('admin/header');
		$this->load->view('admin/body');
		$this->load->view('admin/pages/default',$data);
		$this->load->view('admin/footer');
		
	}

}

/* End of file Categories.php */
/* Location: ./application/controllers/admin/Categories.php */