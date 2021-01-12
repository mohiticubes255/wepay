<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller

{

	function __construct()

	{

		parent::__construct();

		error_reporting(0);

		$this->load->helper('cookie');

		$this->data['theme'] = 'admin';

		/* $this->data['module'] = 'admin'; */


	}

	public function index()

	{

		if($this->input->cookie('email') && $this->input->cookie('pass'))

		{

			if(!$this->session->userdata('ADMINID'))

			{

				$this->data['title'] = "Login";

				$this->data['body'] = "login";

				$email=$this->input->cookie('email');

				$pass=$this->input->cookie('pass');

				$this->data['email']=$email;

				$this->data['pass']=$pass;

				$this->load->vars($this->data);

				$this->load->view($this->data['theme'].'/pages/login');

			}

			else

			{

				redirect('admin/admin/dashboard');

			}

		}

		else

		{

			if(!$this->session->userdata('ADMINID'))

			{

				$this->data['title'] = "Login";

				$this->data['body'] = "login";

				$email=delete_cookie('email');

				$pass=delete_cookie('pass');

				$this->data['email']=$email;

				$this->data['pass']=$pass;

				$this->load->vars($this->data);

				$this->load->view($this->data['theme'].'/pages/login');

			}

			else

			{

				redirect('admin/dashboard');

			}

			

		}

    }

	
	

}

?>