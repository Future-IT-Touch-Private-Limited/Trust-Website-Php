<?php include 'header.php' ?>
<style type="text/css">
  .gallery-title {
    padding: 40px;
    font-size: 36px;
    font-weight: bold;
}
.gallery-col h5{margin-bottom: 5px;}
</style>
  <!-- partial:partia/__subheader.html -->
  <div class="sigma_subheader dark-overlay dark-overlay-2" style="background-image: url(assets/img/subheader.jpg)">

    <div class="container">
      <div class="sigma_subheader-inner">
        <div class="sigma_subheader-text">
          <h1>Gallery</h1>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="btn-link" href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
          </ol>
        </nav>
      </div>
    </div>

  </div>
  <!-- partial -->

  <!-- Categories Start -->
  <div class="section section-padding">
    <div class="container">
<?php 
  $catID = $_GET['catid']; 
     $catsql = "SELECT * FROM `category` WHERE `id` = '$catID' limit 1";
      $catresult = mysqli_query($conn, $catsql);
      $catdata = mysqli_fetch_assoc($catresult);
?>
      <div class="row mb-5">
        <div class="gallery-title"><?= $catdata['name']; ?></div>
          <?php
   
         
           
            $imagesql = "SELECT * FROM `our_rooms` WHERE  `category_id` = '$catID' ORDER BY `id` DESC";
              $imageresult = mysqli_query($conn, $imagesql);
              while ($row = mysqli_fetch_assoc($imageresult)) {
          ?>
          <div class="col-md-4 col-xs-12 gallery-col">

              <?php if($row['our_rooms_image'] != NULL){ ?>
                <img class="img-thumbnail" src="images/<?php echo $row['our_rooms_image'] ?>">
            <?php } else { ?>
                <iframe src="<?= $row['our_video_url']; ?>"></iframe>
            <?php } ?>
           
         </div>
        <?php }  ?>
       </div> 
  </div>
  <!-- Categories End -->

  <!-- Form Start -->
  <!--<div class="section dark-overlay dark-overlay-3 bg-cover bg-center bg-norepeat" style="background-image: url(assets/img/bg1.jpg)">
    <div class="container">
       <?php   

       
         $sql = "SELECT * FROM `footer`";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
      <div class="row align-items-center">
        <div class="col-lg-6 mb-lg-30">
          <form method="post" action="admin/insert.php?act=contact_form_fonted">
            <div class="form-row">
              <div class="col-lg-6">
                <div class="form-group">
                  <i class="far fa-user"></i>
                  <input  class="form-control transparent" placeholder="First Name" type="text" name="name" value="">
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
                  <input type="text" class="form-control transparent" placeholder="Phone Number" type="text" name="phone" value="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <i class="far fa-envelope"></i>
                  <input type="email" class="form-control transparent" placeholder="Email Address" name="email" value="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <textarea name="message" class="form-control transparent" placeholder="Enter Message" rows="4"></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <button type="submit" name="save" class="sigma_btn-custom d-block w-100" > Get a Quote <i class="far fa-arrow-right"></i> </button>
              </div>
            </div>
          </form>
        <?php }} ?>
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
    </div>
  </div>-->
  <!-- Form End -->

  <!-- Blog Start -->
  <div class="section section-padding" style="display: none;">
    <div class="container">

      <div class="section-title text-center">
        <p class="subtitle">Blog</p>
        <h4 class="title">News Feed</h4>
      </div>

      <div class="row">

 <?php $sql_list = mysqli_query($conn,"SELECT * FROM `blogs` limit 3" );
            while($list = mysqli_fetch_assoc($sql_list)){?>

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

    

  </div>
  <!-- Blog End -->

  <!-- Back To Top Start -->
  <div class="sigma_top style-5">
    <i class="far fa-angle-double-up"></i>
  </div>
  <!-- Back To Top End -->

  <!-- Audio Box Start -->

  <!-- <div class="sigma_audio-box">
    <div id="audio-btn">
      <i class="fa fa-play"> </i>
      <i class="fa fa-music"></i>
    </div>
  </div> -->

  <!-- Audio Box End -->

 <?php
include 'footer.php';

?>