<!DOCTYPE html>
<html>

<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>Boss 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/icomoon/icomoon.css">

    <!-- FullCalendar -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/plugins/magnific/magnific-popup.css">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/plugins/c3charts/c3.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css">

    <!-- CSS - theme -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/skin/default_skin/less/theme.min.css">

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/allcp/forms/css/forms.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/allcp/forms/css/admin/app.css">

    <script src="<?php echo base_url(); ?>assets/js/jquery/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
  



    <!-- Favicon >
    <link rel="shortcut icon" href="assets/img/favicon.png"-->

    <!-- IE8 HTML5 support  -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page with-customizer">

<!-- Body Wrap  -->
<div id="main">

    <!-- Header  -->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-logo-wrapper dark bg-dark">
            <a class="navbar-logo-image" href="<?php echo site_url('welcome/dashboard'); ?>">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" class="sb-l-o-logo">
                <img src="<?php echo base_url(); ?>assets/img/logo_small.png" alt="" class="sb-l-m-logo">
            </a>
        </div>
		<div class="extra-breadcrumb">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="breadcrumb-icon">
                        <a href="index.html">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-link">
                        <a href="<?php echo site_url('welcome/dashboard'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-current-item"><?php echo $path_url; ?></li>
                </ol>
            </div>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-fuse">
                <a href="#" class="dropdown-toggle mln" data-toggle="dropdown">
                    <span class="hidden-xs hidden-sm"><span class="name">Admin</span> </span>
                    <span class="fa fa-caret-down hidden-xs hidden-sm"></span>
                </a>
                <ul class="dropdown-menu list-group keep-dropdown w190" role="menu">
                                        <li class="list-group-item">
                        <a href="#">
                            Settings
                            <span class="fa fa-cog"></span> 
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="<?php echo base_url(); ?>">
                            Logout
                            <span class="fa fa-sign-out"></span> 
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- /Header  -->

    <!-- Sidebar  -->
    <aside id="sidebar_left" class="nano nano-light affix">

        <!-- Sidebar Left Wrapper  -->
        <div class="sidebar-left-content nano-content">

          
            <!-- /Sidebar Header -->

            <!-- Sidebar Menu  -->
            <ul class="nav sidebar-menu">
              <!--  <li class="active">
                    <a href="new-quotes.html">
                        <span class="sidebar-title">New Quote</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="sidebar-title">Quote Status</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="sidebar-title">BOT Users</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="sidebar-title">Price Table</span>
                    </a>
                </li>
				  <li>
                    <a href="#">
                        <span class="sidebar-title">Reports</span>
                    </a>
                </li> -->
                 <li>
                    <a href="<?php echo site_url('tooling/list_material'); ?>">
                        <span class="sidebar-title">Materials</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('tooling/list_fixture'); ?>">
                        <span class="sidebar-title">Fixtures</span>
                    </a>
                </li>
                  <li>
                    <a href="<?php echo site_url('tooling/list_time'); ?>">
                        <span class="sidebar-title">Time</span>
                    </a>
                </li>
                   <li>
                    <a href="<?php echo site_url('tooling/list_accessory'); ?>">
                        <span class="sidebar-title">Accessory</span>
                    </a>
                </li>
                 <li>
                    <a href="<?php echo site_url('tooling/extra_material'); ?>">
                        <span class="sidebar-title">Extra</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('tooling/list_markup'); ?>">
                        <span class="sidebar-title">Mark-up</span>
                    </a>
                </li>
            </ul>
            <!-- /Sidebar Menu  -->

        </div>
        <!-- /Sidebar Left Wrapper  -->

    </aside>
    <!-- /Sidebar -->
