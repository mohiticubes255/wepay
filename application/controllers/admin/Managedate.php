<?php
class Managedate extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'admin';
    $this->data['module'] = 'managedate';
    $this->load->model('admin_panel_model');    
    $this->load->model('common_model');    
}
    public function index()
	{         	
        $this->data['page'] = 'index';
		$this->data['dates'] = $this->admin_panel_model->get_prize_dates();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
	}
	public function add_date()
	{         	
        $this->data['page'] = 'add_date';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
	}
	public function edit_date()
	{         	
		$data_id = $this->uri->segment(3);
        $this->data['page'] = 'edit_date';
		$this->data['date'] = $this->admin_panel_model->get_single_prize_date($data_id);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
	}  
	public function save_date()
	{
		$gift_date_start = date('Y-m-d H:i:s', strtotime(DateTime::createFromFormat('d/m/Y H:i:s', $this->input->post('gift_date_start'))->format('Y-m-d H:i:s')));
		$gift_date_close = date('Y-m-d H:i:s', strtotime(DateTime::createFromFormat('d/m/Y H:i:s', $this->input->post('gift_date_close'))->format('Y-m-d H:i:s')));
		$gift_date_winner_announce = date('Y-m-d H:i:s', strtotime(DateTime::createFromFormat('d/m/Y H:i:s', $this->input->post('gift_date_winner_announce'))->format('Y-m-d H:i:s')));
		if(strtotime(date($gift_date_winner_announce)) > strtotime(date($gift_date_start)) && strtotime(date($gift_date_winner_announce)) > strtotime(date($gift_date_close)) && strtotime(date($gift_date_close)) > strtotime(date($gift_date_start)))
		{
			$dateArray = array(
			'gift_date_title' => $this->input->post('gift_date_title'),
			'gift_date_start' => $gift_date_start,
			'gift_date_close' => $gift_date_close,
			'gift_date_winner_announce' => $gift_date_winner_announce,
			'gift_date_create' => date("Y-m-d H:i:s") 
			);
			$addDate = $this->db->insert('gifts_dates',$dateArray);
			if($addDate)
			{
				$this->session->set_flashdata("add_date_s","Date added Successfully.");
			}
			else
			{
				$this->session->set_flashdata("add_date_f","Failed to add Date!");
			}
		}
		else
		{
			$this->session->set_flashdata("add_date_w","Failed, Please check your date orders!");	
		}
		redirect(base_url('admin/manage-date'));		
	}
	public function update_date()
	{
		$date_id = $this->input->post('date_id');
		$gift_date_start = date('Y-m-d H:i:s', strtotime(DateTime::createFromFormat('d/m/Y H:i:s', $this->input->post('gift_date_start'))->format('Y-m-d H:i:s')));
		$gift_date_close = date('Y-m-d H:i:s', strtotime(DateTime::createFromFormat('d/m/Y H:i:s', $this->input->post('gift_date_close'))->format('Y-m-d H:i:s')));
		$gift_date_winner_announce = date('Y-m-d H:i:s', strtotime(DateTime::createFromFormat('d/m/Y H:i:s', $this->input->post('gift_date_winner_announce'))->format('Y-m-d H:i:s')));
		if(strtotime(date($gift_date_winner_announce)) > strtotime(date($gift_date_start)) && strtotime(date($gift_date_winner_announce)) > strtotime(date($gift_date_close)) && strtotime(date($gift_date_close)) > strtotime(date($gift_date_start)))
		{
			$dateArray = array(
			'gift_date_title' => $this->input->post('gift_date_title'),
			'gift_date_start' => $gift_date_start,
			'gift_date_close' => $gift_date_close,
			'gift_date_winner_announce' => $gift_date_winner_announce
			);
			$updateDate = $this->admin_panel_model->update_prize_date($date_id,$dateArray);
			if($updateDate)
			{
				$this->session->set_flashdata("update_date_s","Date update Successfully.");
			}
			else
			{
				$this->session->set_flashdata("update_date_f","Failed to update Date OR Noting to change!");
			}
		}
		else
		{
			$this->session->set_flashdata("update_date_f","Failed, Please check your date orders!");	
		}
		redirect(base_url('admin/manage-date'));		
	}
}

?>
