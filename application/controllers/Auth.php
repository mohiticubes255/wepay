<?php ob_start(); 

class Auth extends CI_Controller{

    public function __construct(){    

    parent::__construct();

    error_reporting(0);

    $this->data['theme'] = 'user';

    $this->data['module'] = 'auth';

    $this->load->library('encrypt');

    $this->load->library('paypal_lib');

    $this->load->model('user_login_model');    

    $this->load->model('user_panel_model'); 

    $this->load->model('common_model'); 

    $this->load->library('form_validation');
    
    $this->load->library('email');

    $site_settings = $this->common_model->get_site_settings();
    $email_details = $this->common_model->get_email_settings();
    $config['smtp_host']        = $email_details['smtp_host'];
    $config['smtp_user']        = $email_details['smtp_user'];
    $config['smtp_pass']        = $email_details['smtp_pass'];
    $config['smtp_port']        = $email_details['smtp_port'];
    $config['smtp_crypto']      = $email_details['smtp_crypto'];   
    $config['charset']          = $email_details['charset'];   

         $config['smtp_conn_options'] = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
        $this->email->initialize($config);

        $this->email_address=$email_details['smtp_user'];

        $this->send_from=$email_details['send_from'];

        $this->email_tittle=$site_settings['site_name'];

        $this->logo_front=base_url().'assets/images/logo1.png';

        $this->site_name =$site_settings['site_name'];

        $this->base_domain = base_url();
}
    public function mail()
    {
        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_crypto']      = 'ssl';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'mohit.chack@icubeswire.com';
        $config['smtp_pass']    = '********';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);


        $this->email->from('mohit.chack@icubeswire.com', 'Skanray');
        $this->email->to('mohit.chack@icubeswire.com'); 

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');  

        $this->email->send();

        echo $this->email->print_debugger();
    }
    public function encode_decode()
    {
        $this->load->library('encrypt');
        $encode =   $this->encrypt->encode('mohit');
        $decode = $this->encrypt->decode($encode);
        echo $encode;
        echo "</br>";
        echo $decode;    
    }
    function testencrypting()
    {
      $str = '12345';
      $key = 'my-secret-key';
      $encrypted = $this->encrypt->encode($str, $key);
      echo $encrypted;
      // echo $this->encrypt->decode($encrypted, $key);
      exit;
    }
    function urlfriendlycryptingW()
    {
        $this->load->library('encrypt');
        $username = 'mohitchack255'; 
        $enc_username=$this->encrypt->encode($username);
        $enc_username=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_username);
        echo $enc_username;
        $dec_username=str_replace(array('-', '_', '~'), array('+', '/', '='), $enc_username);
        $dec_username=$this->encrypt->decode($dec_username);
        echo $dec_username;
    }
    public function test_mail()
    {
    	$message = 'CI Mail Test !';
        $this->email->to('mohit.chack@digimonk.in');
        $this->email->from($this->email_address, $this->email_tittle);
        $this->email->subject('CI Mail');
        $this->email->message($message);
        $send = $this->email->send();  
        if($send){
        	echo "Mail Send Success.";
        }
        else
        {
        	echo "Failed!";
        }
        
    }

    public function send_mail($to,$from,$subject,$message)
    {
        $this->email->to($to);
        $this->email->from($from, $this->email_tittle);
        $this->email->subject($subject);
        $this->email->message($message);
        $send = $this->email->send();  
        if($send){
            return true;
        }
        else
        {
            return false;
        }
    }

    public function checkEmployee()
    {
        $email = $this->input->post("email");
        if($email)
        {
            $employee = $this->user_login_model->is_valid_login($email);
            if($employee)
            {
                $otp =rand(1111,9999);
                $update_data['employee_otp'] = $otp;
                $update = $this->user_login_model->update_employee($email,$update_data);
                if($update)
                {
                    $from = $this->send_from;
                    $subject = $this->site_name.' Email Verify.';
                    $message = 'Your Login OTP is '.$otp.'.';
                    $this->send_mail($email,$from,$subject,$message);
                    echo json_encode(array('status'=>true,'message'=>'<div class="alert alert-success alert-dismissible"><a href="#" class="close"  data-dismiss="alert" aria-label="close">&times;</a><center><strong>Login Success.</strong> Redirecting to dasboard.</center></div>'));
                }
                else
                {
                    echo json_encode(array('status'=>false,'message'=>'<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Something Went Wrong!</strong></center></div>'));
                }
            }
            else
            {
                echo json_encode(array('status'=>false,'message'=>'<div class="alert alert-warning alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Emai Not found!</strong></center></div>'));
            }
        }
        else
        {
            echo json_encode(array('status'=>false,'message'=>'<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Something Went Wrong!</strong></center></div>'));
        }
    }

     public function checkOTP()
    {
        $email = $this->input->post("email");
        $postotp = $this->input->post("otp");
        if($email && $postotp)
        {
            $otp = implode("", $postotp);
            $employee = $this->user_login_model->is_valid_login($email);
            if($employee)
            {
                if($employee['employee_otp'] == $otp)
                {
                    $this->session->set_userdata('SESSION_EMPLOYEE_ID',$employee['EMPLOYEEID']);  
                    $this->session->set_userdata('SESSION_EMPLOYEE_EMAIL',$employee['employee_email']);  
                    echo json_encode(array('status'=>true,'message'=>'<div class="alert alert-success alert-dismissible"><a href="#" class="close"  data-dismiss="alert" aria-label="close">&times;</a><center><strong>OTP Matched!</strong> Redirecting to dasboard.</center></div>'));
                }
                else
                {
                    echo json_encode(array('status'=>false,'message'=>'<div class="alert alert-warning alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Wrong OTP!</strong></center></div>'));
                }
            }
            else
            {
                echo json_encode(array('status'=>false,'message'=>'<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Something Went Wrong!</strong></center></div>'));
            }
        }
        else
        {
            echo json_encode(array('status'=>false,'message'=>'<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><center><strong>Something Went Wrong!</strong></center></div>'));
        }
    }

    public function logout() 
    {
        if (!empty($this->session->userdata['SESSION_EMPLOYEE_ID'])) 
            {
                $this->session->unset_userdata('SESSION_EMPLOYEE_ID');
                $this->session->unset_userdata('SESSION_EMPLOYEE_EMAIL');
            }
        redirect(base_url());
    }
    


    

}



?>

