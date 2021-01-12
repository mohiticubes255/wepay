<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WePay Admin</title>
        <!-- <link rel="icon" href="<?php echo base_url(); ?>/assets/images/favicon.png" type="image/x-icon"> -->
        <link href="<?php echo base_url(); ?>/assets/admin/css/styles.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/admin/css/saloon.css" rel="stylesheet" />
    
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/timepicker@1.11.12/jquery.timepicker.min.css'>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <!-- load jQuery UI CSS theme -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="<?php echo base_url(); ?>/assets/notification/notifIt.css" rel="stylesheet" />
	
	<link href="<?php echo base_url(); ?>/assets/admin/css/bootstrap-multiselect.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.min.css">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo base_url().'admin'; ?>"><img src="<?php echo base_url(); ?>assets/images/logo1.png" alt=""/></a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto">
      
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-bell fa-fw"></i></a>
                   
                </li>
        <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url().'admin-logout';?>"><i class="fas fa-sign-out-alt"></i></a>
                   
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                       <div class="nav">
                      <a class="nav-link" href="<?php echo base_url().'admin/dashboard';?>">Dashboard</a>
                      <a class="nav-link" href="<?php echo base_url().'admin/manage-employees';?>">Manage Employees</a>
                      <a class="nav-link" href="<?php echo base_url().'admin/manage-gifts';?>">Manage Prize</a>
                      <a class="nav-link" href="<?php echo base_url().'admin/manage-date';?>">Manage Prize Dates</a>
                      <a class="nav-link" href="<?php echo base_url().'admin/manage-tickets';?>">Manage Tickets</a>
					  <a class="nav-link" href="<?php echo base_url().'admin/manage_content';?>">Manage Content</a>
					  <a class="nav-link" href="<?php echo base_url().'admin/prize-tickets';?>">Prize Tickets</a>
					  <a class="nav-link" href="<?php echo base_url().'admin/email_setting';?>">Email Setting</a>
					  <a class="nav-link" href="<?php echo base_url().'admin/site_setting';?>">Site Setting</a>
					  <a class="nav-link" href="<?php echo base_url().'admin/change-password';?>">Change Password</a>
                      <!-- <a class="nav-link" href="<?php echo base_url().'admin/manage-email-template';?>">Manage Email Templats</a> -->

                        </div>
                    </div>
                    
                </nav>
            </div>
      <div id="layoutSidenav_content">
