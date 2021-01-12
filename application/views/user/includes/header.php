<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wepay | <?php echo $title; ?></title>
    <!-- <link rel="icon" href="images/favicon.png" type="image/x-icon"> -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/';?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/';?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/';?>css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/';?>css/font-awesome.min.css">
    <link href="<?php echo base_url().'assets/';?>css/css2.css?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link href="<?php echo base_url().'assets/';?>css/css2.css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/';?>css/flags.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/';?>css/slick-theme.css">
 <!--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/flexslider.min.css"> -->
     <link href="<?php echo base_url().'assets/';?>css/select2.min.css" rel="stylesheet" />
     <link href="<?php echo base_url().'assets/';?>css/intlTelInput.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>/assets/notification/notifIt.css" rel="stylesheet" />
	
</head>

<body class="main">
<?php
if($module == 'home')
{
?>
    <!--<nav class="navbar navbar-default">
        <div class="container">
             <div class="navbar-logo-image">
                <a href="<?php echo base_url();?>" class="navbar-brand">
                    <img src="<?php echo base_url();?>assets/images/<?php echo $setting['site_logo']; ?>">
                </a>
            </div>
            
        </div>
    </nav>-->
<?php
}
?>
<!-----------------left sidebar----------->
    <div id="mySidenav" class="sidenav">
   <ul>
      <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close &times;</a></li>
      <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i>Home</a></li>

      <li><a href="<?php echo base_url().'destination-search-result';?>"><i class="fa fa-building"></i>Destination</a></li>
      <li><a href="<?php echo base_url().'hotel-search-result';?>"><i class="fa fa-building"></i>Hotels</a></li>
      <li><a href="<?php echo base_url().'homestay-search-result';?>"><i class="fa fa-bed"></i>Home Stays</a>
      </li>
      <li><a href="<?php echo base_url().'event-search-result';?>"><i class="fa fa-calendar"></i>Events</a></li>
      <li><a href="<?php echo base_url().'travel-search-result';?>"><i class="fa fa-tripadvisor"></i>Tour Operators</a></li>
  </ul>
</div>

<!------------Right Sidebar------------->
<div id="mySidenav1" class="sidenav1">
  
  <ul>
      <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">Close &times;</a></li>
      <li><a href="<?php echo base_url().'login-register';?>login-register"><i class="fa fa-user"></i>Register/Login</a></li>
      <li><a href="<?php echo base_url().'about';?>about"><i class="fa fa-users"></i>About Columbus Lost</a></li>
      <li><a href="<?php echo base_url().'home-advertise-us';?>"><i class="fa fa-users"></i>Advertise With Us</a></li>
      <li><a href="<?php echo base_url().'contact';?>contact"><i class="fa fa-phone"></i>Contact Us</a></li>
     <!--  <li><a href="#"><i class="fa fa-users"></i>Our Blog</a></li> -->
  </ul>
</div>
<!--------------mobile-view-sidebar-------------->
