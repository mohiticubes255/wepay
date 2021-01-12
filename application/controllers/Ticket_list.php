<?php
class Ticket_list extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);

    $this->data['theme'] = 'user';
    $this->data['module'] = 'ticket';
    $this->data['title'] = 'Ticket List';
    $this->load->model('user_panel_model');
    $this->load->model('common_model'); 
    if(!@$this->session->userdata['SESSION_EMPLOYEE_ID'])
    {
        redirect(base_url());
    }    
}
    public function index()
	{
        // var_dump($this->session->userdata['SESSION_EMPLOYEE_ID']);
        // var_dump($this->session->userdata['SESSION_EMPLOYEE_EMAIL']);
        @$employee_id = $this->session->userdata['SESSION_EMPLOYEE_ID'];
        $this->data['page'] = 'index';
        @$this->data['products'] = $this->user_panel_model->get_open_products(); 
		@$this->data['content'] = $this->user_panel_model->get_page_content();
        @$this->data['setting'] = $this->user_panel_model->get_site_setting();
        @$this->data['dates'] = $this->user_panel_model->get_upcomming_winning_date();
		
        @$this->data['tickets'] = $this->user_panel_model->get_employee_tickets_by_id($employee_id);
        @$this->data['submitedTickets'] = $this->user_panel_model->get_employee_submited_tickets_by_id($employee_id);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
	}
    public function get_gift()
    {
        $gift_id = $this->input->post('gift_id');
        $ticketNo = $this->input->post('ticketNo');
        if($gift_id && $ticketNo)
        {
            $gift = $this->common_model->get_gift_by_id($gift_id);
            if($gift)
            {	
				$ticketLimit = $this->common_model->get_prize_submited_tickets_by_id($gift_id);
				$ticketMaxLimit = $this->common_model->get_gift_by_id($gift_id);
				// if($ticketMaxLimit['gift_ticket_limit'] > count($ticketLimit))
				// {
					echo json_encode(array("status" => true ,  "type" => "success" , "message" => "Ticket ".$ticketNo." maped for ".$gift['gift_name'].".","imageURL"=>base_url().'uploads/products/'.$gift["gift_image"]));
				// }
				// else
				// {
					// echo json_encode(array("status" => false ,  "type" => "error" , "message" => "Sorry ,Failed to map Ticket to ".$gift['gift_name']." Jar Full !"));
				// }
                
            }
            else
            {
                echo json_encode(array("status" => false ,  "type" => "warning" , "message" => "Failed, To map Ticket to ".$gift['gift_name']."."));
            }
        }
        else
        {
            echo json_encode(array("status" => false ,  "type" => "error","message" => "Something Went Wrong!"));
        }
    }  
    public function submit_gift()
    {
		$submitArr = array();
		@$this->data['content'] = $this->user_panel_model->get_page_content();
        @$this->data['setting'] = $this->user_panel_model->get_site_setting();
        // var_dump($this->input->post());
        @$employee_id = $this->session->userdata['SESSION_EMPLOYEE_ID'];
        $gift_tickets = $this->input->post('gift_tickets');
        if(@$employee_id && $gift_tickets)
        {
			$submited_tickets = '';
			$unsubmited_tickets = '';
            foreach ($gift_tickets as $gift_ticket) {
                if($gift_ticket)
                {
                    // var_dump(explode("-", $gift_ticket));
                    $gift = explode("-", $gift_ticket);
					$ticketLimit = $this->common_model->get_prize_submited_tickets_by_id($gift[0]);
					$ticketMaxLimit = $this->common_model->get_gift_by_id($gift[0]);
					// if($ticketMaxLimit['gift_ticket_limit'] > count($ticketLimit))
					// {
						 $add = $this->db->query("INSERT INTO `jar` (`jar_employeeID`, `jar_gift_id`, `jar_ticketID`, `jar_ticket_number`, `jar_creation`) VALUES ('".$employee_id."', '".$gift[0]."', '".$gift[1]."', '".$gift[2]."', '".date("Y-m-d H:i:s A")."')");
						if($add)
						{
							array_push($submitArr,$ticketMaxLimit['gift_name']);
							// $submited_tickets .= '<strong>Ticket '.$gift[2].' is Submitted Successfuly.</strong><br>';
							
							 $this->db->query("UPDATE `tickets` SET `ticket_status` = '1' WHERE `tickets`.`TICKETID` = '".$gift[1]."';");
						}
					// }
					// else
					// {
						// $unsubmited_tickets .= '<b>Ticket '.$gift[2].' can not be Submitted Jar Full!</b><br>';
					// }
                }
                else
                {

                }
            }
			
			$sumsgArr = array_count_values($submitArr);
			foreach ($sumsgArr as $key => $value) {
			// echo "{$key} => {$value} <br>";
			$submited_tickets .= "<strong> {$value} tickets submitted for {$key} .</strong><br>";
			}
			
			$this->session->set_flashdata("submited_tickets",$submited_tickets);
			$this->session->set_flashdata("unsubmited_tickets",$unsubmited_tickets);
			
			if($this->db->affected_rows() > 0){

				$this->session->set_flashdata("ticket_submit_s","Thank You Your Ticket Has Submitted.");
				
			}else{

				$this->session->set_flashdata("ticket_submit_f","You don't Submitted any Ticket.");

			} 
			
			
            redirect(base_url().'submit-ticket');
        }
        else
        {
            redirect(base_url().'ticket-list');
        }
	}
    public function submit_ticket()
    {
		if (!empty($this->session->userdata['SESSION_EMPLOYEE_ID'])) 
		{
			$this->session->unset_userdata('SESSION_EMPLOYEE_ID');
			$this->session->unset_userdata('SESSION_EMPLOYEE_EMAIL');
		}
		@$this->data['content'] = $this->user_panel_model->get_page_content();
        @$this->data['setting'] = $this->user_panel_model->get_site_setting();
        @$employee_id = $this->session->userdata['SESSION_EMPLOYEE_ID'];
        $this->data['page'] = 'submit_ticket';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
    }
}
?>

