<?php
include 'header.php';

if (isset($_GET['id'])) {

$table = $_GET['page'];
$id = $_GET['id'];
delete_id($table,$id);

}
?>
<!-- Page Wrapper -->
<div class="page-wrapper">
<div class="content container-fluid">

<!-- Page Header -->
<div class="page-header">
<div class="row align-items-center">
<div class="col"> 
<h3 class="page-title">Services</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index">Dashboard</a>
</li>
<li class="breadcrumb-item active">Services</li>
</ul>
</div>
<div class="col-auto">
<a href="add_rooms.php" class="btn btn-primary mr-1"> 
<i class="fas fa-plus"></i>
ADD
</a>

</div>
</div>
</div>

<!-- Search Filter -->
<div id="filter_inputs" class="card filter-card">
<div class="card-body pb-0">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Customer:</label>
<input type="text" class="form-control">
</div>
</div>

</div>
</div>
</div>
<!-- /Search Filter -->

<div class="row">
<div class="col-sm-12">
<div class="card card-table"> 
<div class="card-body">

<div class="table-responsive">
<table class="table table-stripped table-bordered table-hover datatable">
<thead class="thead-light">
<tr>
<th>Sr.No.</th>
<th>Title</th>
<th>Category</th>

<th >Image</th>
<th >Actions</th>
</tr>
</thead>
<tbody>

<?php
 $sql = "SELECT * FROM our_rooms LEFT JOIN `category`
ON our_rooms.category_id = category.id ORDER BY our_rooms.id DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
$counter = 1;
while ($row = mysqli_fetch_assoc($result)) { 
    //print_r($row);
     if($row['our_rooms_image'] != NULL) { 
        $galimage ='<img src="../images/' . $row['our_rooms_image'] .'" style="height:100px;width:100px;margin:0px;padding:0px;"" />';
} else { 
      $galimage ='<img src="https://www.freepnglogos.com/uploads/youtube-vector-logo-png-9.png" style="height:100px;width:100px;margin:0px;padding:0px;"" />';
}
echo "<tr>
<td>" . $counter . "</td>
<td>" . $row['our_rooms_title'] . "</td>
<td>" . $row['name'] . "</td>

<td>
   ". $galimage ."
</td>
<td>
<a class='btn btn-sm btn-white text-success mr-2'href='update_rooms.php?id=" . $row['id'] . "' style='padding-right:10px;'><i class='far fa-edit mr-2'></i>Edit</a> 
<a   class='btn btn-sm btn-white text-danger ' href='view_rooms.php?page=our_rooms&id=" . $row['id'] . "'><i class='far fa-trash-alt mr-2'></i>Delete</a></td>
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