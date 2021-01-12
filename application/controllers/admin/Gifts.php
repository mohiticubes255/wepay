<?php
class Gifts extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'admin';
    $this->data['module'] = 'gift';
    $this->load->model('admin_panel_model');    
    $this->load->model('common_model');    
}
    public function index()
	{         	
        $this->data['page'] = 'index';
        $this->data['gifts'] = $this->common_model->get_gifts();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
    
    public function add_gift()
    {           
        $this->data['page'] = 'add_gift';
		$this->data['dates'] = $this->admin_panel_model->get_upcomming_prize_dates();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
    }
    public function edit_gift()
    {           
        $gift_id = $this->uri->segment(3);
        $this->data['page'] = 'edit_gift';
        $this->data['gift'] = $this->admin_panel_model->get_single_gift_by_id($gift_id);  
        $this->data['images'] = $this->common_model->get_gift_images_id($gift_id);  
		$this->data['dates'] = $this->admin_panel_model->get_upcomming_prize_dates();
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
    }
    public function save_gift()
    {           
        $gift_image=isset($_FILES['gift_image']) && $_FILES["gift_image"]["error"] == 0;
        if($gift_image)
        {
            $file_name      =   $_FILES['gift_image']['name'];

            $file_type      =   $_FILES['gift_image']['type'];

            $tmp_name       =   $_FILES['gift_image']['tmp_name'];

            $error          =   $_FILES['gift_image']['error'];

            $file_size      =   $_FILES['gift_image']['size'];

            $file_ext       =   explode('.',$file_name);

            $ext            =   strtolower(end($file_ext));

            $giftimage_name        =   'gift-'.uniqid().'.'.$ext;

            $store='uploads/products/'.$giftimage_name;

            if(move_uploaded_file($tmp_name,$store))
            {
                $giftimg = $giftimage_name;
            }
            else
            {
                $giftimg = "";
            }
        }
        else
        {
          $giftimg = '';   
        } 

        $giftArray = array(
            'gift_name' => $this->input->post('gift_name'), 
            'gift_features' => $this->input->post('gift_features'), 
            'gift_ticket_limit' => $this->input->post('gift_ticket_limit'), 
            'dateID' => $this->input->post('date_id'), 
            'gift_image' => $giftimg, 
            // 'gift_open_date' => date('Y-m-d H:i:s', strtotime(DateTime::createFromFormat('d/m/Y H:i:s', $this->input->post('gift_open_date'))->format('Y-m-d H:i:s'))),
            // 'gift_close_date' => date('Y-m-d H:i:s', strtotime(DateTime::createFromFormat('d/m/Y H:i:s', $this->input->post('gift_close_date'))->format('Y-m-d H:i:s'))),
            // 'gift_winner_announce_date' => date('Y-m-d H:i:s', strtotime(DateTime::createFromFormat('d/m/Y H:i:s', $this->input->post('gift_winner_announce_date'))->format('Y-m-d H:i:s'))),
            'gift_create_date' => date("Y-m-d H:i:s") 
        );
        $addemployee = $this->admin_panel_model->insert_gift($giftArray);
        if($addemployee)
        {
			$giftid =$this->db->insert_id();
			// echo $giftid;
				$error=array();
				$extension=array("jpeg","jpg","png","gif");
				foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
					$file_name=$_FILES["files"]["name"][$key];
					$file_tmp=$_FILES["files"]["tmp_name"][$key];
					$ext=pathinfo($file_name,PATHINFO_EXTENSION);

					if(in_array($ext,$extension)) {
						// if(!file_exists("photo_gallery/".$txtGalleryName."/".$file_name)) {
							// move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/products/".$txtGalleryName."/".$file_name);
						// }
						// else 
						// {
							$filename=basename($file_name,$ext);
							// $newFileName=$filename.time().".".$ext;
							$newFileName='gift-'.$giftid.'-'.uniqid().'.'.$ext;
							if(move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/products/".$txtGalleryName."/".$newFileName))
							{
								$this->db->query("INSERT INTO `gift_images` (`gift_id`, `gift_image`) VALUES ('".$giftid."', '".$newFileName."')");
							}
						// }
					}
					else {
						array_push($error,"$file_name, ");
					}
				}
				
             $this->session->set_flashdata("add_gift_s","Prize added Successfully.");
        }
        else
        {
            $this->session->set_flashdata("add_gift_f","Failed to add Prize!");
        }
		// var_dump($error);
        
        redirect(base_url('admin/manage-gifts'));
    }

    public function update_gift()
    {           
        $gift_id = $this->input->post('gift_id');
        $gift_image=isset($_FILES['gift_image']) && $_FILES["gift_image"]["error"] == 0;
        if($gift_image)
        {
            $file_name      =   $_FILES['gift_image']['name'];

            $file_type      =   $_FILES['gift_image']['type'];

            $tmp_name       =   $_FILES['gift_image']['tmp_name'];

            $error          =   $_FILES['gift_image']['error'];

            $file_size      =   $_FILES['gift_image']['size'];

            $file_ext       =   explode('.',$file_name);

            $ext            =   strtolower(end($file_ext));

            $giftimage_name        =   'gift-'.uniqid().'.'.$ext;

            $store='uploads/products/'.$giftimage_name;

            if(move_uploaded_file($tmp_name,$store))
            {
                $giftimg = $giftimage_name;
            }
            else
            {
                $giftimg = "";
            }
        }
        else
        {
          $giftimg = $this->input->post('old_gift_image');   
        } 

        $giftArray = array(
            'gift_name' => $this->input->post('gift_name'), 
            'dateID' => $this->input->post('date_id'), 
            'gift_features' => $this->input->post('gift_features'), 
			'gift_ticket_limit' => $this->input->post('gift_ticket_limit'),
            'gift_image' => $giftimg, 
            // 'gift_open_date' => date('Y-m-d H:i:s', strtotime(DateTime::createFromFormat('d/m/Y H:i:s', $this->input->post('gift_open_date'))->format('Y-m-d H:i:s'))),
			// 'gift_close_date' => date('Y-m-d H:i:s', strtotime(DateTime::createFromFormat('d/m/Y H:i:s', $this->input->post('gift_close_date'))->format('Y-m-d H:i:s'))),
			// 'gift_winner_announce_date' => date('Y-m-d H:i:s', strtotime(DateTime::createFromFormat('d/m/Y H:i:s', $this->input->post('gift_winner_announce_date'))->format('Y-m-d H:i:s')))
        );
		$error=array();
		$extension=array("jpeg","jpg","png","gif");
		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
			$file_name=$_FILES["files"]["name"][$key];
			$file_tmp=$_FILES["files"]["tmp_name"][$key];
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);

			if(in_array($ext,$extension)) {
				// if(!file_exists("photo_gallery/".$txtGalleryName."/".$file_name)) {
					// move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/products/".$txtGalleryName."/".$file_name);
				// }
				// else 
				// {
					$filename=basename($file_name,$ext);
					// $newFileName=$filename.time().".".$ext;
					$newFileName='gift-'.$giftid.'-'.uniqid().'.'.$ext;
					if(move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"uploads/products/".$txtGalleryName."/".$newFileName))
					{
						$addimage = $this->db->query("INSERT INTO `gift_images` (`gift_id`, `gift_image`) VALUES ('".$gift_id."', '".$newFileName."')");
						if($addimage)
						{
							$update_data = true;
						}
					}
				// }
			}
			else {
				array_push($error,"$file_name, ");
			}
		}
				
        $update_gift = $this->admin_panel_model->update_gift($gift_id,$giftArray);
        if($update_gift)
        {
             $this->session->set_flashdata("update_gift_s","Prize update Successfully.");
        }
        else
        {
			if($update_data)
			{
				$this->session->set_flashdata("update_gift_s","Prize update Successfully.");
			}
			else
			{
				$this->session->set_flashdata("update_gift_f","Failed to update Prize!");
			}
        }
		
        // var_dump($this->db->last_query());
        redirect(base_url('admin/manage-gifts'));
    }
    public function delete_gift()
    {
        $giftid = $this->input->post('delete_gift_id');  
        $delete_gift = $this->admin_panel_model->delete_gift($giftid); 
        if($delete_gift)
        {
            $this->session->set_flashdata("delete_gift_s","Prize Deleted Successfully.");
        }
        else
        {
            $this->session->set_flashdata("delete_gift_f","Failed to Delete Prize!");
        }
        redirect(base_url('admin/manage-gifts'));
    }
    public function gift_status()
    {
       $gift_id = $this->input->post('gift_id');
       $status = $this->input->post('status');
         $arrayGift = array(
            'gift_status' => $status
        );
        $update_status = $this->admin_panel_model->update_gift($gift_id,$arrayGift);
        if($update_status)
        {
            if($status == 0)
            { 
                $set = '<a href="#" class="btn-success btn-sm btn-block text-center" id="gift-status-'.$gift_id.'">Active</a>';
            }
            else
            {
                $set = '<a href="#" class="btn-danger btn-sm btn-block text-center" id="gift-status-'.$gift_id.'">Inactive</a>';
            }
            echo json_encode(array('status' =>  true,'message'=>'Prize status change.','set' => $set));
        }
        else
        {
            echo json_encode(array('status' =>  false,'message'=>'Something went wrong!','set' => $set));
        }
    }
    public function multigift_status_change()
    {
        $ids =  $this->input->post('checkbox_value');
        $status = $this->input->post('status');
        $arrayGift = array(
            'gift_status' => $status
        );
        $update_status = $this->admin_panel_model->multigift_status_change($ids,$arrayGift);
        if($update_status)
        {
            echo json_encode(array('status' =>  true,'message'=>'Prize status update Successfully.'));
        }
        else
        {
            echo json_encode(array('status' =>  false,'message'=>'Failed to update Prize status!'));
        }
    }
    public function multigift_delete()
    {
        $ids =  $this->input->post('checkbox_value');
        $delete_gifts = $this->admin_panel_model->multiple_delete_gifts($ids);
        if($delete_gifts)
        {
            echo json_encode(array('status' =>  true,'message'=>'Prizes Deleted Successfully.'));
        }
        else
        {
            echo json_encode(array('status' =>  false,'message'=>'Failed to Delete Prizes!'));
        }
    }
	public function delete_gift_image()
    {
        $imageid = $this->input->post('image_id');  
        $delete_gift_image = $this->admin_panel_model->delete_gift_image_by_id($imageid); 
        if($delete_gift_image)
        {
			echo json_encode(array('status' =>  true,'message'=>'Prizes Deleted Successfully.'));
        }
        else
        {
			 echo json_encode(array('status' =>  false,'message'=>'Failed to Delete Image!'));
        }
    }
	public function check_gift_empty_stuts()
    {
        $giftid = $this->input->post('giftid');  
        $jar = $this->admin_panel_model->get_jar_is_empty_or_not_by_id($giftid);
		if($jar)
		{
			echo json_encode(array('status' => true,'message'=>'Jar is not empty!'));
		}
		else
		{
			echo json_encode(array('status' => false,'message'=>'Jar is empty!'));
		}
	}
}

?>
