<?php include 'header.php' ?>


  <!-- partial:partia/__subheader.html -->
  <div class="sigma_subheader dark-overlay dark-overlay-2" style="background-image: url(assets/img/subheader.jpg)">

    <div class="container">
      <div class="sigma_subheader-inner">
        <div class="sigma_subheader-text">
          <h1>Blog Grid</h1>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="btn-link" href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog Grid</li>
          </ol>
        </nav>
      </div>
    </div>

  </div>
  <!-- partial -->

  <div class="section">
    <div class="container">

      <div class="row">

        <div class="col-lg-4">
          <div class="sidebar">

            <!-- Search Widget Start -->
            <div class="sidebar-widget widget-search">
              <h5 class="widget-title">Search</h5>
              <form method="get">
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
            <!-- <div class="sidebar-widget widget-twitter">
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

          </div>
        </div>

        <div class="col-lg-8">
          <div class="row">


            <?php
            $q = $_GET['q'];
             $sql_grid = mysqli_query($conn,"SELECT `blogs`.`id` AS `blog_id`, `image`,`name`,`photo`,`blog_categories_id`,`blog_categories_name`,`date` FROM `blogs` LEFT JOIN `blog_categories` ON `blog_categories`.`blog_categories_id`= `blogs`.`category` LEFT JOIN `user_data` ON `user_data`.`id`= `blogs`.`author` WHERE `title` LIKE '%$q%'");
             if(mysqli_num_rows($sql_grid)>0){
            while($grid = mysqli_fetch_assoc($sql_grid)){

             ?>
         
            <!-- Article Start -->
            <div class="col-md-6">
              <article class="sigma_post">
                <div class="sigma_post-thumb">
                  <a href="blog-details.php?details=<?php echo $grid['blog_id'] ?>">
                    <img src="images/<?php echo $grid['photo']; ?>" alt="post">
                  </a>
                </div>
                <div class="sigma_post-body">
                  <div class="sigma_post-meta">
                    <div class="me-3">
                      <i class="fas fa-om"></i>
                      <a href="blog-details.php?details=<?php echo $grid['blog_id'] ?>" class="sigma_post-category"><?php echo $grid['blog_categories_name']; ?></a>
                    </div>
                    <a href="blog-details.php?details=<?php echo $grid['blog_id'] ?>" class="sigma_post-date"> <i class="far fa-calendar"></i> <?php echo $grid['date']; ?></a>
                  </div>
                  <h5> <a href="blog-details.php?details=<?php echo $grid['blog_id'] ?>"><?php echo $grid['title']; ?></a> </h5>
                  <div class="sigma_post-single-author">
                    <img src="images/<?php echo $grid['image']; ?>" alt="author">
                    <div class="sigma_post-single-author-content">
                      By <p><?php echo $grid['name']; ?></p>
                    </div>
                  </div>
                </div>
              </article>
            </div>
            <!-- Article End -->
          <?php    } 
          }else{
            echo '<h2>Not Post Found</h2>';
          } ?>

          

          </div>
          <!-- Pagination Start -->
         <!--  <ul class="pagination mb-0">
            <li class="page-item"><a class="page-link" href="#"> <i class="far fa-chevron-left"></i> </a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#"> <i class="far fa-chevron-right"></i> </a></li>
          </ul> -->
          <!-- Pagination End -->

        </div>

      </div>

    </div>
  </div>


<?php include 'footer.php' ?>