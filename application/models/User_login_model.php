<?php 

class User_login_model extends CI_Model

{

    public function is_valid_login($email)

   {

        $this->db->select('*');

        $this->db->from('employees');

        $this->db->where('employee_email', $email);

        $result = $this->db->get()->row_array();     

        return $result;    

    }    

    public function update_employee($email,$update_data){

        return $this->db->where('employee_email',$email)->update('employees', $update_data);
    }            

}

?>