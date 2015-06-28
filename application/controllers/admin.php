<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{

		$this->load->model('msg_model');
		$data['pending_message'] = $this->msg_model->show_for_approval();    

        $this->load->view('scaffolds/header');
		$this->load->view('admin', $data);
		$this->load->view('scaffolds/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */