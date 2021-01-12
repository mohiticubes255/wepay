<?php
class User_panel_model extends CI_Model
{
    public function get_open_products()
    {      
		// @$this->db->query("UPDATE `gifts` SET `gift_open_status` = '1' WHERE `gift_open_date` <= '".date('Y-m-d H:i:s')."'");
		// @$this->db->query("UPDATE `gifts` SET `gift_open_status` = '0' WHERE `gift_close_date` <= '".date('Y-m-d H:i:s')."'");
		
		
		$openGifts = $this->db->query("SELECT * FROM `gifts_dates` WHERE `gift_date_start` < '".date('Y-m-d H:i:s')."' ORDER BY `GDID` ASC")->result_array();
		if($openGifts)
		{
			foreach($openGifts AS $openGift)
			{
				@$this->db->query("UPDATE `gifts` SET `gift_open_status` = '1' WHERE `dateID` = '".$openGift['GDID']."'");
			}
		}
		
		$closedGifts = $this->db->query("SELECT * FROM `gifts_dates` WHERE `gift_date_close` < '".date('Y-m-d H:i:s')."' ORDER BY `GDID` ASC")->result_array();
		if($closedGifts)
		{
			foreach($closedGifts AS $closedGift)
			{
				@$this->db->query("UPDATE `gifts` SET `gift_open_status` = '0' WHERE `dateID` = '".$closedGift['GDID']."'");
			}
		}
		
        $query = $this->db->query("SELECT g.*,(SELECT COUNT(JARID) FROM jar WHERE jar_gift_id = g.GIFTID) AS TotalTickets FROM `gifts` AS g WHERE g.gift_open_status = 1 AND g.gift_status = 0");
        $result = $query->result_array();
        return $result;                  
    }
	public function get_upcomming_products()
    {      
		// @$this->db->query("UPDATE `gifts` SET `gift_open_status` = '1' WHERE `gift_open_date` <= '".date('Y-m-d H:i:s')."'");
		// @$this->db->query("UPDATE `gifts` SET `gift_open_status` = '0' WHERE `gift_close_date` <= '".date('Y-m-d H:i:s')."'");
        // $query = $this->db->query("SELECT g.*,(SELECT COUNT(JARID) FROM jar WHERE jar_gift_id = g.GIFTID) AS TotalTickets FROM `gifts` AS g WHERE g.gift_open_date >= '".date('Y-m-d H:i:s')."' AND g.gift_status = 0");
        $openGifts = $this->db->query("SELECT * FROM `gifts_dates` WHERE `gift_date_start` > '".date('Y-m-d H:i:s')."' ORDER BY `GDID` ASC")->result_array();
		// var_dump($openGifts);
		// var_dump($this->db->last_query());
		if($openGifts)
		{
			foreach($openGifts AS $openGift)
			{
				@$this->db->query("UPDATE `gifts` SET `gift_open_status` = '1' WHERE `dateID` = '".$openGift['GDID']."'");
			}
		}
		
		$closedGifts = $this->db->query("SELECT * FROM `gifts_dates` WHERE `gift_date_close` < '".date('Y-m-d H:i:s')."' ORDER BY `GDID` ASC")->result_array();
		if($closedGifts)
		{
			foreach($closedGifts AS $closedGift)
			{
				@$this->db->query("UPDATE `gifts` SET `gift_open_status` = '0' WHERE `dateID` = '".$closedGift['GDID']."'");
			}
		}
		$query = $this->db->query("SELECT g.*,(SELECT COUNT(JARID) FROM jar WHERE jar_gift_id = g.GIFTID) AS TotalTickets FROM `gifts` AS g WHERE (g.gift_open_date >= '".date('Y-m-d H:i:s')."' OR g.gift_open_status = 1) AND g.gift_status = 0");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_employee_tickets_by_id($id)
    {       
        $query = $this->db->query("SELECT e.*,t.* FROM `tickets` AS t,`employees` AS e WHERE e.EMPLOYEEID = '".$id."' AND t.ticket_employeeID = e.EMPLOYEEID AND t.ticket_status = 0");
        $result = $query->result_array();
        return $result;                  
    }
	public function get_employee_submited_tickets_by_id($id)
    {       
        $query = $this->db->query("SELECT e.*,t.*,j.*,g.* FROM `tickets` AS t,`employees` AS e,`jar` AS j,`gifts` AS g WHERE e.EMPLOYEEID = '".$id."' AND t.ticket_employeeID = e.EMPLOYEEID AND t.ticket_status = 1 AND j.jar_ticketID = t.TICKETID AND t.ticket_number = j.jar_ticket_number AND e.EMPLOYEEID = t.ticket_employeeID AND j.jar_employeeID = e.EMPLOYEEID AND g.GIFTID = j.jar_gift_id");
        $result = $query->result_array();
        return $result;                  
    }
	public function get_page_content()
	{
		$this->db->select('*');
		$query = $this->db->get('content');
			return $query->row_array();
	}
	
	public function get_site_setting()
	{
		$this->db->select('*');
		$query = $this->db->get('site_settings');
			return $query->row_array();
	}
	 public function get_upcomming_product_date()
    {        
        // $query = $this->db->query("SELECT * FROM `gifts` WHERE gift_close_date > '".date('Y-m-d H:i:s')."' AND gift_status = 0 ORDER BY `gift_close_date` DESC LIMIT 1");
        $query = $this->db->query("SELECT g.*,gd.* FROM `gifts` AS g ,gifts_dates AS gd WHERE gd.gift_date_close > '".date('Y-m-d H:i:s')."' AND g.gift_status = 0 ORDER BY gd.`gift_date_close` DESC LIMIT 1");
        $result = $query->row_array();
        return $result;                  
    }
	public function get_upcomming_winning_date()
    {        
        // $query = $this->db->query("SELECT * FROM `gifts` WHERE gift_winner_announce_date > '".date('Y-m-d H:i:s')."' AND gift_status = 0 ORDER BY `gift_close_date` ASC LIMIT 1");
        $query = $this->db->query("SELECT g.*,gd.* FROM `gifts` AS g ,gifts_dates AS gd WHERE gd.gift_date_winner_announce > '".date('Y-m-d H:i:s')."' AND g.gift_status = 0 ORDER BY gd.`gift_date_close` ASC LIMIT 1");
        $result = $query->row_array();
        return $result;                  
    }
}
?>