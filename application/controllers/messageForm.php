<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class MessageForm extends CI_Controller {

 public function form()
	{   

		$this->load->view('scaffolds/header');
		$this->load->view('form');
		$this->load->view('scaffolds/footer');		
	}
  
  public function do_add_message()
    {   
        $this->load->model('msg_model');
        $this->load->model('upload_model');
        $sender_name    = $this->input->post('sender_name', TRUE);
        $message    = $this->input->post('message', TRUE);
               
        if ($this->input->post('submit')) 
        {    
      
            $config['upload_path']   = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '5024';
            $config['max_width']     = '1024';
            $config['max_height']    = '1920';
            $this->upload->initialize($config);
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $data = $this->upload->data();
            $full_path = $data['full_path'];
            $this->load->library('image_autorotate', array('filepath' => $full_path));
            $this->thumb($data);             
            $this->msg_model->do_insert_item($sender_name,$message, $data);   
        } 
        else 
        {
            redirect(site_url('upload'));
        } 
    }
    
  public function thumb($data)
    {
        $config['image_library']  = 'gd2';
        $config['source_image']   = $data['full_path'];
        $config['create_thumb']   = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['max_size']      = '5024';
        $config['width']          = 275;
        $config['height']         = 250;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }

    public function approved_message()
    {
        $this->load->model('msg_model');
        $this->load->model('upload_model');
        $id = $this->uri->segment(3);
        $this->msg_model->do_approved_message($id);
    }
}    



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */