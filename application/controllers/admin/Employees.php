<?php
class Employees extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'admin';
    $this->data['module'] = 'employee';
    $this->load->model('admin_panel_model');    
    $this->load->model('common_model');    
}
    public function index()
	{         	
        $this->data['page'] = 'index';
        $this->data['employees'] = $this->common_model->get_employees();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
    
    public function add_employee()
    {           
        $this->data['page'] = 'add_employee';
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
    }
    public function edit_employee()
    {           
        $employee_id = $this->uri->segment(3);
        $this->data['page'] = 'edit_employee';
        $this->data['employee'] = $this->admin_panel_model->get_single_employee_by_id($employee_id);  
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
    }
    public function save_employee()
    {           
        // $member_photo=isset($_FILES['member_photo']) && $_FILES["member_photo"]["error"] == 0;
        // if($member_photo)
        // {
        //     $file_name      =   $_FILES['member_photo']['name'];

        //     $file_type      =   $_FILES['member_photo']['type'];

        //     $tmp_name       =   $_FILES['member_photo']['tmp_name'];

        //     $error          =   $_FILES['member_photo']['error'];

        //     $file_size      =   $_FILES['member_photo']['size'];

        //     $file_ext       =   explode('.',$file_name);

        //     $ext            =   strtolower(end($file_ext));

        //     $memberimg_name        =   'member-'.uniqid().'.'.$ext;

        //     $store='uploads/members/'.$memberimg_name;

        //     if(move_uploaded_file($tmp_name,$store))
        //     {
        //         $memberimg = $memberimg_name;
        //     }
        //     else
        //     {
        //         $memberimg = "";
        //     }
        // }
        // else
        // {
        //   $memberimg = '';   
        // } 

        $employeeArray = array(
            'employee_fullname' => $this->input->post('employee_fullname'), 
            'employee_email' => $this->input->post('employee_email'), 
            // 'member_photo' => $memberimg, 
            'employee_join_date' => date('Y-m-d',strtotime($this->input->post('employee_join_date'))),
            'employee_create_date' => date("Y-m-d h:i:s") 
        );
        $addemployee = $this->admin_panel_model->insert_employee($employeeArray);
        if($addemployee)
        {
             $this->session->set_flashdata("add_employee_s","Employee added Successfully.");
        }
        else
        {
            $this->session->set_flashdata("add_employee_f","Failed to add Employee,Employee Email Already Exist!");
        }
        
             redirect(base_url('admin/manage-employees'));
    }

    public function update_member()
    {           
        $employee_id = $this->input->post('employee_id');
        // $member_photo=isset($_FILES['member_photo']) && $_FILES["member_photo"]["error"] == 0;
        // if($member_photo)
        // {
        //     $file_name      =   $_FILES['member_photo']['name'];

        //     $file_type      =   $_FILES['member_photo']['type'];

        //     $tmp_name       =   $_FILES['member_photo']['tmp_name'];

        //     $error          =   $_FILES['member_photo']['error'];

        //     $file_size      =   $_FILES['member_photo']['size'];

        //     $file_ext       =   explode('.',$file_name);

        //     $ext            =   strtolower(end($file_ext));

        //     $memberimg_name        =   'member-'.uniqid().'.'.$ext;

        //     $store='uploads/members/'.$memberimg_name;

        //     if(move_uploaded_file($tmp_name,$store))
        //     {
        //         $memberimg = $memberimg_name;
        //     }
        //     else
        //     {
        //         $memberimg = "";
        //     }
        // }
        // else
        // {
        //   $memberimg = $this->input->post('member_old_photo');   
        // } 

        $employeeArray = array(
            'employee_fullname' => $this->input->post('employee_fullname'), 
            'employee_email' => $this->input->post('employee_email'), 
            'employee_join_date' => date('Y-m-d',strtotime($this->input->post('employee_join_date')))
        );
        $update_employee = $this->admin_panel_model->update_employee($employee_id,$employeeArray);
        if($update_employee)
        {
             $this->session->set_flashdata("update_employee_s","Employee updated Successfully.");
        }
        else
        {
            $this->session->set_flashdata("update_employee_f","Failed to update Employee ,Nothing to change OR Email Already Exist!");
        }
        redirect(base_url('admin/manage-employees'));
    }
    public function delete_employee()
    {
        $employeeid = $this->input->post('delete_employee_id');  
        $delete_employee = $this->admin_panel_model->delete_employee($employeeid); 
        if($delete_employee)
        {
			$this->db->query("DELETE FROM `tickets` WHERE `ticket_employeeID` = '".$employeeid."'");
			$this->db->query("DELETE FROM `jar` WHERE `jar_employeeID` = '".$employeeid."'");
            $this->session->set_flashdata("delete_employee_s","Employee Deleted Successfully.");
        }
        else
        {
            $this->session->set_flashdata("delete_employee_f","Failed to Delete Employee!");
        }
        redirect(base_url('admin/manage-employees'));
    }
    public function employee_status()
    {
       $employee_id = $this->input->post('employee_id');
       $status = $this->input->post('status');
         $arrayEmployee = array(
            'employee_status' => $status
        );
        $update_status = $this->admin_panel_model->update_employee($employee_id,$arrayEmployee);
        if($update_status)
        {
            if($status == 0)
            { 
                $set = '<a href="#" class="btn-success btn-sm btn-block text-center" id="employee-status-'.$employee_id.'">Active</a>';
            }
            else
            {
                $set = '<a href="#" class="btn-danger btn-sm btn-block text-center" id="employee-status-'.$employee_id.'">Inactive</a>';
            }
            echo json_encode(array('status' =>  true,'message'=>'Employee status change.','set' => $set));
        }
        else
        {
            echo json_encode(array('status' =>  false,'message'=>'Something went wrong!','set' => $set));
        }
    }
    public function multiemployees_status_change()
    {
        $ids =  $this->input->post('checkbox_value');
        $status = $this->input->post('status');
        $arrayMember = array(
            'employee_status' => $status
        );
        $update_status = $this->admin_panel_model->multiemployees_status_change($ids,$arrayMember);
        if($update_status)
        {
            echo json_encode(array('status' =>  true,'message'=>'Employees status update Successfully.'));
        }
        else
        {
            echo json_encode(array('status' =>  false,'message'=>'Failed to update Employees status!'));
        }
    }
    public function multiemployees_delete()
    {
        $ids =  $this->input->post('checkbox_value');
        $delete_employees = $this->admin_panel_model->multiple_delete_employees($ids);
        if($delete_employees)
        {
			$this->admin_panel_model->multiple_delete_employees_tickets($ids);
            echo json_encode(array('status' =>  true,'message'=>'Employees Deleted Successfully.'));
        }
        else
        {
            echo json_encode(array('status' =>  false,'message'=>'Failed to Delete Employees!'));
        }
    }
	public function addBulkEmployees()
    {
		ini_set('error_reporting', E_ALL);
		ini_set('display_errors', true);

		require_once __DIR__.'/src/SimpleXLSX.php';

		if (isset($_FILES['file'])) {
			
			if ( $xlsx = SimpleXLSX::parse( $_FILES['file']['tmp_name'] ) ) {

				echo '<h2>List of employees</h2>';
				echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';

				$dim = $xlsx->dimension();
				$cols = $dim[0];

				foreach ( $xlsx->rows() as $k => $r ) {
					
					// if ($k == 0) continue; // skip first row
					if ($k != 0)
					{
						$add = $this->db->query("INSERT INTO `employees` (`employee_fullname`, `employee_email`, `employee_otp`, `employee_join_date`, `employee_create_date`) VALUES ('".$r[0]."', '".$r[1]."', '', '".$r[2]."', '".date("Y-m-d H:i:s A")."')");
					}
					else
					{
						$add = true;
					}
					if($add)
					{
						echo '<tr>';
						for ( $i = 0; $i < $cols; $i ++ ) {
							echo '<td>' . ( isset( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' ) . '</td>';
						}
						echo '</tr>';
					}
				}
				echo '</table>';
			} else {
				echo SimpleXLSX::parseError();
			}
			if($this->db->affected_rows() > 0){

				$this->session->set_flashdata("bulk_add_s","Employees added successfully! By Checking Existing Employees.");

			}else{

				$this->session->set_flashdata("bulk_add_f","Failed to add employees ,Try Again!.");

			} 
		}
		else
		{
			$this->session->set_flashdata("bulk_add_f","Failed to add employees!");
		}
		redirect(base_url().'admin/manage-employees');
	}
}

?>
