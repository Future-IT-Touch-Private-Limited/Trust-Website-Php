<?php
include 'header.php';

if (isset($_GET['id'])) {

$table = $_GET['page'];
$id = $_GET['id'];
delete_id($table,$id);


}
?>
<div class="page-wrapper">
<div class="content container-fluid">

<!-- Page Header -->
<div class="page-header">
<div class="row align-items-center">
<div class="col"> 
<h3 class="page-title">Gallery</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index">Dashboard</a>
</li>
<li class="breadcrumb-item active">Gallery</li>
</ul>
</div>
<div class="col-auto">

<a class="btn btn-primary filter-btn" href="javascript:void(0);" id="filter_search">
<i class="fas fa-plus"></i> Add Gallery
</a>
</div>
</div>
</div>
<!-- /Page Header -->

<!-- Search Filter -->
<div id="filter_inputs" class="card filter-card">
<div class="card-body pb-0">
<div class="row">
<div class="col-sm-6 col-md-6">
<div class="form-group">
<form method="POST" action="insert.php?act=small_gallery" enctype="multipart/form-data">
<label>ADD IMAGE FOR GALLERY</label>
<input class="form-control" name="uploadfile" type="file">
</div>

<div class="control-group">
<button type="submit" class=" controls btn btn-primary" name="save">SAVE</button>
<br><br>
</div>
</div>
</div>

</div>
</div>
<!-- /Search Filter -->

<!-- /Search Filter -->
<?php echo $_SESSION['msg']; ?>
<div class="row">
<div class="col-sm-12">
<div class="card card-table"> 
<div class="card-body">

<div class="table-responsive">
<table class="table table-stripped table-hover datatable text-center">
<thead class="thead-light">
<tr>
<th>Sr.No.</th>
<th>Footer Gallery Image</th>
<th class="text-center">Actions</th>
<!--    <th class="text-right">Action</th> -->
</tr>
</thead>
<tbody >
<?php
$sql = "SELECT * FROM small_gallery ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
$counter = 1;
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>" . $counter . "</td>
<td><img src='../images/" . $row['small_gallery_image'] . "' style='height:100px;width:100px;margin:0px;padding:0px;' /></td>
<td><a class=' btn btn-sm btn-white text-danger ' href='view_gallery.php?page=small_gallery&id=" . $row['id'] . "'><i class='far fa-trash-alt mr-2'></i>Delete</a></td>
</tr>";
$counter++;
}
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
<script>
$(document).ready(function() {
$('#table_id').DataTable();
});
</script>

<?php include 'footer.php'; ?>