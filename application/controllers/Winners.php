<?php
class Winners extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);

    $this->data['theme'] = 'user';
    $this->data['module'] = 'winners';
    $this->data['title'] = 'Winners';
    $this->load->model('user_panel_model');
    $this->load->model('common_model');  
	}
    public function index()
	{
        $this->data['page'] = 'index';
        @$this->data['winners'] = $this->common_model->get_winner_employees();
		@$this->data['content'] = $this->user_panel_model->get_page_content();
        @$this->data['setting'] = $this->user_panel_model->get_site_setting();
		
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
	}
}
?>

