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
<h3 class="page-title">Donation</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Dashboard</a>
</li>
<li class="breadcrumb-item active">Donation Message</li>
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
<th>Name </th>
<th>Price</th>
<th>Message</th>
<th>Payment Status</th>
<th>Date</th>
<th>Address</th>
<th>Pan Number</th>
<th>donation date</th>
<th>location</th>
<th>Print</th>


</tr>
</thead>
<tbody>
<?php  $sql = mysqli_query($conn,"SELECT * FROM `donation` ORDER BY `id` DESC");
$i=1;
while ($row = mysqli_fetch_assoc($sql)) {



?>
<tr class="gradeA odd">
<td class="sorting_1"><?php echo $i++; ?></td>
<td class="center "><?php echo $row['donation_name'].'<br>'.$row['donation_email']; ?></td>
<td class="center "><?php echo $row['donation_price'].'<br>'.$row['donation_option']; ?></td>
<td class=" "><?php echo $row['donation_message']; ?></td>
<td class="center "><?php echo $row['donation_status'] ?></td>
<td class="center "><?php echo $row['added_date']; ?></td>
<td class="center "><?php echo $row['donation_address'] ?></td>
<td class="center "><?php echo $row['donation_pan_number'] ?></td>
<td class="center "><?php echo $row['donation_date'] ?></td>
<td class="center "><?php echo $row['donation_location'] ?></td>
<td><a class='btn btn-sm btn-white text-primary mr-2' href='invoice.php?id=<?php echo $row['id']; ?>'  style='padding-right:10px;'><i class='far fa-print mr-2'></i>Print</a> </td>
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