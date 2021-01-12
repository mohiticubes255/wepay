<?php

if (isset($this->session->userdata['ADMINID'])) {      	
	
	$this->load->view($theme . '/includes/header');
    $this->load->view($theme . '/modules/' . $module . '/' . $page);
    $this->load->view($theme . '/includes/footer');


} else {     

 
   $this->load->view($theme . '/pages/login');

}

?>