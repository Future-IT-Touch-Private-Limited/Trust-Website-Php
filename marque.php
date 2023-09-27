<?php require 'header.php'; ?>

	<?php 
	
	    if(isset($_POST['submit_marquee']))
	    {
	        $marquee_text = strip_tags($_POST['marquee_text']);
	      
	        $sql = "UPDATE `marquee_setting` SET `marquee_text` = '$marquee_text' WHERE `id` = '1'"; 
	        if(mysqli_query($conn, $sql) == TRUE){
	               $success = 'Marquee Updated Successfully!'; 
	        }
	    }
	    
	    $sql = "SELECT * FROM marquee_setting limit 1";
    	$result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $marquee_text = $row['marquee_text'];
        }
        
        
	?>
			<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid">

					<div class="row">
			
								
									<div class="col-xl-12">
										<div class="w-md-100 align-items-center mb-3 p-3">
											<h4>Home Page Marque Seting</h4>
											
										</div>
									</div>
									
					<div class="col-xs-12">
					    <?php if(isset($success)) { ?>
                					    <div class="alert alert-success" role="alert">
                  <?= $success; ?>
                </div>
					    <?php } ?>
					    <form method="post" action="">
					        <div class="form-group">
					            <label>Marquee Text</label>
					            <textarea name="marquee_text" class="form-control"><?php echo htmlspecialchars($marquee_text);?></textarea>
					        </div>
					        <div class="form-group">
					            <button class="btn btn-info" name="submit_marquee">Submit</button>
					        </div>
					    </form>
					</div>
					
					</div>
					
</div>
</div>
<?php require 'footer.php' ?>