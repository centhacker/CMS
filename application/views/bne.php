<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Bank CRM</title>

    <script type="text/javascript">
        //<![CDATA[
        try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"18f84070e6ef4b5fb0f9d14bcad3bd2d",petok:"baf7e8a4a57ceb51f59416b0e62617e28ef76f23-1483733768-1800",zone:"adbee.technology",rocket:"0",apps:{"ga_key":{"ua":"UA-49262924-2","ga_bs":"2"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="../ajax.cloudflare.com/cdn-cgi/nexp/dok3v%3df2befc48d1/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
        //]]>
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap/bootstrap.min.css"/>

    <script src="<?php echo base_url(); ?>js/demo-rtl.js"></script>


    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/libs/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/libs/nanoscroller.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/compiled/theme_styles.css"/>

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/libs/datepicker.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/libs/daterangepicker.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/libs/bootstrap-timepicker.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/libs/select2.css" type="text/css"/>

    <link type="image/x-icon" href="favicon.png" rel="shortcut icon"/>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        /* <![CDATA[ */
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-49262924-2']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

        (function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
        /* ]]> */
    </script>
</head>
<body>
<div id="theme-wrapper">
    <header class="navbar" id="header-navbar">
        <div class="container">
            <a href="index-2.html" id="logo" class="navbar-brand">
                <img src="<?php echo base_url(); ?>img/logo.png" alt="" class="normal-logo logo-white"/>
                <img src="<?php echo base_url(); ?>img/logo-black.png" alt="" class="normal-logo logo-black"/>
                <img src="<?php echo base_url(); ?>img/logo-small.png" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
            </a>
            <div class="clearfix">
                <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
                    <ul class="nav navbar-nav pull-left">
                        <li>
                            <a class="btn" id="make-small-nav">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="count">8</span>
                            </a>
                            <ul class="dropdown-menu notifications-list">
                                <li class="pointer">
                                    <div class="pointer-inner">
                                        <div class="arrow"></div>
                                    </div>
                                </li>
                                <li class="item-header">You have 6 new notifications</li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-comment"></i>
                                        <span class="content">New comment on �Awesome P...</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-plus"></i>
                                        <span class="content">New user registration</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-envelope"></i>
                                        <span class="content">New Message from George</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="content">New purchase</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-eye"></i>
                                        <span class="content">New order</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item-footer">
                                    <a href="#">
                                        View all notifications
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="count">16</span>
                            </a>
                            <ul class="dropdown-menu notifications-list messages-list">
                                <li class="pointer">
                                    <div class="pointer-inner">
                                        <div class="arrow"></div>
                                    </div>
                                </li>
                                <li class="item first-item">
                                    <a href="#">
                                        <img src="img/samples/messages-photo-1.png" alt=""/>
<span class="content">
<span class="content-headline">
George Clooney
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>img/samples/messages-photo-2.png" alt=""/>
<span class="content">
<span class="content-headline">
Emma Watson
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>img/samples/messages-photo-3.png" alt=""/>
<span class="content">
<span class="content-headline">
Robert Downey Jr.
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
                                        <span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
                                    </a>
                                </li>
                                <li class="item-footer">
                                    <a href="#">
                                        View all messages
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a class="btn dropdown-toggle" data-toggle="dropdown">
                                New Item
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-archive"></i>
                                        New Product
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        New Order
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-sitemap"></i>
                                        New Category
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        <i class="fa fa-file-text"></i>
                                        New Page
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a class="btn dropdown-toggle" data-toggle="dropdown">
                                English
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="item">
                                    <a href="#">
                                        Spanish
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        German
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#">
                                        Italian
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="nav-no-collapse pull-right" id="header-nav">
                    <ul class="nav navbar-nav pull-right">
                        <li class="mobile-search">
                            <a class="btn">
                                <i class="fa fa-search"></i>
                            </a>
                            <div class="drowdown-search">
                                <form role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <i class="fa fa-search nav-search-icon"></i>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="dropdown profile-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>img/samples/scarlet-159.png" alt=""/>
                                <span class="hidden-xs">Scarlett Johansson</span> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="<?php echo base_url(); ?>index.php/welcome/adduser"><i class="fa fa-user"></i>Add User</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/welcome/addrole"><i class="fa fa-cog"></i>Add Role</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>
                                <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
                            </ul>
                        </li>
                        <li class="hidden-xxs">
                            <a class="btn">
                                <i class="fa fa-power-off"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div id="page-wrapper" class="container">
        <div class="row">
            <div id="nav-col">
                <section id="col-left" class="col-left-nano">
                    <div id="col-left-inner" class="col-left-nano-content">
                        <div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
                            <img alt="" src="<?php echo base_url(); ?>img/samples/scarlet-159.png"/>
                            <div class="user-box">
<span class="name">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    Scarlett J.
    <i class="fa fa-angle-down"></i>
</a>
<ul class="dropdown-menu">
    <li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
    <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
    <li><a href="#"><i class="fa fa-envelope-o"></i>Messages</a></li>
    <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
</ul>
</span>
<span class="status">
<i class="fa fa-circle"></i> Online
</span>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="nav-header nav-header-first hidden-sm hidden-xs">
                                    Navigation
                                </li>
                                <li class="active">
                                    <a href="<?php echo base_url(); ?>index.php/welcome/dashboard">
                                        <i class="fa fa-dashboard"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/welcome/regions">
                                        <i class="fa fa-dashboard"></i>
                                        <span>Regions</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/welcome/branches">
                                        <i class="fa fa-dashboard"></i>
                                        <span>Branches</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-table"></i>
                                        <span>Configuration</span>
                                        <i class="fa fa-angle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="users.html">
                                                Region Management
                                            </a>
                                        </li>
                                        <li>
                                            <a href="users.html">
                                                Branch Management
                                            </a>
                                        </li>
                                        <li>
                                            <a href="users.html">
                                                User Management
                                            </a>
                                        </li>
                                        <li>
                                            <a href="users.html">
                                                Roles Management
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-bar-chart-o"></i>
                                        <span>OPERATIONS MANAGER</span>
                                        <i class="fa fa-angle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="users.html">
                                                Customer Manager
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-copy"></i>
                                        <span>MONITORING</span>
                                        <i class="fa fa-angle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="users.html">
                                                Branch
                                            </a>
                                        </li>
                                        <li>
                                            <a href="users.html">
                                                Tickets
                                            </a>
                                        </li>
                                        <li>
                                            <a href="users.html">
                                                Operators
                                            </a>
                                        </li>
                                        <li>
                                            <a href="users.html">
                                                Stations
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="fa fa-copy"></i>
                                        <span>REPORTS</span>
                                        <i class="fa fa-angle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="reports.html">
                                                Reports
                                            </a>
                                        </li>

                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <div id="nav-col-submenu"></div>
            </div>
            <div id="content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active"><span>Add Branch/Network</span></li>
                                </ol>
                                <h1>Add Branch/Network</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-box clearfix" style="min-height: 1100px;">
                                    <div class="tabs-wrapper tabs-no-header">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-branch" data-toggle="tab">Branch</a></li>
                                            <li><a href="#tab-network" data-toggle="tab">Network</a></li>
                                            <li><a href="#tab-engine" data-toggle="tab">Engine</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="tab-branch">
                                                <div class="alert alert-danger fade in" id="BranchError" style="display: none;"></div>
                                                <div class="alert alert-success" id="BranchMsg" style="display: none;"></div>
                                                <div class="main-box-body clearfix">
                                                    <form class="form-horizontal" role="form">
                                                        <div class="form-group">
                                                            <label for="BranchName" class="col-lg-2 control-label">Branch Name</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" class="form-control" id="BranchName" name="BranchName" placeholder="Branch Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="BranchAdd" class="col-lg-2 control-label">Branch Address</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" class="form-control" id="BranchAdd" name="BranchAdd" placeholder="Branch Address">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Region</label>
                                                            <div class="col-lg-10">
                                                                <select class="form-control" id="Region" name="Region">
                                                                    <?php
                                                                    foreach ($h->result() as $row)
                                                                    {
                                                                        ?><option value="<?php echo $row->RegionId;?>">
                                                                        <?php echo $row->RegionName;?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-offset-2 col-lg-10">
                                                                <input type="button" value="Add" id="SubmitBranch" class="btn btn-success">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-network">
                                                <div class="alert alert-danger fade in" id="NetworkError" style="display: none;"></div>
                                                <div class="alert alert-success" id="NetworkMsg" style="display: none;"></div>
                                                <div class="main-box-body clearfix">
                                                    <form class="form-horizontal" role="form">
                                                        <div class="form-group">
                                                            <label for="BranchName" class="col-lg-2 control-label">IP</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" class="form-control" id="Ip" name="Ip" placeholder="IP">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="BranchAdd" class="col-lg-2 control-label">Port</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" class="form-control" id="Port" name="Port" placeholder="Port">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-offset-2 col-lg-10">
                                                                <input type="button" value="Add" id="SubmitNetwork" class="btn btn-success">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab-engine">
                                                <div class="main-box-body clearfix">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer id="footer-bar" class="row">
                        <p id="footer-copyright" class="col-xs-12">
                            Powered by CRM.
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <div id="config-tool" class="closed">
        <a id="config-tool-cog">
            <i class="fa fa-cog"></i>
        </a>
        <div id="config-tool-options">
            <h4>Layout Options</h4>
            <ul>
                <li>
                    <div class="checkbox-nice">
                        <input type="checkbox" id="config-fixed-header"/>
                        <label for="config-fixed-header">
                            Fixed Header
                        </label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-nice">
                        <input type="checkbox" id="config-fixed-sidebar"/>
                        <label for="config-fixed-sidebar">
                            Fixed Left Menu
                        </label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-nice">
                        <input type="checkbox" id="config-fixed-footer"/>
                        <label for="config-fixed-footer">
                            Fixed Footer
                        </label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-nice">
                        <input type="checkbox" id="config-boxed-layout"/>
                        <label for="config-boxed-layout">
                            Boxed Layout
                        </label>
                    </div>
                </li>
                <li>
                    <div class="checkbox-nice">
                        <input type="checkbox" id="config-rtl-layout"/>
                        <label for="config-rtl-layout">
                            Right-to-Left
                        </label>
                    </div>
                </li>
            </ul>
            <br/>
            <h4>Skin Color</h4>
            <ul id="skin-colors" class="clearfix">
                <li>
                    <a class="skin-changer" data-skin="" data-toggle="tooltip" title="Default" style="background-color: #34495e;">
                    </a>
                </li>
                <li>
                    <a class="skin-changer" data-skin="theme-white" data-toggle="tooltip" title="White/Green" style="background-color: #2ecc71;">
                    </a>
                </li>
                <li>
                    <a class="skin-changer blue-gradient" data-skin="theme-blue-gradient" data-toggle="tooltip" title="Gradient">
                    </a>
                </li>
                <li>
                    <a class="skin-changer" data-skin="theme-turquoise" data-toggle="tooltip" title="Green Sea" style="background-color: #1abc9c;">
                    </a>
                </li>
                <li>
                    <a class="skin-changer" data-skin="theme-amethyst" data-toggle="tooltip" title="Amethyst" style="background-color: #9b59b6;">
                    </a>
                </li>
                <li>
                    <a class="skin-changer" data-skin="theme-blue" data-toggle="tooltip" title="Blue" style="background-color: #2980b9;">
                    </a>
                </li>
                <li>
                    <a class="skin-changer" data-skin="theme-red" data-toggle="tooltip" title="Red" style="background-color: #e74c3c;">
                    </a>
                </li>
                <li>
                    <a class="skin-changer" data-skin="theme-whbl" data-toggle="tooltip" title="White/Blue" style="background-color: #3498db;">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>js/demo-skin-changer.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.nanoscroller.min.js"></script>
    <script src="<?php echo base_url(); ?>js/demo.js"></script>

    <script src="<?php echo base_url(); ?>js/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-jvectormap-world-merc-en.js"></script>
    <script src="<?php echo base_url(); ?>js/gdp-data.js"></script>
    <script src="<?php echo base_url(); ?>js/flot/jquery.flot.min.js"></script>
    <script src="<?php echo base_url(); ?>js/flot/jquery.flot.resize.min.js"></script>
    <script src="<?php echo base_url(); ?>js/flot/jquery.flot.time.min.js"></script>
    <script src="<?php echo base_url(); ?>js/flot/jquery.flot.threshold.js"></script>
    <script src="<?php echo base_url(); ?>js/flot/jquery.flot.axislabels.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>js/skycons.js"></script>

    <script src="<?php echo base_url(); ?>js/scripts.js"></script>
    <script src="<?php echo base_url(); ?>js/pace.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('#SubmitBranch').click(function(e) {

                var BranchName = $("#BranchName").val();
                var BranchAdd = $("#BranchAdd").val();
                var Region = $("#Region").val();

                if(BranchName == ""){
                    $("#BranchError").show().html("Enter Branch Name");
                    return false;
                } else if(BranchAdd == ""){
                    $("#BranchError").show().html("Enter Branch Address");
                    return false;
                }

                $.ajax({
                    url : "<?php echo base_url(); ?>index.php/welcome/AddBranch",
                    type : "POST",
                    dataType : "json",
                    data : {"BranchName" : BranchName, "BranchAdd" : BranchAdd, "Region": Region},
                    success : function(data) {
                        if(data == "Successful"){
                            $("#BranchError").hide();
                            $("#BranchMsg").show().html(BranchName + " added successfully");
                            $("input[type='text']").val("");
                            $("#Region").val($("#Region option:first").val());
                        }
                    },
                    error : function(data) {
                        console.log(data);
                    }
                });
            });

            $('#SubmitNetwork').click(function(e) {

                var Ip = $("#Ip").val();
                var Port = $("#Port").val();

                if(Ip == ""){
                    $("#NetworkError").show().html("Enter Ip");
                    return false;
                } else if(Port == ""){
                    $("#NetworkError").show().html("Enter Port");
                    return false;
                }

                $.ajax({
                    url : "<?php echo base_url(); ?>index.php/welcome/AddNetwork",
                    type : "POST",
                    dataType : "json",
                    data : {"Ip" : Ip, "Port" : Port},
                    success : function(data) {
                        if(data == "Successful"){
                            $("#NetworkError").hide();
                            $("#NetworkMsg").show().html(Ip + ":" + Port + " added successfully");
                            $("input[type='text']").val("");
                        }
                    },
                    error : function(data) {
                        console.log(data);
                    }
                });
            });

        });

    </script>

</body>
</html>