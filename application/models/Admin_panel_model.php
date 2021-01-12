<?php
class admin_panel_model extends CI_Model
{
	public function get_password()
    {        
        $query = $this->db->query("SELECT * FROM `administrators` ");
        $result = $query->result_array();
        return $result;                  
    }
    public function getcurrentpassword($userid)
    {
        $query = $this->db->where(['ADMINID' => $userid])
                                    ->get('administrators');
                                    if($query->num_rows() > 0){
                                        return $query->row();
                                    }
    }
    
    public function updatepassword($new_pass, $userid){
        
        $data = array(
            'password' => $new_pass
            
            );
            return $this->db->where('ADMINID',$userid)
                                    ->update('administrators', $data);
        
    }
    public function get_employees_tickets()
    {        
        $query = $this->db->query("SELECT t.*,e.*,(SELECT COUNT(TICKETID) FROM `tickets` WHERE ticket_employeeID = e.EMPLOYEEID) AS TotalTickes,(SELECT COUNT(TICKETID) FROM `tickets` WHERE ticket_employeeID = e.EMPLOYEEID AND ticket_status = 1) AS TotalUsedTickes,(SELECT COUNT(TICKETID) FROM `tickets` WHERE ticket_employeeID = e.EMPLOYEEID AND ticket_status = 0) AS TotalUnusedTickes FROM `tickets` AS t ,employees AS e WHERE t.ticket_employeeID = e.EMPLOYEEID GROUP BY e.EMPLOYEEID");
        $result = $query->result_array();
        return $result;                  
    }
	public function get_employee_used_tickets_by_jar($id)
    {        
        $query = $this->db->query("SELECT e.*,j.*,t.*,g.* FROM `employees` AS e,`jar` AS j,`tickets` AS t ,`gifts` AS g WHERE e.EMPLOYEEID = '".$id."' AND j.jar_employeeID = e.EMPLOYEEID AND t.ticket_employeeID = e.EMPLOYEEID AND t.TICKETID = j.jar_ticketID AND g.GIFTID = j.jar_gift_id");
        $result = $query->result_array();
        return $result;                  
    }
	public function get_employee_unused_tickets($id)
    {        
        $query = $this->db->query("SELECT * FROM `tickets` WHERE `ticket_employeeID` = '".$id."' AND `ticket_status` = 0");
        $result = $query->result_array();
        return $result;                  
    }
	public function get_prize_submited_tickets()
    {        
        $query = $this->db->query("SELECT e.*,j.*,t.*,g.* FROM `employees` AS e,`jar` AS j,`tickets` AS t ,`gifts` AS g WHERE j.jar_employeeID = e.EMPLOYEEID AND t.ticket_employeeID = e.EMPLOYEEID AND t.TICKETID = j.jar_ticketID AND g.GIFTID = j.jar_gift_id");
        $result = $query->result_array();
        return $result;                  
    }
	public function get_prize_dates()
    {        
        $query = $this->db->query("SELECT * FROM `gifts_dates`");
        $result = $query->result_array();
        return $result;                  
    }
	public function get_upcomming_prize_dates()
    {        
        $query = $this->db->query("SELECT * FROM `gifts_dates`WHERE gift_date_start > '".date('Y-m-d H:i:s')."'");
        $result = $query->result_array();
        return $result;                  
    }
	
    public function insert_employee($employeeArray)
    {        
        $query = $this->db->insert('employees',$employeeArray);
        if($query)
        {
            return true;  
        }
        else
        {
            return false;  
        }
                        
    }
    public function get_single_employee_by_id($id)
    {        
        $query = $this->db->query("SELECT * FROM `employees` WHERE EMPLOYEEID = '".$id."'");
        $result = $query->row_array();
        return $result;                  
    }
	public function get_single_prize_date($id)
    {        
        $query = $this->db->query("SELECT * FROM `gifts_dates` WHERE `GDID` = '".$id."'");
        $result = $query->row_array();
        return $result;                  
    }
	public function update_prize_date($id,$update_data)
    {           
        $this->db->where('GDID', $id);
        $this->db->update('gifts_dates', $update_data);
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        } 
    }
    public function update_employee($id,$update_data)
    {           
        $this->db->where('EMPLOYEEID', $id);
        $this->db->update('employees', $update_data);
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        } 
    }
    public function multigift_status_change($ids,$updateArray)
    {
        $this->db->where_in('GIFTID', $ids);
        $this->db->update('gifts' , $updateArray);
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        }
    }
    public function multiemployees_status_change($ids,$updateArray)
    {
        $this->db->where_in('EMPLOYEEID', $ids);
        $this->db->update('employees' , $updateArray);
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        }
    }
    public function delete_employee($id)
    {
        $this->db->where('EMPLOYEEID', $id);
        $this->db->delete('employees');
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        }
    }
    public function delete_gift($id)
    {
        $this->db->where('GIFTID', $id);
        $this->db->delete('gifts');
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        }
    }
	public function delete_ticket($id)
    {
        $this->db->where('TICKETID', $id);
        $this->db->delete('tickets');
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        }
    }
    public function multiple_delete_employees($ids)
    {
        $this->db->where_in('EMPLOYEEID', $ids);
        $this->db->delete('employees');
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        }
    }
	public function multiple_delete_employees_tickets($ids)
    {
        $this->db->where_in('ticket_employeeID', $ids);
        $this->db->delete('tickets');
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        }
    }
    public function multiple_delete_gifts($ids)
    {
        $this->db->where_in('GIFTID', $ids);
        $this->db->delete('gifts');
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        }
    }

    public function insert_gift($giftArray)
    {        
        $query = $this->db->insert('gifts',$giftArray);
        if($query)
        {
            return true;  
        }
        else
        {
            return false;  
        }
                        
    }
    public function get_single_gift_by_id($id)
    {        
        $query = $this->db->query("SELECT * FROM `gifts` WHERE `GIFTID` = '".$id."'");
        $result = $query->row_array();
        return $result;                  
    }
    public function update_gift($id,$update_data)
    {           
        $this->db->where('GIFTID', $id);
        $this->db->update('gifts', $update_data);
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        } 
    }
	public function get_jar_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM `jar` WHERE `JARID` = '".$id."'");
        $result = $query->row_array();
        return $result; 
	}
	public function get_jar_is_empty_or_not_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM `jar` WHERE `jar_gift_id` = '".$id."'");
        $result = $query->result_array();
        return $result; 
	}
	public function update_jar($ids,$updateArray)
    {
        $this->db->where('JARID', $ids);
        $this->db->update('jar' , $updateArray);
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        }
    }
	
    ############################################## Wepay End ####################################
    public function get_site_setting()
	{
		$this->db->select('*');
		$query = $this->db->get('site_settings');
			return $query->result_array();
	}
	public function get_content()
	{
		$this->db->select('*');
		$query = $this->db->get('content');
			return $query->result_array();
	}
	
	public function get_email_setting()
	{
		$this->db->select('*');
		$query = $this->db->get('email_settings');
			return $query->row_array();
	}
	
	 public function get_single_site_by_id($id)
	{
		$this->db->select('*');
		$this->db->where('SSID',$id);
		$query = $this->db->get('site_settings');
			return $query->row_array();
		
	} 
	
	public function get_single_content_by_id($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('content');
			return $query->row_array();
	}
	
	public function update_site_setting($id,$update_data)
	{
		$this->db->where('SSID', $id);
        $this->db->update('site_settings', $update_data);
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        } 
	}
	
	public function update_content($id,$update_data)
	{
		$this->db->where('id', $id);
        $this->db->update('content', $update_data);
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        } 
	}
	
	public function update_email_setting($id,$update_data)
	{
		$this->db->where('GSID', $id);
        $this->db->update('email_settings', $update_data);
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        } 
	}
	public function delete_gift_image_by_id($id)
    {
        $this->db->where('GIMGID', $id);
        $this->db->delete('gift_images');
        if($this->db->affected_rows() > 0){

            return true;

        }else{

            return false;

        }
    }
    
    
}
?>