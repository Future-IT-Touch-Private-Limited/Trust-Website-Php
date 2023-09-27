<?php
include 'header.php';

 $sql = mysqli_query($conn,"SELECT * FROM `what_people_say` WHERE `id` = '".$_GET['id']."'");
 $row = mysqli_fetch_assoc($sql);
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
<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
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
<h4 class="card-title">Update Testimonial  Form</h4>  

              <form method="POST" action="insert.php?act=update_whatpeoplesay" enctype="multipart/form-data">
               <div class="form-group">
<div class="row my-4">
<div class="col-md-6">
                   <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                   <input type="hidden" name="img" value="<?php echo $row['people_photo']; ?>">
                        <label class="control-label">People Name</label>
                         <div class="form-group">
                         <input type="text" class="form-control" name="name" value="<?php echo $row['people_name']; ?>">
                    </div>
                      <div class="form-group">
                   
                        <label>Description<br> (what he says)</label>
                         <div class="form-group">
            <textarea class="form-control" rows="5" name="desc"><?php echo $row['people_desc']; ?>
                    </textarea>
                </div>
                <div class="form-group">
                    
                        <label class="control-label">People Photo </label>
                        <div class="controls">
                        </div>
                        <input type="hidden" name="img" value="<?php echo $row['people_photo']; ?>">
            <input type="file" class="form-control" name="uploadfile">
                    </div>
                </div>
                
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

