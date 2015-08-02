<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
  *  @Description: A quick templating test using Codeigniter template engine
  *       @Params: params
  *
  *  	 @returns: returns
  */


class Template_test extends CI_Controller {

	public function index()
	{
		$this->db->select('*');
		$this->db->from('pages');

		$query = $this->db->get();
		
		

		$this->load->library('parser');

		$url1 = site_url('admin/template_test');

		$data = array(
			    'url1'         => $url1,
		        'page_title'   => 'My Page Title',
		        'page_heading' => 'My Page Heading',
		        'pages' => $query->result_array()
		);

		$this->load->view('admin/header');
		$this->load->view('admin/body');
		$this->parser->parse('admin/template/template-test', $data);
		$this->load->view('admin/footer');
	}

}

/* End of file Template_test.php */
/* Location: ./application/controllers/admin/Template_test.php */