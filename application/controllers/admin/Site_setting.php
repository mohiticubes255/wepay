<?php
class Site_setting extends CI_Controller{
    public function __construct(){    
    parent::__construct();
    error_reporting(0);
    $this->data['theme'] = 'admin';
    $this->data['module'] = 'site_setting';
    $this->load->model('admin_panel_model');    
    $this->load->model('common_model');    
}
    public function index()
	{         	
        $this->data['page'] = 'index';
        $this->data['site'] = $this->admin_panel_model->get_site_setting();
        /*var_dump($this->data['site']);
		exit; */
		$this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
	}
    
    
    public function edit_setting($id)
    {           
        //$employee_id = $this->uri->segment(4);
        $this->data['page'] = 'edit_sitting';
        $this->data['site'] = $this->admin_panel_model->get_single_site_by_id($id);  
        $this->load->vars($this->data);
        $this->load->view($this->data['theme'].'/template');
      
    }
    

    public function update_setting()
    {           
         $site_id = $this->input->post('site_id');
        $site_image=isset($_FILES['site_image']) && $_FILES["site_image"]["error"] == 0;
        if($site_image)
        {
            $file_name      =   $_FILES['site_image']['name'];

            $file_type      =   $_FILES['site_image']['type'];

            $tmp_name       =   $_FILES['site_image']['tmp_name'];

            $error          =   $_FILES['site_image']['error'];

            $file_size      =   $_FILES['site_image']['size'];

            $file_ext       =   explode('.',$file_name);

            $ext            =   strtolower(end($file_ext));

            $siteimage_name        =   'site-'.uniqid().'.'.$ext;

            $store='assets/images/'.$siteimage_name;

            if(move_uploaded_file($tmp_name,$store))
            {
                $siteimg = $siteimage_name;
            }
            else
            {
                $siteimg = "";
            }
        }
        else
        {
          $siteimg = $this->input->post('old_site_image');   
        } 

        $siteArray = array(
            'site_name' => $this->input->post('site_name'), 
            'site_address' => $this->input->post('site_address'), 
            'site_mail' => $this->input->post('site_mail'), 
            'site_contact' => $this->input->post('site_contact'), 
            'site_logo' => $siteimg, 
           
        );
        $update_site = $this->admin_panel_model->update_site_setting($site_id,$siteArray);
        if($update_site)
        {
             $this->session->set_flashdata("update_site_s","Site Setting update Successfully.");
        }
        else
        {
            $this->session->set_flashdata("update_site_f","Failed to update Site Setting!");
        }
        // var_dump($this->db->last_query());
        redirect(base_url('admin/Site_setting'));
    }
    
    
    
    
}

?>
