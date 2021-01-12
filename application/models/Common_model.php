<?php
class Common_model extends CI_Model
{
	public function get_winner_employees()
    {       
        // $query = $this->db->query("SELECT j.*,COUNT(j.jar_employeeID) AS TicketOFEmployee,e.*,g.* FROM jar AS j,gifts AS g,employees AS e WHERE j.jar_employeeID = e.EMPLOYEEID AND g.GIFTID = j.jar_gift_id AND g.gift_close_date <= '".date('Y-m-d')."' GROUP BY j.jar_employeeID,j.jar_gift_id ORDER BY `TicketOFEmployee` DESC");
        // $query = $this->db->query("SELECT j.*,COUNT(j.jar_employeeID) AS TicketOFEmployee,e.*,g.* FROM jar AS j,gifts AS g,employees AS e WHERE j.jar_employeeID = e.EMPLOYEEID AND g.GIFTID = j.jar_gift_id AND g.	gift_winner_announce_date <= '".date('Y-m-d H:i:s')."' GROUP BY j.jar_employeeID,j.jar_gift_id ORDER BY `TicketOFEmployee` DESC");
        // $query = $this->db->query("SELECT j.*,ee.*,g.*,gd.* FROM jar AS j ,employees AS ee,gifts AS g,gifts_dates AS gd WHERE jar_employeeID = ee.EMPLOYEEID AND j.jar_gift_id = g.GIFTID AND g.dateID = gd.GDID AND gd.gift_date_winner_announce <= '2020-11-12 16:10:58' AND g.GIFTID = 1 ORDER BY RAND() LIMIT 1");
        
		$announces = $this->db->query("SELECT j.*,e.*,g.*,gd.* FROM jar AS j,gifts AS g,employees AS e,gifts_dates AS gd WHERE g.dateID = gd.GDID AND j.jar_employeeID = e.EMPLOYEEID AND g.GIFTID = j.jar_gift_id AND gd.gift_date_winner_announce <= '".date('Y-m-d H:i:s')."' GROUP BY g.GIFTID")->result_array();
		if($announces)
		{
			foreach($announces AS $announce)
			{
				$ticket = $this->db->query("SELECT j.*,ee.*,g.*,gd.* FROM jar AS j ,employees AS ee,gifts AS g,gifts_dates AS gd WHERE jar_employeeID = ee.EMPLOYEEID AND j.jar_gift_id = g.GIFTID AND g.dateID = gd.GDID AND gd.gift_date_winner_announce <= '".date('Y-m-d H:i:s')."' AND g.GIFTID = '".$announce['GIFTID']."' ORDER BY RAND() LIMIT 1")->row_array();
				if($ticket)
				{
					$winnerAnnounced = $this->db->query("SELECT * FROM `winners` WHERE `winner_giftID` = '".$ticket['jar_gift_id']."'")->row_array();
					if(!$winnerAnnounced)
					{
						$winnerArray = array(
						'winner_giftID' => $ticket['jar_gift_id'],
						'winner_employeeID' => $ticket['jar_employeeID'],
						'winner_ticketID' => $ticket['jar_ticketID'],
						'winner_creation' => date('Y-m-d H:i:s')
						);
						$setwinner = $this->db->insert('winners',$winnerArray);
					}
				}
					
			}
		}
		
		// $query = $this->db->query("SELECT j.*,COUNT(j.jar_employeeID) AS TicketOFEmployee,e.*,g.*,gd.* FROM jar AS j,gifts AS g,employees AS e,gifts_dates AS gd WHERE g.dateID = gd.GDID AND j.jar_employeeID = e.EMPLOYEEID AND g.GIFTID = j.jar_gift_id AND gd.gift_date_winner_announce <= '".date('Y-m-d H:i:s')."' GROUP BY j.jar_employeeID,j.jar_gift_id ORDER BY `TicketOFEmployee` DESC");
		$query = $this->db->query("SELECT w.*,g.*,t.*,ee.* FROM winners AS w,gifts AS g,tickets AS t,employees AS ee WHERE w.winner_giftID = g.GIFTID AND w.winner_employeeID = ee.EMPLOYEEID AND w.winner_ticketID = t.TICKETID AND t.ticket_employeeID = ee.EMPLOYEEID");
        $result = $query->result_array();
        return $result;                  
    }
	public function get_upcomming_products()
    {        
        // $query = $this->db->query("SELECT g.*,(SELECT COUNT(JARID) FROM jar WHERE jar_gift_id = g.GIFTID) AS TotalTickets FROM `gifts` AS g WHERE g.gift_open_date = '".date('Y-m-d H:i:s')."' AND g.gift_status = 0");
        $query = $this->db->query("SELECT g.*,gd.*,(SELECT COUNT(JARID) FROM jar WHERE jar_gift_id = g.GIFTID) AS TotalTickets FROM `gifts` AS g ,gifts_dates AS gd WHERE g.dateID = gd.GDID AND gd.gift_date_start = '".date('Y-m-d H:i:s')."' AND g.gift_status = 0");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_employee_tickets_by_id($id)
    {       
        $query = $this->db->query("SELECT e.*,t.* FROM `tickets` AS t,`employees` AS e WHERE e.EMPLOYEEID = '".$id."' AND t.ticket_employeeID = e.EMPLOYEEID AND t.ticket_status = 0");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_employees()
    {        
        $query = $this->db->query("SELECT * FROM `employees`");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_gifts()
    {        
        $query = $this->db->query("SELECT g.*,gd.* FROM `gifts` AS g ,`gifts_dates` AS gd WHERE g.dateID = gd.GDID");
        $result = $query->result_array();
        return $result;                  
    }
	public function get_closed_gifts()
    {        
        $query = $this->db->query("SELECT * FROM `gifts` WHERE gift_status = 1");
        $result = $query->result_array();
        return $result;                  
    }
	public function get_not_closed_gifts()
    {        
        $query = $this->db->query("SELECT * FROM `gifts` WHERE gift_status = 0");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_tickets()
    {        
        $query = $this->db->query("SELECT * FROM `tickets`");
        $result = $query->result_array();
        return $result;                  
    }
	public function get_unused_tickets()
    {        
        $query = $this->db->query("SELECT * FROM `tickets` WHERE ticket_status = 0");
        $result = $query->result_array();
        return $result;                  
    }
    public function get_email_settings()
    {        
        $query = $this->db->query("SELECT * FROM `email_settings`");
        $result = $query->row_array();
        return $result;                  
    }
    public function get_site_settings()
    {        
        $query = $this->db->query("SELECT * FROM `site_settings`");
        $result = $query->row_array();
        return $result;                  
    }
    public function get_gift_by_id($id)
    {        
        $query = $this->db->query("SELECT * FROM `gifts` WHERE `GIFTID` = '".$id."' AND `gift_status` = 0");
        $result = $query->row_array();
        return $result;                  
    }
	public function get_gift_images_id($id)
    {        
        $query = $this->db->query("SELECT * FROM `gift_images` WHERE gift_id = '".$id."' AND gift_image_status = 0");
        $result = $query->result_array();
        return $result;                  
    }
	public function get_prize_submited_tickets_by_id($id)
    {        
        $query = $this->db->query("SELECT e.*,j.*,t.*,g.* FROM `employees` AS e,`jar` AS j,`tickets` AS t ,`gifts` AS g WHERE j.jar_gift_id = '".$id."' AND j.jar_employeeID = e.EMPLOYEEID AND t.ticket_employeeID = e.EMPLOYEEID AND t.TICKETID = j.jar_ticketID AND g.GIFTID = j.jar_gift_id");
        $result = $query->result_array();
        return $result;                  
    }
}
?>