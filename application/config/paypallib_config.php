<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');



// ------------------------------------------------------------------------

// Paypal IPN Class

// ------------------------------------------------------------------------



// Use PayPal on Sandbox or Live

$config['sandbox'] = FALSE; // FALSE for live environment TRUE



// PayPal Business Email ID

// $config['business'] = 'c.soosairaj@gmail.com';

// $config['business'] = 'mohit.sandbox@gmail.com';

// $config['business'] = 'paypal_sandbox@digimonk.in';

$config['business'] = 'twentydaycup@paypal.com';



// If (and where) to log ipn to file

$config['paypal_lib_ipn_log_file'] = BASEPATH . 'logs/paypal_ipn.log';

$config['paypal_lib_ipn_log'] = TRUE;



// Where are the buttons located at 

$config['paypal_lib_button_path'] = 'buttons';



// What is the default currency?

$config['paypal_lib_currency_code'] = 'USD';



?>

