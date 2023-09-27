<?php
include 'header.php';

if (isset($_GET['id'])) {
    
    $table = $_GET['page'];
    $id = $_GET['id'];
    delete_id($table,$id);
    

}
?>
<style>
    table,
    th,
    td {
        border: 1px solid #ddd;
        text-align: center;
        ;
    }

    th {
        color: white;
        background-color: #85c1e9 !important;
    }
    table{
        margin-left: 20px;
    }
</style>

<div class="span9">
    <?php echo $msg; ?>
    <div class="content">
        <div class="module">
            <div class="module-head">
                <!-- <h3>View Awards</h3> -->
                <h1 style="text-align: center;">Footer - View</h1>
            </div>
            <div class="form-horizontal row-fluid">
                <table id="table_id">
                    <thead>
                        <tr>
                            <th style="min-width: 60px;">Sr.No.</th>
                            <th style="min-width: 120px;">Contact No.</th>
                            <th style="min-width: 100px;">Social Link</th>
                            <th style="min-width: 130px;">Address</th>
                            <th style="min-width: 130px;">Email</th>
                            <th style="min-width: 130px;">Logo</th>
                            <th style="min-width: 110px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM footer ORDER BY id DESC";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $counter = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                    <td>" . $counter . "</td>
                                <td>" . $row['contact_number'] . "</td>
                                <td>" . $row['social_link'] . "</td>
                                <td>" . $row['address'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td><img src='../images/" . $row['logo'] . "' style='height:100px;width:100px;margin:0px;padding:0px;' /></td>
                                <td><a href='view_footer.php?page=footer&id=" . $row['id'] . "'>Delete</a></td>
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