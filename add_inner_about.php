<?php
include 'header.php';

 $sql = mysqli_query($conn,"SELECT * FROM `pages`");
 


?>

<!-- Page Wrapper -->
<div class="page-wrapper">
<div class="content container-fluid">

<!-- Page Header -->
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title"> About Inner Pages</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
<li class="breadcrumb-item active"> About Pages</li>
</ul>
</div>
</div>
</div>
<!-- /Page Header -->

<div class="row">
<div class="col-md-12">
<div class="card">

<div class="card-body">
<h4 class="card-title">Company Pages Form</h4>  

              <form method="POST" action="insert.php?act=add_pages" enctype="multipart/form-data">

                <?php while ($row = mysqli_fetch_assoc($sql)) { ?>


                    <div class="form-group row">
<label class="col-form-label col-md-2"><?php echo str_replace('_',' ',$row['page_name']) ?></label>
<div class="col-md-10">
<textarea rows="10" cols="10" class="form-control"   name="<?php echo $row['page_name'] ?>"><?php echo $row['content'] ?></textarea>
</div>
</div>


               

            <?php } ?>


                <div class="control-group">
                    <button type="submit" class=" controls btn btn-primary" name="save">SAVE</button>
                    <br><br>
                </div>
            </form>    
        </div>
    </div>
</div>
</div>


<?php include 'footer.php'; ?>

