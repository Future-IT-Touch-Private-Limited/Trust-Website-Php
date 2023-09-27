<?php
include 'header.php';
?>

<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <br><br>
                <h1>Add Small Gallery Images for homepage</h1>
            </div>
            <div class="form-horizontal row-fluid">
              <form method="POST" action="insert.php?act=small_gallery" enctype="multipart/form-data">
                    <div class="control-group">
                      
                            <label class="control-label">Add Small Gallery Images for homepage</label>
                              <div class="controls">
                              <input type="file" name="uploadfile" value="" />
                        </div>
                    </div>
                    <div class="control-group">
                        <button type="submit" class=" controls btn btn-primary" name="save">SAVE</button>
                        <br><br>
                    </div>
                </form>    
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>

