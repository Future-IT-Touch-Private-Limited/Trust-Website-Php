<?php include 'header.php';

$q = $_GET['details'];
if(isset($q)){
$blog = mysqli_query($conn,"SELECT * FROM `blogs` LEFT JOIN `blog_categories` ON `blog_categories`.`blog_categories_id`= `blogs`.`category` LEFT JOIN `user_data` ON `user_data`.`id`= `blogs`.`author` WHERE `blogs`.`id` = '$q'");
$details = mysqli_fetch_assoc($blog);
}
 ?>

  <!-- partial:partia/__subheader.html -->
  <div class="sigma_subheader dark-overlay dark-overlay-2" style="background-image: url(assets/img/subheader.jpg)">

    <div class="container">
      <div class="sigma_subheader-inner">
        <div class="sigma_subheader-text">
          <h1>Blog Details</h1>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="btn-link" href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
          </ol>
        </nav>
      </div>
    </div>

  </div>
  <!-- partial -->

  <!-- Post Content Start -->
  <div class="section sigma_post-single">
    <div class="container">

      <div class="row">

        <div class="col-lg-8">
          <div class="post-detail-wrapper">

            <div class="entry-content">
              <div class="sigma_post-meta">
                <div class="sigma_post-categories">
                  <a href="blog-details.php" class="sigma_post-category"><?php echo $details['blog_categories_name'] ?></a>
                </div>
              </div>
              <h4 class="entry-title"><?php echo $details['title'] ?></h4>
              <div class="sigma_post-meta">
                <!-- <a href="blog-details.html"> <i class="far fa-eye"></i> 232 Views</a>
                <a href="blog-details.html"> <i class="far fa-comments"></i> 35 Comments</a> -->
                <a href="blog-details.html"> <i class="far fa-calendar"></i><?php echo $details['date'] ?></a>
              </div>
              <p>
               <?php echo $details['content'] ?>
              </p>
            </div>

            <!-- Post Meta Start -->
            <!-- <div class="sigma_post-single-meta">
              <div class="sigma_post-single-meta-item">
                <h6>Tags</h6>
                <div class="tagcloud">
                  <a href="#">Portfolio</a>
                  <a href="#">Creative</a>
                  <a href="#">Intuitive</a>
                </div>
              </div>
              <div class="sigma_post-single-meta-item sigma_post-share">
                <h6>Share</h6>
                <ul class="sigma_sm">
                  <li>
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fab fa-youtube"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div> -->
            <!-- Post Meta End -->

            <!-- Post Pagination Start -->
            <div class="section">

            </div>
            <!-- Post Pagination End -->

            <!-- Related Posts Start -->
            <div class="section">
              <h5>Related Posts</h5>
              <div class="row">
                 <?php $sql_list = mysqli_query($conn,"SELECT * FROM `blogs`");
            while($list = mysqli_fetch_assoc($sql_list)){?>
                <!-- Article Start -->
                <div class="col-md-6">
                   
                  <article class="sigma_post">
                    <div class="sigma_post-thumb">
                      <a href="blog-details.php?details=<?php echo $list['id']; ?>">
                        <img src="images/<?php echo $list['photo']; ?>" alt="post">
                      </a>
                    </div>
                    <div class="sigma_post-body">
                      <div class="sigma_post-meta">
                        <a href="blog-details.php?details=<?php echo $list['id']; ?>" class="sigma_post-date"> <i class="far fa-calendar"></i> <?php echo $list['date']; ?></a>
                      </div>
                      <h5> <a href="blog-details.php?details=<?php echo $list['id']; ?>"><?php echo $list['title']; ?></a> </h5>
                      
                    </div>
                  </article>

                </div>
                <?php } ?>
                <!-- Article End -->

                <!-- Article Start -->
               
                <!-- Article End -->
              </div>
            </div>
            <!-- Related Posts End -->

            <!-- About Author Start -->
            <div class="section">
              <div class="sigma_author-about">
                <img src="images/<?php echo $details['image'];?>" alt="author">
                <div class="sigma_author-about-content">
                  <span>Written By</span>
                  <h3><?php echo $details['name']?></h3>
                  <p><?php echo $details['email']?></p>
                </div>
              </div>
            </div>
            <!-- About Author End -->

           <?php echo $_SESSION['comment_msg']; ?>
            <div class="section">
              <h5>Leave a Comment</h5>
              <div class="comment-form">
                <form method="post" action="admin/insert.php?act=add_post_comment">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Enter your Message" name="comment" rows="7"></textarea>
                  </div>
                  <input type="hidden" name="post_id" value="<?php echo $_GET['details'] ?>">
                  <div class="form-group">
                    <i class="far fa-user custom-primary"></i>
                    <input type="text" placeholder="Full Name" class="form-control" name="fname" value="">
                  </div>
                  <div class="form-group">
                    <i class="far fa-envelope custom-primary"></i>
                    <input type="email" placeholder="Email Address" class="form-control" name="email" value="">
                  </div>
                  <div class="form-group">
                    <i class="far fa-globe custom-primary"></i>
                    <input type="text" placeholder="Website" class="form-control" name="website" value="">
                  </div>
                  <button type="submit" class="sigma_btn-custom" name="add_post_comment">Post Comment <i class="far fa-comments"></i> </button>

                </form>
              </div>
            </div>
            <!-- Comments End -->

          </div>
        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4">
          <div class="sidebar">

            <!-- About Author Start -->
            <div class="sidebar-widget widget-about-author">
              <h5 class="widget-title">About Me</h5>
              <div class="widget-about-author-inner">
                <img src="images/<?php echo $details['image']?>" alt="author">
                <h5><?php echo $details['name']?></h5>
                <p>"<?php echo $details['email']?>"</p>
               
              </div>
            </div>
            <!-- About Author End -->

            <!-- Search Widget Start -->
            <div class="sidebar-widget widget-search">
              <h5 class="widget-title">Search</h5>
              <form method="get" action="blog.php">
                <div class="sigma_search-adv-input">
                  <input type="text" class="form-control" placeholder="Search Posts" name="q" value="">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
            <!-- Search Widget End -->

            <!-- Popular Feed Start -->
            <div class="sidebar-widget widget-recent-posts">
              <h5 class="widget-title">Recent Posts</h5>
              <?php $sql_list = mysqli_query($conn,"SELECT * FROM `blogs`");
            while($list = mysqli_fetch_assoc($sql_list)){?>
              <article class="sigma_recent-post">
                <a href="blog-details.php?details=<?php echo $list['id'] ?>"><img src="images/<?php echo $list['photo']; ?>" alt="post" width="75px" height="75px" style="height: 75px !important;"></a>
                <div class="sigma_recent-post-body">
                  <h6> <a href="blog-details.php?details=<?php echo $list['id'] ?>"><?php echo $list['title']; ?></a> </h6>
                  <a href="blog-details.php?details=<?php echo $list['id'] ?>"> <i class="far fa-calendar"></i> <?php echo $list['date']; ?></a>
                </div>
              </article>
            <?php } ?>
             
            </div>
            <!-- Popular Feed End -->

            <!-- Categories Start -->
            <div class="sidebar-widget widget-categories">
              <h5 class="widget-title"> Our Categories </h5>
              <ul class="sidebar-widget-list">
                <?php $category = mysqli_query($conn,"SELECT * FROM `blog_categories`");
            while($category_list = mysqli_fetch_assoc($category)){?>
               <li> <a href="#"><?php echo $category_list['blog_categories_name'] ?></a> </li>
            <?php } ?>
               
             
              </ul>

            </div>
            <!-- Categories End -->

            <!-- Social Media Start -->
            <div class="sidebar-widget">
              <h5 class="widget-title">Never Miss Out</h5>
              <ul class="sigma_sm square light">
                <li>
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
              </ul>
            </div>
            <!-- Social Media End -->

            <!-- Twitter Feed Start -->
           <!--  <div class="sidebar-widget widget-twitter">
              <h5 class="widget-title">Twitter Feed</h5>
              <div class="twitter-item d-flex align-items-start">
                <i class="fab fa-twitter custom-primary me-4 mt-2"></i>
                <div class="twitter-item-content">
                  <p>Rescue - #Gutenberg ready @ HTML Template for Creative Bloggers available on </p>
                  <strong>November 25, 2022</strong>
                </div>
              </div>
              <div class="twitter-item d-flex align-items-start">
                <i class="fab fa-twitter custom-primary me-4 mt-2"></i>
                <div class="twitter-item-content">
                  <p>Rescue - #Gutenberg ready @ HTML Template for Creative Bloggers available on </p>
                  <strong>November 25, 2022</strong>
                </div>
              </div>
              <div class="twitter-item d-flex align-items-start">
                <i class="fab fa-twitter custom-primary me-4 mt-2"></i>
                <div class="twitter-item-content">
                  <p>Rescue - #Gutenberg ready @ HTML Template for Creative Bloggers available on </p>
                  <strong>November 25, 2022</strong>
                </div>
              </div>
            </div> -->
            <!-- Twitter Feed End -->

            <!-- Instagram Start -->
            <!-- <div class="sidebar-widget widget-ig">
              <h5 class="widget-title">Instagram</h5>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                  <a href="#" class="sigma_ig-item">
                    <img src="assets/img/ig/1.jpg" alt="ig">
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                  <a href="#" class="sigma_ig-item">
                    <img src="assets/img/ig/2.jpg" alt="ig">
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                  <a href="#" class="sigma_ig-item">
                    <img src="assets/img/ig/3.jpg" alt="ig">
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                  <a href="#" class="sigma_ig-item">
                    <img src="assets/img/ig/4.jpg" alt="ig">
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                  <a href="#" class="sigma_ig-item">
                    <img src="assets/img/ig/5.jpg" alt="ig">
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                  <a href="#" class="sigma_ig-item">
                    <img src="assets/img/ig/6.jpg" alt="ig">
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                  <a href="#" class="sigma_ig-item">
                    <img src="assets/img/ig/7.jpg" alt="ig">
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                  <a href="#" class="sigma_ig-item">
                    <img src="assets/img/ig/8.jpg" alt="ig">
                  </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                  <a href="#" class="sigma_ig-item">
                    <img src="assets/img/ig/9.jpg" alt="ig">
                  </a>
                </div>
              </div>
            </div> -->
            <!-- Instagram End -->

            <!-- Popular Tags Start -->
          <!--   <div class="sidebar-widget">
              <h5 class="widget-title">Popular Tags</h5>
              <div class="tagcloud">
                <a href="#">Isabella</a>
                <a href="#">Samantha</a>
                <a href="#">Emily</a>
                <a href="#">June</a>
                <a href="#">Grace</a>
                <a href="#">Madison</a>
                <a href="#">Heather</a>
                <a href="#">Micheal</a>
              </div>
            </div> -->
            <!-- Popular Tags End -->

            <!-- Ad banner Start -->
            <!--<div class="sidebar-widget widget-ad p-0 border-0">-->
            <!--  <a href="#">-->
            <!--    <img src="assets/img/blog/ad.jpg" alt="ad">-->
            <!--    <div>-->
            <!--      <span>Add a Custom Text</span>-->
            <!--      Add Banner here-->
            <!--    </div>-->
            <!--  </a>-->
            <!--</div>-->
            <!-- Ad banner End -->

          </div>
        </div>
        <!-- Sidebar End -->

      </div>

    </div>
  </div>
  <!-- Post Content End -->
<?php include 'footer.php'; ?>