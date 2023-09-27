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
<h3 class="page-title"> Category </h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
<li class="breadcrumb-item active"> Category </li>
</ul>
</div>
</div>
</div>
<!-- /Page Header -->

<div class="row">
<div class="col-md-12">
<div class="card">

<div class="card-body">
<h4 class="card-title">Add Category  Form</h4>  

              <form method="POST" action="insert.php?act=category" enctype="multipart/form-data">
                <div class="form-group">

                        <label >Category name</label>
                         
                        <input type="text" class="form-control" name="name">
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

