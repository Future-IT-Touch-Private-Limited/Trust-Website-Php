<?php
include 'header.php';
 $sql = mysqli_query($conn,"SELECT * FROM `category` WHERE `id` = '".$_GET['id']."'");
 $row = mysqli_fetch_assoc($sql);
                                       
?>


<!-- Page Wrapper -->
<div class="page-wrapper">
<div class="content container-fluid">

<!-- Page Header -->
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title"> Category Details</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
<li class="breadcrumb-item active"> Category Details</li>
</ul>
</div>

</div>
<!-- /Page Header -->

<div class="row">
<div class="col-md-12">
<div class="card">

<div class="card-body">
<h4 class="card-title">Category Update Form</h4>  

                <form method="POST" action="insert.php?act=update_category" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="img" value="<?php echo $row['image']; ?>">
                    <div class="form-group">
                        <label>Title</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
                        </div>

                    
                    <div class="form-group">
                        <label>Image</label>
                          
                        <input type="file" class="form-control" name="uploadfile" value="" />
                        </div>
                    
                    <div class="form-group">
                        <button type="submit" class="controls btn btn-primary" name="save">SAVE</button>
                        <br><br>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>