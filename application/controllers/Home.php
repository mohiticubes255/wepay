<?php
class Home extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);

    $this->data['theme'] = 'user';
    $this->data['module'] = 'home';
    $this->data['title'] = 'Home';
    $this->load->model('user_panel_model');    
    $this->load->model('common_model');    
}
    public function index()
	{
        
        $this->data['page'] = 'index';
        @$this->data['products'] = $this->user_panel_model->get_upcomming_products(); 
		@$this->data['winners'] = $this->common_model->get_winner_employees();		
		@$this->data['content'] = $this->user_panel_model->get_page_content();
        @$this->data['setting'] = $this->user_panel_model->get_site_setting();
		
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
	} 
    public function giftDetails()
    {
		$gift_id = $this->input->post('gift_id');
		$this->data['gift'] = $gift = $this->common_model->get_gift_by_id($gift_id);
		$this->load->vars($this->data);
		if($gift)	
		{	
			$images = '';
			$images .= '<img src="'.base_url().'uploads/products/'.$gift['gift_image'].'">';
			$giftImgs = $this->common_model->get_gift_images_id($gift_id);
			foreach($giftImgs AS $img)
			{
				$images .= '<img src="'.base_url().'uploads/products/'.$img['gift_image'].'">';
			}
			echo json_encode(array("status"=>true,"gift"=>$gift,"images"=>$images));
		}
		else
		{
			echo json_encode(array("status"=>false));
		}
    }  
	public function giftopenTill()
    {
		$giftOpen = false;
		$gift1 = $this->user_panel_model->get_upcomming_product_date();
		if($gift1['gift_open_status'] == 1)
		{
			$giftOpen = true;
		}
		else
		{
			$giftOpen = false;
		}
		if($gift1)
		{
			// echo json_encode(array("status"=>true,"current"=>date('d M Y H:i:s'),"giftOpen"=>$giftOpen,"giftopenTill"=>date('d M Y H:i:s',strtotime($gift1['gift_close_date']))));
			echo json_encode(array("status"=>true,"current"=>date('d M Y H:i:s'),"giftOpen"=>$giftOpen,"giftopenTill"=>date('d M Y H:i:s',strtotime($gift1['gift_date_close']))));
		}
		else
		{
			echo json_encode(array("status"=>false));
		}
	}
	public function giftNextWinnerDate()
    {

		$gift = $this->user_panel_model->get_upcomming_winning_date();
		// var_dump($this->db->last_query());
		if($gift){
			// echo json_encode(array("status"=>true,"current"=>date('d M Y H:i:s'),"giftoWinnerAno"=>date('d M Y H:i:s',strtotime($gift['gift_winner_announce_date']))));
			echo json_encode(array("status"=>true,"current"=>date('d M Y H:i:s'),"giftoWinnerAno"=>date('d M Y H:i:s',strtotime($gift['gift_date_winner_announce']))));
		}else{
			echo json_encode(array("status"=>false));
		}
	}
}
?>

