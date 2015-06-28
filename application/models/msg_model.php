<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class msg_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    
    function show_all_msg()
     {
       $this->db->select('*');
        $this->db->from('message');
        $this->db->join('uploads', 'message.message_id = uploads.message_id', 'inner');
        $this->db->where('status', 2);
       
        $query = $this->db->get();
        return $result = $query->result();
        json_encode($query);
    }
    
      
  function do_insert_item($sender_name,$message, $data)
  {
    
    $row = array(
    'sender_name'=>$sender_name,
    'message'=>$message,
    'status'=>1
    );
    $this->db->insert('message', $row);
    $item_id = $this->db->insert_id();

    $file = array(
    'img_name' => $data['raw_name'],
    'thumb_name' => $data['raw_name'] . '_thumb',
    'ext' => $data['file_ext'],
    'upload_date' => time(),
    'message_id'=>$item_id
    );

    $data = array(
    'upload_data' => $this->upload->data()
    );   

    $this->db->insert('uploads',$file);
    $this->session->set_flashdata('msg', 'item succesfully added');
    redirect('messageForm/form');
  }
   
  function show_for_approval()
  {
    $this->db->select('*');
    $this->db->from('message');
    $this->db->join('uploads', 'message.message_id = uploads.message_id', 'inner');
    $this->db->where('status', 1);
    $query = $this->db->get();
    return $result = $query->result();
    json_encode($query);
  } 

  function do_approved_message($id){

    $this->db->select('*');
    $this->db->from('message');
    $this->db->join('uploads', 'message.message_id = uploads.message_id', 'inner');
    
    $row = array('status'=>2);

    $this->db->where('message_id', $id);
    $this->db->update('message', $row);

    $this->session->set_flashdata('msg', 'item succesfully added');
    redirect('admin');

  }       
  

}
