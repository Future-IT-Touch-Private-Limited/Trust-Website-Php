<?php
include 'header.php';

$sql = mysqli_query($conn,"SELECT *  FROM `footer` ORDER BY `id` DESC ");
$row = mysqli_fetch_assoc($sql);
$number = mysqli_num_rows($sql);

?>
<!-- Page Wrapper -->
<div class="page-wrapper">
<div class="content container-fluid">

<!-- Page Header -->
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title"> Company Details</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
<li class="breadcrumb-item active"> Company Details</li>
</ul>
</div>
</div>
</div>
<!-- /Page Header -->

<div class="row">
<div class="col-md-12">
<div class="card">

<div class="card-body">
<h4 class="card-title">Company Details Form</h4>  

<form method="POST" action="insert.php?act=fontend_company_deatils" enctype="multipart/form-data">
<div class="row my-4">
<div class="col-md-6">
<div class="control-group">
<input type="hidden" name="number" value="<?php echo $number ?>">
<input type="hidden" name="check_true" value="<?php echo $row['id']; ?>">


<label>Phone number</label>
<div class="form-group">
<input type="text" class="form-control" name="p_name" value="<?php echo $row['contact_number']; ?>">
</div>
</div>
<div class="control-group">

<label>Email</label>
<div class="form-group">
<input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
</div>
</div>

<label>Address</label>
<div class="form-group">
<input type="text" class="form-control" name="location" value="<?php echo $row['address']; ?>">      
</div>



<?php 
$link = json_decode($row['social_link']);  ?>
<div class="control-group">

<label>socail Link</label>
<div class="input-group mb-3"><span class="input-group-text" id="basic-addon1"><i class="icon fab fa-facebook"></i></span>
    <input class="form-control" type="text" placeholder="Facebook link" name="facebook_link" value="<?php  echo $link->facebook; ?>" aria-describedby="basic-addon1">       
</div>




<div class="input-group mb-3">
<span class="input-group-text" id="basic-addon2"><i class="fab fa-twitter"></i></span><input class="form-control" type="text" placeholder="Twitter link" name="twitter_link" value="<?php  echo $link->twitter; ?>" aria-describedby="basic-addon2">         
</div>




<div class="input-group mb-3">
<span class="input-group-text" id="basic-addon3"><i class="fab fa-instagram"></i></span>
<input class="form-control" type="text" placeholder="Instagram link" name="instagram_link" value="<?php  echo $link->instagram; ?>" aria-describedby="basic-addon3">       
</div>



<div class="input-group mb-3">
<span class="input-group-text" id="basic-addon4"><i class="fab fa-youtube"></i></span><input class="form-control" type="text" placeholder="youtube link" name="youtube_link" value="<?php echo $link->youtube; ?>" aria-describedby="basic-addon4">       
</div>


<label>Add LOGO for website</label>
<div class="form-group">
<input type="file" class="form-control" name="uploadfile" value="<?php  echo $row['logo']; ?>" />

</div>


<div class="control-group">
<button type="submit" class=" form-group btn btn-primary" name="save">SAVE</button>
<br><br>
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




<?php include 'footer.php'; ?>

