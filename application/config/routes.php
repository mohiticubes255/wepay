<?php



defined('BASEPATH') OR exit('No direct script access allowed');







/*



| -------------------------------------------------------------------------



| URI ROUTING



| -------------------------------------------------------------------------



| This file lets you re-map URI requests to specific controller functions.



|



| Typically there is a one-to-one relationship between a URL string



| and its corresponding controller class/method. The segments in a



| URL normally follow this pattern:



|



|	example.com/class/method/id/



|



| In some instances, however, you may want to remap this relationship



| so that a different class/function is called than the one



| corresponding to the URL.



|



| Please see the user guide for complete details:



|



|	https://codeigniter.com/user_guide/general/routing.html



|



| -------------------------------------------------------------------------



| RESERVED ROUTES



| -------------------------------------------------------------------------



|



| There are three reserved routes:



|



|	$route['default_controller'] = 'welcome';



|



| This route indicates which controller class should be loaded if the



| URI contains no data. In the above example, the "welcome" class



| would be loaded.



|



|	$route['404_override'] = 'errors/page_missing';



|



| This route will tell the Router which controller/method to use if those



| provided in the URL cannot be matched to a valid route.



|



|	$route['translate_uri_dashes'] = FALSE;



|



| This is not exactly a route, but allows you to automatically route



| controller and method names that contain dashes. '-' isn't a valid



| class or method name character, so it requires translation.



| When you set this option to TRUE, it will replace ALL dashes in the



| controller and method URI segments.



|



| Examples:	my-controller/index	-> my_controller/index



|		my-controller/my-method	-> my_controller/my_method



*/







$route['default_controller'] = 'home';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;

$route['admin/change-password'] = 'admin/setting/change_password';

$route['contact-us'] = 'contact_us';
$route['ticket-list'] = 'ticket_list';

$route['submit-ticket'] = 'ticket_list/submit_ticket';

$route['admin/manage-employees'] = 'admin/employees';

$route['admin/add-employee'] = 'admin/employees/add_employee';

$route['admin/edit-employee/(:any)'] = 'admin/employees/edit_employee/$1';

$route['admin/manage-gifts'] = 'admin/gifts';

$route['admin/add-gift'] = 'admin/gifts/add_gift';

$route['admin/edit-gift/(:any)'] = 'admin/gifts/edit_gift/$1';

$route['admin/manage-tickets'] = 'admin/tickets';

$route['admin/prize-tickets'] = 'admin/prize_tickets';

$route['admin/edit-employee-tickets/(:any)'] = 'admin/tickets/edit_tickets/$1';

$route['admin/edit-employee-unused-tickets/(:any)'] = 'admin/tickets/edit_unused_tickets/$1';

$route['admin/add-gift'] = 'admin/gifts/add_gift';

$route['admin/manage-email-template'] = 'admin/emailtemplate';

$route['admin/edit-manage-email-template/(:any)'] = 'admin/emailtemplate/edit/$1';


$route['admin/manage-date'] = 'admin/managedate';

$route['admin/add-date'] = 'admin/managedate/add_date';

$route['admin/edit-date/(:any)'] = 'admin/managedate/edit_date/$1';



$route['activate-account/(:any)'] = 'auth/activate_account/$1';



$route['logout'] = 'auth/logout';

/* Admin Routes*/
$route['admin'] = 'admin/admin';
$route['admin/'] = 'admin/admin';
$route['admin-logout'] = 'admin/auth/logout';
############################################################################################################################################













