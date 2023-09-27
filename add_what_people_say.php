<?php
include 'header.html';
?>

<!-- Page Wrapper -->
<div class="page-wrapper">
<div class="content container-fluid">

<!-- Page Header -->
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title"> Testimonial </h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active"> Testimonial </li>
</ul>
</div>
</div>
</div>
<!-- /Page Header -->

<div class="row">
<div class="col-md-12">
<div class="card">

<div class="card-body">
<h4 class="card-title">Add Testimonial  Form</h4>  

              <form method="POST" action="insert.html?act=whatpeoplesay" enctype="multipart/form-data">
                <div class="form-group">
<div class="row my-4">
<div class="col-md-6">
                <div class="form-group">
                   
                        <label>People Name</label>
                        
                         <input type="text" class="form-control" name="name">
                    </div>
                <div class="form-group">
                   
                        <label>Description<br> (what people says)</label>
                        
            <textarea class="form-control" name="desc"></textarea>
                    </div>
                <div class="form-group">
                    
                        <label>People Photo </label>
                       
            <input type="file" class="form-control" name="uploadfile" value="" />
                    </div>
                <!-- <div class="form-group">
                    
                        <label>Team Member Photo </label>
                       
                        <input type="file" name="uploadfile" value="" />
                    </div> -->
                <div class="form-group">
                    <button type="submit" class=" controls btn btn-primary" name="save">SAVE</button>
                    <br><br>
                </div>
            </form>    
        </div>
    </div>
</div>
</div>


<?php include 'footer.html'; ?>

