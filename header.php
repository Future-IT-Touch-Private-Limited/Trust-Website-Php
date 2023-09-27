<?php   
include 'conn.php';

error_reporting(0);
 $checkemail =  $_SESSION['email']?$_SESSION['email']:'null'; 




 $check ="SELECT * from `user_data` WHERE `email` = '$checkemail'";
$check_result = mysqli_query($conn, $check);
$check_result_row = mysqli_fetch_assoc($check_result);

 $num_row = mysqli_num_rows($check_result);
if($num_row ===1){
}else{
 if($check_result_row['email'] ===  $_SESSION['email']) {

   
}else{
     header('Location:login.php'); 
}
header('Location:login.php'); 
}

$sql = mysqli_query($conn,"SELECT *  FROM `footer` ORDER BY `id` DESC ");
$row = mysqli_fetch_assoc($sql);

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>ADMIN - <?php echo $page = basename($_SERVER['PHP_SELF']); ?></title>
		
		  <link rel="icon" type="image/png" sizes="32x32" href="../favicon.ico">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/bootstrap.min.css">
 
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
 
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/plugins/fontawesome/css/all.min.css">
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">
        <!-- Datatables CSS -->
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/plugins/datatables/datatables.min.css">
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/plugins/select2/css/select2.min.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/bootstrap-datetimepicker.min.css">
		<!-- Full Calander CSS -->
        <link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/plugins/fullcalendar/fullcalendar.min.css">
		<!-- Main CSS -->
		<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/style.css"> 

        <!-- date link table -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css'>

       


         </head>
    <!-- Main Wrapper -->
<div class="main-wrapper">
        
    <!-- Header -->
    <div class="header">
    
        <!-- Logo -->
        <div class="header-left">
            <a href="index.php" class="logo">
                <img src="../images/<?php echo $row['logo']; ?>" alt="Logo">
            </a>
            <a href="index.php" class="logo logo-small">
                <img src="../images/<?php echo $row['logo']; ?>" alt="Logo" width="30" height="30">
            </a>
        </div>
        <!-- /Logo -->
        
        <!-- Sidebar Toggle -->
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
        <!-- /Sidebar Toggle -->
        
      
        <!-- Header Menu -->
        <ul class="nav user-menu">
        
          
            
            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow main-drop">
                <a class="dropdown-item" href="<?php echo BASE_URL.'/logout.php' ?>"><i data-feather="log-out" class="mr-1"></i> Logout</a>
            </li>
            <!-- /User Menu -->
            
        </ul>
        <!-- /Header Menu -->
        <!-- Mobile Menu Toggle -->
        <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
        </a>
        
    </div>
    <!-- /Header --><!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="active">
                    <a href="<?php echo BASE_URL ?>/index.php"><i data-feather="home"></i> <span>Dashboard</span></a>
                </li>
                 <li class="">
                    <a href="<?php echo BASE_URL ?>/marque.php"><i data-feather="package"></i><span>Marquee Setting</span></a>
                </li>
                <li  class="">
                    <a href="<?php echo BASE_URL ?>/view_category.php"><i data-feather="package"></i> <span>Top Category Portfolio</span></a>
                </li>
                <li  class="">
                    <a href="<?php echo BASE_URL ?>/view_rooms.php"><i data-feather="image"></i> <span>Gallery Services</span></a>
                </li>
                
                 <li  class="">
                    <a href="<?php echo BASE_URL ?>/pooja/view_category.php"><i data-feather="git-branch"></i> <span>Pooja Category</span></a>
                </li>

                <li  class="">
                    <a href="<?php echo BASE_URL ?>/view_peoplesay.php"><i data-feather="link"></i> <span>Testimonial</span></a>
                </li>
                <li  class="">
                    <a href="<?php echo BASE_URL ?>/view_team.php"><i data-feather="users"></i> <span>Team</span></a>
                </li>
                
                  <li  class="">
                    <a href="<?php echo BASE_URL ?>/view_gallery.php"><i data-feather="grid"></i> <span>Gallery</span></a>
                </li>
                <li  class="">
                    <a href="<?php echo BASE_URL ?>/view_smallgallery.php"><i data-feather="box"></i> <span>Footer Gallery</span></a>
                </li>
                
                <li class="menu-title"> 
                    <span>Blogs Section</span>
                </li>
                <li class=""> 
                    <a href="<?php echo BASE_URL ?>/blog/post/view_post.php"><i data-feather="layout"></i> <span>Blog</span></a>
                </li>
                
                  <li class=""> 
                    <a href="<?php echo BASE_URL ?>/news-article/view_news.php"><i data-feather="layout"></i> <span>News</span></a>
                </li>
                 <li class=""> 
                    <a href="<?php echo BASE_URL ?>/blog/post_category/view_category.php"><i data-feather="git-branch"></i> <span> Category</span></a>
                </li>
                <li class=""> 
                    <a href="<?php echo BASE_URL ?>/post_comment.php"><i data-feather="message-square"></i> <span> Comment</span></a>
                </li>

                <li class="menu-title"> 
                    <span>Website settings</span>
                </li>
                <li class=""> 
                    <a href="<?php echo BASE_URL ?>/view_banner.php"><i data-feather="box"></i> <span>Home Banner</span></a>
                </li>

                <li class=""> 
                    <a href="<?php echo BASE_URL ?>/add_pages.php"><i data-feather="file-text"></i> <span>Inner pages</span></a>
                </li>
                <li class=""> 
                    <a href="<?php echo BASE_URL ?>/add_company_deatils.php"><i data-feather="settings"></i> <span>Company Deatils</span></a>
                </li>
                <li class=""> 
                    <a href="<?php echo BASE_URL ?>/massage.php"><i data-feather="share"></i> <span>User Message</span></a>
                </li>
               <li class=""> 
                    <a href="<?php echo BASE_URL ?>/profile.php"><i data-feather="users"></i> <span>User profile</span></a>
                </li>
                  <li class=""> 
                    <a href="<?php echo BASE_URL ?>/donation.php"><i data-feather="credit-card"></i> <span>Donation</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->       
