<?php
class Prize_tickets extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'admin';
    $this->data['module'] = 'prize_tickets';
    $this->load->model('admin_panel_model');    
    $this->load->model('common_model');    
}
    public function index()
	{         	
        $this->data['page'] = 'index';
        $this->data['prizes'] = $this->admin_panel_model->get_prize_submited_tickets();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
    
    
}

?>
