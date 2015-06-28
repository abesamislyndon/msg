<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MessageBoard extends CI_Controller {

	public function index()
	{

		$this->load->model('msg_model');
		$data['all_message'] = $this->msg_model->show_all_msg();    

     
        $this->load->view('scaffolds/header');
		$this->load->view('welcome_message', $data);
		$this->load->view('scaffolds/footer');
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */