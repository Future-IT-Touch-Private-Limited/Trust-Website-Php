<?php include 'header.php'; 

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
<h3 class="page-title">Awards</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index">Dashboard</a>
</li>
<li class="breadcrumb-item active">Awards</li>
</ul>
</div>
<div class="col-auto">
<a href="add_awards.php" class="btn btn-primary mr-1"> 
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
<?php echo $_SESSION['msg']; ?>
<div class="row">
<div class="col-sm-12">
<div class="card card-table"> 
<div class="card-body">

<div class="table-responsive">
<table class="table table-stripped table-hover datatable">
<thead class="thead-light">
<tr>
<th>Sr.No.</th>
<th>Awards</th>
<th>Guests</th>
<th>Cups of Coffee</th>
<th>Recommendations</th>
<th class="text-right">Actions</th>
<!--    <th class="text-right">Action</th> -->
</tr>
</thead>
<tbody>
<?php 

$sql = "SELECT * FROM awards ";
$result = mysqli_query($conn,$sql) or mysqli_close($conn);


$counter = 1;
while($row = mysqli_fetch_assoc($result)) {




?>
<tr>

<td><?php echo $counter++; ?></td>
<td><?php echo $row['awards']; ?></td>
<td><?php echo $row['guests']; ?></td>
<td><?php echo $row['cups_of_coffee']; ?></td>
<td><?php echo $row['recommendations']; ?></td>


<td class="text-center">
    <a class="btn btn-sm btn-white text-success mr-2" href='update_awards.php?id=<?php echo $row['id']; ?>' style='padding-right:10px;'><i class="far fa-edit mr-2"></i>Edit</a> 
<a  class="btn btn-sm btn-white text-danger "  href='view_awards.php?page=awards&id=<?php echo $row['id']; ?>'><i class="far fa-trash-alt mr-2"></i>Delete</a>

</td>

    
</td>

</tr>
<?php } ?>
</tbody>
</table>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
<!-- /Page Wrapper -->

</div>



<?php include 'footer.php'; ?>