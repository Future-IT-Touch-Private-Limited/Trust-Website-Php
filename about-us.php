<?php
include 'header.php';

?>
  <!-- partial -->


  <!-- partial:partia/__subheader.html -->
  <div class="sigma_subheader dark-overlay dark-overlay-2" style="background-image: url(assets/img/subheader.jpg)">

    <div class="container">
      <div class="sigma_subheader-inner">
        <div class="sigma_subheader-text">
          <h1>About Us</h1>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="btn-link" href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
          </ol>
        </nav>
      </div>
    </div>

  </div>
  <!-- partial -->

  <!-- About Start -->
  <section class="section">
    <div class="container">
       <?php  $pages_sql = mysqli_query($conn,"SELECT * FROM `pages` where `page_name` = 'Our_about_inner'");
                  $pages_new = mysqli_fetch_assoc($pages_sql); 

                 
                ?>

      <div class="row align-items-center">
        <div class="col-lg-6 d-none d-lg-block basic-dot-slider light-dots">
            
             <?php
                  $query_data = "SELECT * FROM home_silder where `silder_category` ='about_slider_section1' ORDER BY id ASC";
                   $home_banner2_result = mysqli_query($conn, $query_data);
                ?>
                     <?php 
                      $i = 0;
                           while($row = mysqli_fetch_assoc($home_banner2_result)){
                      ?>
                         <div class="carousel-item <?php if($i == 0) { echo 'active';  }?>">
                             <img src="images/<?php echo $row['image']; ?>" alt="img">
                          </div>

                        <?php $i++; } ?>
            
        </div>
        <div class="col-lg-6">
          <div class="me-lg-30">
            <div class="section-title mb-0 text-start">
              <h4 class="title"><?php echo $pages_new['content']; ?></h4>
            </div>
            
            
          </div>
        </div>
      </div>

    </div>
  </section>
    <section class="section">
    <div class="container">

      <div class="row align-items-center">

        

        <div class="col-lg-12">
            <img src="assets/img/b2.jpg" alt="service">
        </div>

      </div>

    </div>
  </section>
  <!-- About End -->
  <?php  $pages_sql_main = mysqli_query($conn,"SELECT * FROM `pages` where `page_name` = 'Our_about_main'");
                  $pages_new_main = mysqli_fetch_assoc($pages_sql_main); 

                 
                ?>
  <!-- History Start -->
  <div class="section light-bg">
    <div class="container">
 <h4><?php echo $pages_new_main['content'] ?></h4>
     

      </div>

    </div>
  </div>
  <!-- History End -->
  


  <!-- About Start -->
  <section class="section">
    <div class="container">

      <div class="row align-items-center">

        <div class="col-lg-6">
          <div class="me-lg-30">
            <div class="section-title mb-0 text-start">
              <p class="subtitle">Our Approach</p>
              <h4 class="title">Our mission is to share the Good of Hinduism</h4>
            </div>
            <p class="blockquote bg-transparent"> We are a Hindu that belives in Lord Rama and Vishnu Deva the followers and We are a Hindu that belives in Lord Rama and Vishnu Deva. </p>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> <i class="fas fa-om"></i> Holi </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> <i class="far fa-church"></i> Temple</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"> <i class="far fa-user"></i> Pandit</a>
              </li>
            </ul>

            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>
                  Our mission is to share the Good of Hinduism, Loving, Faith and Serving. People ask questions related to Hinduism. Temple is a place where Hindu worship our Bhagwan Ram, Shiva, Vishnu, Krishna etc. Proin eget tortor industry's standard dummy text ever
                </p>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p>
                  Our mission is to share the Good of Hinduism, Loving, Faith and Serving. People ask questions related to Hinduism. Temple is a place where Hindu worship our Bhagwan Ram, Shiva, Vishnu, Krishna etc. Proin eget tortor industry's standard dummy text ever
                </p>
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <p>
                  Our mission is to share the Good of Hinduism, Loving, Faith and Serving. People ask questions related to Hinduism. Temple is a place where Hindu worship our Bhagwan Ram, Shiva, Vishnu, Krishna etc. Proin eget tortor industry's standard dummy text ever
                </p>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-6 basic-dot-slider light-dots">
           
                
                 <?php
                  $query_data = "SELECT * FROM home_silder where `silder_category` ='about_slider_section2' ORDER BY id ASC";
                  $home_banner2_result = mysqli_query($conn, $query_data);
                ?>
                     <?php 
                    
                           while($row = mysqli_fetch_assoc($home_banner2_result)){
                      ?>
                         <div class="carousel-item">
                             <img src="images/<?php echo $row['image']; ?>" alt="service" style="width:400px;">
                          </div>

                        <?php } ?>
                
                
        
        </div>

      </div>

    </div>
  </section>
  <!-- About End -->
  
  

  <!-- Form Start -->
 <!-- <div class="section dark-overlay dark-overlay-3 bg-cover bg-center bg-norepeat" style="background-image: url(assets/img/bg1.jpg)">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-lg-30">
          <form method="post">
            <div class="form-row">
              <div class="col-lg-6">
                <div class="form-group">
                  <i class="far fa-user"></i>
                  <input type="text" class="form-control transparent" placeholder="First Name" name="fname" value="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <i class="far fa-user"></i>
                  <input type="text" class="form-control transparent" placeholder="Last Name" name="lname" value="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <i class="far fa-pencil"></i>
                  <input type="text" class="form-control transparent" placeholder="Subject" name="subject" value="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <i class="far fa-envelope"></i>
                  <input type="text" class="form-control transparent" placeholder="Email Address" name="email" value="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <textarea name="message" class="form-control transparent" placeholder="Enter Message" rows="4"></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <button type="submit" class="sigma_btn-custom d-block w-100" name="button"> Get a Quote <i class="far fa-arrow-right"></i> </button>
              </div>
            </div>
          </form>
        </div>
             <div class="col-lg-6">
          <div class="row">
           
             <?php
      $sql = "SELECT * FROM `small_gallery`";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {?>
         
            
             
               <div class="col-lg-6">
              <div class="sigma_client">
                <img src="images/<?php echo $row['small_gallery_image'] ?>" alt="" width="270" height="195" />
              </div>
              </div>   
           
            <div class="col-lg-6">
              <div class="sigma_client">
               <img src="images/<?php echo $row['small_gallery_image'] ?> " alt="" width="270" height="195" />
              </div>
            </div>
<?php }
}
?>
           
            </div>
          </div>
      </div>
    </div>
  </div>-->
  <!-- Form End -->

  <!-- Blog Start -->
  <div class="section section-padding">
    <div class="container">

      <div class="section-title text-center">
        <p class="subtitle">Blog</p>
        <h4 class="title">News Feed</h4>
      </div>

      <div class="row">

 <?php $sql_list = mysqli_query($conn,"SELECT * FROM `blogs` limit 3" );
            while($list = mysqli_fetch_assoc($sql_list)){ ?>

        <!-- Article Start -->
        <div class="col-lg-4 col-md-6">
          <article class="sigma_post">
            <div class="sigma_post-thumb">
             <a href="blog-details.php?details=<?php echo $list['id']; ?>">
                        <img src="images/<?php echo $list['photo']; ?>" alt="post">
                      </a>
            </div>
            <div class="sigma_post-body">
              <div class="sigma_post-meta">
                <div class="me-3">
                  <i class="fas fa-om"></i>
                  <a href="blog-details.php" class="sigma_post-category">Temple</a>,
                  <a href="blog-details.php" class="sigma_post-category">Love</a>
                </div>
                <a href="blog-details.php?details=<?php echo $list['id']; ?>" class="sigma_post-date"> <i class="far fa-calendar"></i> <?php echo $list['date']; ?></a>
              </div>
              <h5> <a href="blog-details.php?details=<?php echo $list['id']; ?>"><?php echo $list['title']; ?></a> </h5>
              <div class="sigma_post-single-author">
                <img src="assets/img/people/1.jpg" alt="author">
                <div class="sigma_post-single-author-content">
                  By <p>Miha Boukor</p>
                </div>
              </div>
            </div>
          </article>
        </div>
          <?php } ?>
        <!-- Article End -->

        <!-- Article Start -->
        
        <!-- Article End -->

      </div>

    </div>

    <div class="spacer spacer-bottom spacer-lg light-bg pattern-triangles"></div>

  </div>
  <!-- Blog End -->

  <?php
include 'footer.php';

?>