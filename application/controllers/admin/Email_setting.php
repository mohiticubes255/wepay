<?php
class Email_setting extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'admin';
    $this->data['module'] = 'email_settings';
    $this->load->model('admin_panel_model');    
    $this->load->model('common_model');    
}
    public function index()
	{         	
        $this->data['page'] = 'email_setting';
        $this->data['email'] = $this->admin_panel_model->get_email_setting();  
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
    

    public function update_email()
    {           
         $id = $this->input->post('emailid');
      
        $emailArray = array(
            'smtp_host' 	=> $this->input->post('smtp_host'), 
            'smtp_user' 	=> $this->input->post('smtp_user'), 
            'smtp_pass' 		=> $this->input->post('smtp_pass'), 
            'smtp_port' 	=> $this->input->post('smtp_port'), 
            'smtp_crypto' 	=> $this->input->post('smtp_crypto'), 
            'charset' 	=> $this->input->post('charset'), 
            'send_from' 	=> $this->input->post('send_from'), 
            
           
        );
        $update_email = $this->admin_panel_model->update_email_setting($id,$emailArray);
        if($update_email)
        {
             $this->session->set_flashdata("update_email_s","Email Setting update Successfully.");
        }
        else
        {
            $this->session->set_flashdata("update_email_f","Failed to update Email Setting!");
        }
        // var_dump($this->db->last_query());
        redirect(base_url('admin/email_setting'));
    }
    
    
    
    
}

?>
