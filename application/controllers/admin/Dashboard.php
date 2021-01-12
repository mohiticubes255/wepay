<?php
class Dashboard extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'admin';
    $this->data['module'] = 'dashboard';
    $this->load->model('admin_panel_model');    
    $this->load->model('common_model');    
}
    public function index()
	{         	
        $this->data['page'] = 'index';
        $this->data['employees'] = $this->common_model->get_employees();
		@$this->data['winners'] = $this->common_model->get_winner_employees();
        $this->data['gifts'] = $this->common_model->get_gifts();    
        $this->data['tickets'] = $this->common_model->get_tickets();    
        $this->data['unused_tickets'] = $this->common_model->get_unused_tickets();    
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
   
}

?>
