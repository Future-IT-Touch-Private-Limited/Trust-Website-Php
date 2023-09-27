<?php
include 'header.php';
?>


<!-- Page Wrapper -->
<div class="page-wrapper">
<div class="content container-fluid">

<!-- Page Header -->
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title"> Slider </h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
<li class="breadcrumb-item active"> Slider </li>
</ul>
</div>
</div>
</div>
<!-- /Page Header -->

<div class="row">
<div class="col-md-12">
<div class="card">

<div class="card-body">
<h4 class="card-title">Add Slider  Form</h4>  

              <form method="POST" action="insert.php?act=banner" enctype="multipart/form-data">
                <div class="form-group">

                        <label >Title</label>
                         
                        <input type="text" class="form-control" name="title">
                    </div>
                <div class="form-group">
                    
                        <label >Sub Title</label>
                         
                        <input type="text" class="form-control" name="sub_title">
                    </div>
                    <div class="form-group">
                    
                        <label >category</label>
                        <select class="select" name="silder_category" >
                    	<option value="">-- Select --</option>
                        <option value="main_silder">Home Page Silder</option>
                        <option value="home_banner_2_section">Home Banner 2</option>
                        <option value="home_banner_3_section">Home Banner 3</option>
                         <option value="about_slider_section1">About Slider 1</option>
                          <option value="about_slider_section2">About Slider 2</option>
                        <option value="home_about">Home About Images</option>
                        <option value="home_serivces">Home Services</option>
                        <option value="home_progress">Home progress</option>
                        <option value="about_page">About images</option>
                        <option value="about_approch">About approch</option>
                        </select>

                    </div>
                <div class="form-group">
                   
                        <label>Image</label>
                         
                        <input type="file" class="form-control" name="uploadfile" value="" />
                    </div>
                
                <div class="form-group">
                    <button type="submit" class=" controls btn btn-primary" name="save">SAVE</button>
                    <br><br>
                </div>
            </form>    
        </div>
    </div>
</div>
</div>


<?php include 'footer.php'; ?>

