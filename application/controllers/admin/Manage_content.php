<?php
class Manage_content extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'admin';
    $this->data['module'] = 'manage_content';
    $this->load->model('admin_panel_model');    
    $this->load->model('common_model');    
}
    public function index()
	{         	
        $this->data['page'] = 'index';
        $this->data['content'] = $this->admin_panel_model->get_content();
        /*var_dump($this->data['site']);
		exit; */
		$this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
    
    
    public function edit_content($id)
    {           
        //$employee_id = $this->uri->segment(4);
        $this->data['page'] = 'edit_content';
        $this->data['content'] = $this->admin_panel_model->get_single_content_by_id($id);  
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
    }
    

    public function update_content()
    {           
         $id = $this->input->post('id');
      
        $contentArray = array(
            'heading' 	=> $this->input->post('heading'), 
            'para' 		=> $this->input->post('para'), 
            'para1' 	=> $this->input->post('para1'), 
            'para2' 	=> $this->input->post('para2'), 
            'heading2' 	=> $this->input->post('heading2')           
           
        );
        $update_content = $this->admin_panel_model->update_content($id,$contentArray);
        if($update_content)
        {
             $this->session->set_flashdata("update_content_s","Content update Successfully.");
        }
        else
        {
            $this->session->set_flashdata("update_content_f","Failed to update content!");
        }
        // var_dump($this->db->last_query());
        redirect(base_url('admin/manage_content'));
    }
    
    
    
    
}

?>
