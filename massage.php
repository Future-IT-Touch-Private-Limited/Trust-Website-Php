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
<h3 class="page-title">Message</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Dashboard</a>
</li>
<li class="breadcrumb-item active">Message</li>
</ul>
</div>

</div>
</div>

<?php echo $_SESSION['msg']; ?>
<div class="row">
<div class="col-sm-12">
<div class="card card-table"> 
<div class="card-body">

<div class="table-responsive">
<table class="table table-stripped table-hover datatable">
<thead class="thead-light">
<tr>
<th>ID</th>
<th>Name</th>
<th>Message</th>
<th>Phone number & Email</th>
<th>Date</th>

</tr>
</thead>
<tbody>
<?php  $sql = mysqli_query($conn,"SELECT * FROM `contact_us`");
$i=1;
while ($row = mysqli_fetch_assoc($sql)) {



?>
<tr class="gradeA odd">
<td class="sorting_1"><?php echo $i++; ?></td>
<td class=" "><?php echo $row['name'] ?></td>
<td class=" "><?php echo $row['massage']; ?></td>
<td class="center "><?php echo $row['phone'].'<br>'.$row['email']; ?></td>
<td class="center "><?php echo $row['added_by']; ?></td>
</tr>
<?php } ?>
</tfoot>
</table>
</div>
</div><!--/.module-->


</div>
</div>
</div>
</div>


<?php include 'footer.php';?>