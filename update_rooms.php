<?php
include 'header.php';
$sql = mysqli_query($conn,"SELECT * FROM `our_rooms` WHERE `id` = '".$_GET['id']."'");
$row = mysqli_fetch_assoc($sql);

 $sqler = mysqli_query($conn,"SELECT * FROM `category`");
?>



<!-- Page Wrapper -->
<div class="page-wrapper">
<div class="content container-fluid">

<!-- Page Header -->
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title"> Services Details</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
<li class="breadcrumb-item active"> Services Details</li>
</ul>
</div>

</div>
<!-- /Page Header -->

<div class="row">
<div class="col-md-12">
<div class="card">

<div class="card-body">
<h4 class="card-title">Services Details Form</h4>  

<form method="POST" action="insert.php?act=update_rooms" enctype="multipart/form-data">
<div class="form-group">
<div class="row my-4">
<div class="col-md-6">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<input type="hidden" name="img" value="<?php echo $row['our_rooms_image']; ?>">
<div class="form-group">
<label>Services Title</label>

<input type="text" class="form-control" name="title" value="<?php echo $row['our_rooms_title']; ?>">


</div>





<div class="form-group">

<label>Services Image </label>

<input type="file" class="form-control" name="uploadfile" value="<?php echo $row['our_rooms_image']; ?>">
</div>

</div>

<!--<div class="col-md-6">-->
<!--<div class="form-group">-->

<!--<label>Rating</label>-->

<!--<select class="select" name="rating"   data-default-select="<?php// echo $row['our_rooms_rating']; ?>" >-->
<!--	<option value="">-- Select --</option>-->
<!--<option value="1">1 star</option>-->
<!--<option value="2">2 stars</option>-->
<!--<option value="3">3 stars</option>-->
<!--<option value="4">4 stars</option>-->
<!--<option value="5">5 stars</option>-->
<!--</select>-->
<!--</div>-->

<div class="form-group">

<label>Services Category</label>
<select class="select"  name="category"   data-default-select="<?php echo $row['our_rooms_category']; ?>">
    <option value="">--Select Category----</option>
    <?php  while ($row = mysqli_fetch_assoc($sqler)) {
        echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
    }?>

</select>


</div>






</div>
<div class="col-12">
    

<div class="form-group">

<label>Description</label>

<textarea class="form-control" name="desc"><?php echo $row['our_rooms_desc']; ?></textarea>
</div>
<div class="form-group">
<button type="submit" class=" controls btn btn-primary" name="save">SAVE</button>
</div>
</div>


</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<?php include 'footer.php'; ?>



