<?php include 'header.php';

$q = $_GET['details'];
if(isset($q)){
$blog = mysqli_query($conn,"SELECT * FROM `news` LEFT JOIN `user_data` ON `user_data`.`id`= `news`.`author` WHERE `news`.`id` = '$q'");
$details = mysqli_fetch_assoc($blog);
}
 ?>

  <!-- partial:partia/__subheader.html -->
  <div class="sigma_subheader dark-overlay dark-overlay-2" style="background-image: url(assets/img/subheader.jpg)">

    <div class="container">
      <div class="sigma_subheader-inner">
        <div class="sigma_subheader-text">
          <h1><?php echo $details['title'] ?></h1>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="btn-link" href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $details['title'] ?></li>
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

        <div class="col-lg-12">
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
              <h5>Related News</h5>
              <div class="row">
                 <?php $sql_list = mysqli_query($conn,"SELECT * FROM `news`");
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



          </div>
        </div>

        

      </div>

    </div>
  </div>
  <!-- Post Content End -->
<?php include 'footer.php'; ?>