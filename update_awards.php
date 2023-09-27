<?php
include 'header.php';
 $sql = mysqli_query($conn,"SELECT * FROM `awards` WHERE `id` = '".$_GET['id']."'");
 $row = mysqli_fetch_assoc($sql);
                                       
?>


<!-- Page Wrapper -->
<div class="page-wrapper">
<div class="content container-fluid">

<!-- Page Header -->
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title"> Awards Details</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
<li class="breadcrumb-item active"> Awards Details</li>
</ul>
</div>

</div>
<!-- /Page Header -->

<div class="row">
<div class="col-md-12">
<div class="card">

<div class="card-body">
<h4 class="card-title">Awards Update Form</h4>  

                <form method="POST" action="insert.php?act=update_awards" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label>No. of Awards</label>
                            <input type="number" class="form-control" name="awards" value="<?php echo $row['awards']; ?>">
                        </div>

                    <div class="form-group">
                        <label>NO. of Guests</label>
                            <input type="number" class="form-control" name="guests" value="<?php echo $row['guests']; ?>">
                        </div>
                    <div class="form-group">
                        <label>No. of Cups of Coffee</label>
                            <input type="number" class="form-control" name="cupsofcoffee" value="<?php echo $row['cups_of_coffee']; ?>">
                        </div>
                    <div class="form-group">
                        <label>Recommendations</label>
                            <input type="number" class="form-control" name="recommendations" value="<?php echo $row['recommendations']; ?>">
                        </div>
                    <div class="form-group">
                        <button type="submit" class="controls btn btn-primary" name="save">SAVE</button>
                        <br><br>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>