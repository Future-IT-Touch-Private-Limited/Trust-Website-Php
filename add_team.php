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
<h3 class="page-title"> Team </h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
<li class="breadcrumb-item active"> Team </li>
</ul>
</div>
</div>
</div>
<!-- /Page Header -->

<div class="row">
<div class="col-md-12">
<div class="card">

<div class="card-body">
<h4 class="card-title">Add Team  Form</h4>  

              <form method="POST" action="insert.php?act=team" enctype="multipart/form-data">
                <div class="form-group">

                        <label >Team Member Name</label>
                         
                        <input type="text" class="form-control" name="name">
                    </div>
                <div class="form-group">
                    
                        <label >Title</label>
                         
                        <input type="text" class="form-control" name="title">
                    </div>
                <div class="form-group">
                   
                        <label >Mobile Number</label>
                         
                        <input type="text" class="form-control" name="mobno">
                    </div>
                <div class="form-group">
                   
                        <label >Team Member Photo </label>
                         
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

