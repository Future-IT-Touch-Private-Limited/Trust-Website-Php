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
<h3 class="page-title">Add Awards, Guests & Cups of Coffee</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
<li class="breadcrumb-item"><a href="view_awards.php">Awards</a></li>
<li class="breadcrumb-item active">Add Awards, Guests & Cups of Coffee</li>
</ul>
</div>
</div>
</div>
<!-- /Page Header -->

<div class="row">
<div class="col-md-12">
<div class="card">

<div class="card-body">
<h4 class="card-title">Add Awards, Guests & Cups of Coffee</h4>  
<form method="POST" action="insert.php?act=awards" enctype="multipart/form-data">
<div class="row my-4">
<div class="col-md-6">
<div class="form-group">
<label>No. of Awards</label>
<div class="form-group">
<input type="number" class="form-control" name="awards">
</div>
</div>

<div class="form-group">
<label>NO. of Guests</label>
<div class="form-group">
<input type="number" class="form-control" name="guests">
</div>
</div>
<div class="form-group">
<label>No. of Cups of Coffee</label>
<div class="form-group">
<input type="number" class="form-control" name="cupsofcoffee">
</div>
</div>
<div class="form-group">
<label>Recommendations</label>
<div class="form-group">
<input type="number" class="form-control" name="recommendations">
</div>
</div>
<div class="form-group">
<button type="submit" class="form-group btn btn-primary" name="save">SUMBIT</button>
<br><br>

</div>
</form>
</div>
</div>
</div>
</div>


<?php include 'footer.php'; ?>