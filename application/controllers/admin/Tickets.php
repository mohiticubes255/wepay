<?php
class Tickets extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'admin';
    $this->data['module'] = 'ticket';
    $this->load->model('admin_panel_model');    
    $this->load->model('common_model');    
}
    public function index()
	{         	
        $this->data['page'] = 'index';
        $this->data['employees'] = $this->common_model->get_employees();
        $this->data['tickets'] = $this->admin_panel_model->get_employees_tickets();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
	public function edit_tickets()
	{         	
		$employee_id = $this->uri->segment(3);
        $this->data['page'] = 'edit_tickets';
        $this->data['gifts'] = $this->common_model->get_not_closed_gifts();
        $this->data['usedtickets'] = $this->admin_panel_model->get_employee_used_tickets_by_jar($employee_id);
        $this->data['unusedtickets'] = $this->admin_panel_model->get_employee_unused_tickets($employee_id);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
	public function edit_unused_tickets()
	{         	
		$employee_id = $this->uri->segment(3);
        $this->data['page'] = 'unuserTickets';
        $this->data['unusedtickets'] = $this->admin_panel_model->get_employee_unused_tickets($employee_id);
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
	public function changeJar()
	{         	
		$jar_id = $this->input->post('jar_id');
		$gift_id = $this->input->post('gift_id');
		$ticket_id = $this->input->post('ticket_id');
		$ticket_no = $this->input->post('ticket_no');
		$gift = $this->common_model->get_gift_by_id($gift_id);
		$jar = $this->admin_panel_model->get_jar_by_id($jar_id);
		if($gift_id && $ticket_id && $ticket_no && $gift && $jar)
		{
			$image = base_url().'uploads/products/'.$gift['gift_image'];
			$jarArray = array('jar_gift_id'=>$gift_id);
			$update_jar = $this->admin_panel_model->update_jar($jar_id,$jarArray);
			if($update_jar)
			{
				echo json_encode(array('status' =>  true,'message'=>'Jar Changed Successfully.','type'=>'success','imageURL'=>$image));
			}
			else
			{
				echo json_encode(array('status' =>  true,'message'=>'Jar Changed Successfully.','type'=>'warning'));
			}		
		}
		else
		{
			echo json_encode(array('status' =>  false,'message'=>'Something Went Wrong','type'=>'error'));
		}
	}
    public function addtickets()
    {
        $employeeId = $this->input->post('employeeId');
        $tickets = $this->input->post('tickets');
        if($employeeId && $tickets)
        {
            for ($i=0; $i < $tickets; $i++) { 
                $this->db->query("INSERT INTO `tickets` (`ticket_number`, `ticket_employeeID`) VALUES ('".time().$i."', '".$employeeId."')");
            }
            if($this->db->affected_rows() > 0)
            {
                 echo json_encode(array('status' =>  true,'message'=>'Tickets Added Successfully.'));
            }
            else
            {
                echo json_encode(array('status' =>  false,'message'=>'Failed to Add Tickets!'));
            }
        }
        else
        {
            echo json_encode(array('status' =>  false,'message'=>'Failed to Add Tickets!'));
        }
    }  
	
	public function delete_ticket()
    {
        $ticket_id = $this->input->post('delete_unusedticket_id');  
        $delete_ticket = $this->admin_panel_model->delete_ticket($ticket_id); 
        if($delete_ticket)
        {
            $this->session->set_flashdata("delete_ticket_s","Ticket Deleted Successfully.");
        }
        else
        {
            $this->session->set_flashdata("delete_ticket_f","Failed to Delete Ticket!");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
    
}

?>
