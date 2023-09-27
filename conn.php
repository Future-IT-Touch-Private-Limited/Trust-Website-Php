<?php
session_start();
error_reporting(0);
$servername = "localhost";
$username = "ratnatrayajinman_admin";
$password = "12qwaszx!@QWASZX";
$dbname = "ratnatrayajinman_sql";
// Create connection to database
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    //die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


function delete_id($table,$id){
    global $conn;
       $msg =null;
        $sql = "DELETE FROM $table WHERE id='$id'";
       mysqli_query($conn,$sql);

    
  
    $msg = '<div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Done!</strong>Data deleted successfully :) 
                                </div>';
   return  $msg;

}



define('BASE_URL', 'https://ratnatrayajinmandir.com/admin');

