<?php
class Contact_us extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);

    $this->data['theme'] = 'user';
    $this->data['module'] = 'contact';
    $this->data['title'] = 'Best Website Design and app Development Company in Madhya Pradesh';
    // $this->load->model('user_panel_model');    
}
    public function index()
	{
        
        $this->data['page'] = 'index';
        // $this->data['site_setting'] = $this->user_panel_model->get_site_settings();        
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
	}   
}
?>

