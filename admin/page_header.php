<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Tender</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="SUJAN IT ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">  
    <link href="css/bootstrap.css" rel="stylesheet">
    <Link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="css/prettify.min.css" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
  </head>
  <body class="nav-md">
      <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/tu/users/dashboard" class="site_title"><i class="fa fa-paw"></i> 
                <span> Dashboard</span></a>
                </div>
             <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile clearfix">
            
            </div>
            <!-- /menu profile quick info -->

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Profile <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li>
                       <a href="/tu/users/view/1">Profile</a>                      </li>
                      <li>
                       <a href="/tu/users/edit/1">Change Password</a>                      </li>
                    </ul>
                  </li>
                                         
                  <li><a><i class="fa fa-table"></i> Tender <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="new_tender.php">New Tender </a></li>
                      <li><a href="#">Notice</a></li>
                      <?php $admin_type = $_SESSION['admin_type'];
                      if($admin_type == 99){ ?>

                       <li><a href="request_tender.php">Tender Request</a></li>
                      <?php } ?>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="#" height="50" alt="">admin                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li>
                       <a href="#">Profile</a>   </li>
                   <li>                       <a href="#">Notice</a>   </li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Logout</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->