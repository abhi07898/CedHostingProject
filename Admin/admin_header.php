 <!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
 /**
  * Short description for code
  * php version 7.2.10
  *
  * @category Category_Name
  * @package  PackageName
  * @author   Abhishek Pandey <author@example.com>
  * @license  http://www.php.net/license/3_01.txt 
  * @link     http://pear.php.net/package/PackageName
  *
  * This is a "Docblock Comment"
  */
 session_start();?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Admin Pannel for CedHosting</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="custom.css" type="text/css">
  
</head>

<body>
 <!-- Sidenav -->
 <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
        <b><a href="index.php"><span class="ced">Ced </span><span class="host">Hosting</span></a></b>
          <!-- <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> -->
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <!-- product -->
            <li class="nav-item">
              <a class="nav-link" href="#product" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle abc">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Products</span>                
              </a>
              <ul class="collapse list-unstyled" id="product">
                  <li class="nav-item">
                      <a class="nav-link" href="create_category.php">Create Category</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="AddNewProducts.php">Add Products</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="ViewProduct.php">View Products</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="userallrides.php">Create New Offers</a>
                  </li>
              </ul>
            </li>
            <!-- Order -->
            <li class="nav-item">
              <a class="nav-link" href="#Order" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle abc">
              <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Orders</span>                
              </a>
              <ul class="collapse list-unstyled" id="Order">
                  <li class="nav-item">
                      <a class="nav-link" href="userpendingride.php">Pending Orders</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="usercompleteride.php">Completed Orders</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="userallrides.php">Cancelled Orders</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="userallrides.php">Generate Invoice</a>
                  </li>
              </ul>
            </li>
            <!-- Services -->
            <li class="nav-item">
              <a class="nav-link" href="#Services" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle abc">
              <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Services</span>                
              </a>
              <ul class="collapse list-unstyled" id="Services">
                  <li class="nav-item">
                      <a class="nav-link" href="userpendingride.php">Active Services</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="usercompleteride.php">Expired Services</a>
                  </li>
              </ul>
            </li>
            <!-- Users -->
            <li class="nav-item">
              <a class="nav-link" href="#User" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle abc">
              <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Users</span>                
              </a>
              <ul class="collapse list-unstyled" id="User">
                  <li class="nav-item">
                      <a class="nav-link" href="userpendingride.php">All User List</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="usercompleteride.php">Create New User</a>
                  </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Blog" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle abc">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Blog</span>                
              </a>
              <ul class="collapse list-unstyled" id="Blog">
                  <li class="nav-item">
                      <a class="nav-link" href="userpendingride.php">Add New Blog</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="usercompleteride.php">View All Blogs</a>
                  </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Accounts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle abc">
              <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Accounts</span>                
              </a>
              <ul class="collapse list-unstyled" id="Accounts">
                  <li class="nav-item">
                      <a class="nav-link" href="userpendingride.php">Update Company Info</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="usercompleteride.php">Change Security Question</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="usercompleteride.php">Change Password</a>
                  </li>
              </ul>
            </li>
         </div>
      </div>
    </div>
  </nav>
 