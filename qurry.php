
<?php


session_start();
 require ('administer/cons.php');

$act = $_GET['act'];

switch ($act) {
   



        case 'register':
      
       $email = $_POST["email"];
        $status = 'panding';
       echo $sql ="SELECT * FROM `user_data` WHERE `email` = '$email'";
       $result = mysqli_query($conn, $sql);
     echo  $num = mysqli_num_rows($result);

       if($num == 1){
         $_SESSION['msges']  = "email already registered";
        header("Location:register.php");
       }
       else{
        $otp = rand(100000, 999999);
    echo   $sql = "INSERT INTO user_data (Name,email,phone_number,password,user,status,otp,`addon_date`)
        VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["primary_number"]."','".$_POST["password"]."','".$_POST["user"]."','$status','$otp',NOW())";
        
       $_SESSION['massage'] =  "<div class='alert alert-success my-4' role='alert'>Success user data </div>";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
          
      }

        $query = mysqli_query($conn,$sql) or die(mysqli_error($conn)); 
        

        break;




        case 'installing_product':
       
      
      echo $sql =   "INSERT INTO installing_product (user_id, customer_name, modal, payment, payment_date, payment_methood, payment_number, se_name, payment_status,  addon_date)
       VALUES ('".$_SESSION["user_id"]."','".$_POST["customer_name"]."','".$_POST["modal"]."','".$_POST["payment"]."','".$_POST["payment_date"]."','".$_POST["payment_methood"]."','".$_POST["payment_number"]."','".$_POST["se_name"]."','".$_POST["payment_status"]."',NOW())";


        $query = mysqli_query($conn,$sql) or die(mysqli_error($conn)); 
        

         $_SESSION['massage'] =  "<div class='alert alert-success my-4' role='alert'>Success Customers Services data </div>";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
      




        case 'customer':


         $pfiles = $_FILES['receipt'];
         $filename = $pfiles['name'];
         $fileerror = $pfiles['error'];
         $filetmp = $pfiles['tmp_name'];
         $filetype = $pfiles['type'];
         $filesize = $pfiles['size']/1024;


         $fileext = explode('.', $filename);
         $fileactualext = strtolower(end($fileext));

         $allowed = array('jpg','jpeg','png');


         if(in_array($fileactualext,$allowed)){
         if($fileerror === 0){
          $filenamenew = uniqid('',true).".".$fileactualext;

    
              $destinationimg = 'upload/'.$filenamenew;

              print_r($destinationimg); 
              move_uploaded_file($filetmp, $destinationimg);
              #header("Location:add-product.php?NOTsuccess");
          echo'upload success';
          }


          }else{
             #header("Location:add-product.php?NOTsuccess");
            echo'There was error uploading your file!';
          }
          

          $check = date('Y-m-d');
          $mind = date('Y-m-d', strtotime("+6 months", strtotime($check)));
          $majd = date('Y-m-d', strtotime("+12 months", strtotime($check)));
      
        $sql =   "INSERT INTO customer (user_id, name, fname, address, primary_number, whatsapp_number, block, modal, mechanic_name, se_name, price, booking, received_amount, receipt, customer_type, security_document, installment_price,  installment_remain, date_instilling, state, village, district, czip, author, role, addon_date, minor, major, upcoming_service, service_status, number_service)
       VALUES ('".$_SESSION['user_id']."','".$_POST["name"]."','".$_POST["fname"]."','".$_POST["address"]."','".$_POST["primary_number"]."','".$_POST["whatsapp_number"]."','".$_POST["block"]."','".$_POST["modal"]."','".$_POST["mechanic_name"]."','".$_POST["se_name"]."','".$_POST["price"]."','".$_POST["booking"]."','".$_POST["received_amount"]."',
       '".$destinationimg."','".$_POST["customer_type"]."','".$_POST["security_document"]."','".$_POST["price"]."','".$_POST["customer_type"]."','".$_POST["date_instilling"]."','".$_POST["state"]."','".$_POST["village"]."','".$_POST["district"]."','".$_POST["zcode"]."','".$_SESSION["author"]."','".$_SESSION["role"]."', NOW(),'$mind','$majd',0,1,0)";


  
          
  

        $query = mysqli_query($conn,$sql) or die(mysqli_error($conn)); 


        if($_POST["customer_type"] == 6 ){
             $check = date('Y-m-d');
        $update = date('Y-m-d', strtotime("+6 months", strtotime($check)));

       // $lastid = select last_insert_id();  
        $sqls =   "INSERT INTO upcoming_service (c_id, name, services, up_date, addon_date, status)
         VALUES (LAST_INSERT_ID(),'".$_POST["name"]."','".$_POST["customer_type"]."','$update',NOW(), '1')";
          $query = mysqli_query($conn,$sqls) or die(mysqli_error($conn));



        }elseif ($_POST["customer_type"] == 3 ) {
             $check = date('Y-m-d');
             $update = date('Y-m-d', strtotime("+3 months", strtotime($check)));
           //  $lastid = select last_insert_id();  

             $sqls =   "INSERT INTO upcoming_service (c_id, name, services, up_date, addon_date, status)
           VALUES (LAST_INSERT_ID(),'".$_POST["customer_name"]."','".$_POST["customer_type"]."','$update',NOW(), '1')";
           $query = mysqli_query($conn,$sqls) or die(mysqli_error($conn));

        }

           if($_POST["modal"] == 'Major Service' ){
             $check = date('Y-m-d');
             $update = date('Y-m-d', strtotime("+6 months", strtotime($check)));



            $sqls =  "UPDATE customer SET minor = '$mind' WHERE id = LAST_INSERT_ID()"; 

            
           $query = mysqli_query($conn,$sqls) or die(mysqli_error($conn));

           }
            

         
   
          $_SESSION['massage'] = "<div class='alert alert-success my-4' role='alert'>Success Users Data </div>";



      //header('Location: customers.php');




        break;



         case 'update_data':



        if(isset($_POST['submit'])){
            
        $name = $_POST['name'];
        $fname = $_POST['fname'];
         $email = $_POST['email'];
        $country = $_POST['country'];
        $phone = $_POST['primary_number'];
        $wphone =  $_POST['whatsapp_number']; 
        $date_add =$_POST['date_instilling'];
         $address = $_POST['address'];
         $state = $_POST['state'];
        $city = $_POST['city'];
        $zip = $_POST['zcode'];
        $block = $_POST['block'];
        $modal = $_POST['modal'];
            $id =  $_POST['edit_id']; 
              
           $date =  date('j F  Y l');
          

             // if($row['user_id']==$id){

              
            echo $sql= "UPDATE customer SET name = '$name', email = '$email', fname= '$fname', block= '$block', modal= '$modal', primary_number = '$phone', whatsapp_number = '$wphone', country = '$country', state = '$state', city = '$city', address = '$address', czip = '$zip', date_instilling =  '$date_add'
                    WHERE id = '$id'";
             echo $query = mysqli_query($conn,$sql)  or die(mysqli_error($conn));  
              $_SESSION['upadate_msg'] = "update  your data";
               
                $_SESSION['massage'] = "<div class='alert alert-success my-4' role='alert'>Success Users Data </div>";
          
               header('Location: ' . $_SERVER['HTTP_REFERER']);
                // }
              }


        break;




         case 'camplaint':


         $status= '1';

            $date =  $_POST['date'];
          
         $part  = $_POST['part_name'];
         $part_ro="";
          foreach($part as $partro)
           {
           $part_ro.= $partro.","; 
         }

         
         $pfiles = $_FILES['receipt'];
         $filename = $pfiles['name'];
         $fileerror = $pfiles['error'];
         $filetmp = $pfiles['tmp_name'];
         $filetype = $pfiles['type'];
         $filesize = $pfiles['size']/1024;


         $fileext = explode('.', $filename);
         $fileactualext = strtolower(end($fileext));

         $allowed = array('jpg','jpeg','mov','mp4','avi');


         if(in_array($fileactualext,$allowed)){
         if($fileerror === 0){
          $filenamenew = uniqid('',true).".".$fileactualext;

    
              $destinationimg = 'upload/'.$filename;
              move_uploaded_file($filetmp, $destinationimg);
              #header("Location:add-product.php?NOTsuccess");
          echo'upload success';
          }


          }else{
             #header("Location:add-product.php?NOTsuccess");
            echo'There was error uploading your file!';
          }
        

           $check = date('Y-m-d');
           $minor = date('Y-m-d', strtotime("+6 months", strtotime($check)));
           $major = date('Y-m-d', strtotime("+12 months", strtotime($check)));



           


            
         echo $sql =   "INSERT INTO complaint (service_cat, service_fixed, user_id, customer_id, customer_name, part_ro, price, payment_mode, payment_status, receipt, se_name, author_name, date)
         VALUES ('".$_POST["camplaint_cat"]."','".$_POST["service_fixed"]."','".$_SESSION['user_id']."','".$_POST["customer_id"]."','".$_POST["customer_name"]."','$part_ro','".$_POST["price"]."','".$_POST["payment_mode"]."','".$_POST["payment_status"]."','".$destinationimg."','".$_POST["se_name"]."','".$_SESSION["author"]."','".$_POST["date"]."')";

         



       
     
          $check = $_POST['date'];
          $update = date('Y-m-d', strtotime("+12 months", strtotime($check)));

         if($_POST["service_fixed"] == 'Minor service'){

           
           echo $sql = "UPDATE customer SET minor = '$update', upcoming_service = '1', service_status = '1', number_service = '1' WHERE id = '".$_POST["customer_id"]."'"; 
          $query = mysqli_query($conn,$sql) or die(mysqli_error($conn)); 

       
      }else

       if($_POST["service_fixed"] == 'Major service'){

           
             echo $sql = "UPDATE customer SET major = '$update', upcoming_service = '0', service_status = '1', number_service = '1' WHERE id = '".$_POST["customer_id"]."'"; 
          $query = mysqli_query($conn,$sql) or die(mysqli_error($conn)); 

       
       
      } 
   

        $query = mysqli_query($conn,$sql) or die(mysqli_error($conn)); 


         $_SESSION['massage'] = "<div class='alert alert-success my-4' role='alert'>Success Users Services Data </div>";


    //   header('Location: services.php');


 
                  
           break;



        case 'addpart':

        
          $date =  date('j F  Y l');


           echo $sql =   "INSERT INTO product_part (product_id, part_name, part_price, user_id, addon, date)
          VALUES ('".$_POST["product_id"]."','".$_POST["part_name"]."','".$_POST["part_price"]."','". $_SESSION['user_id']."','$date', NOW())";


             echo $query = mysqli_query($conn,$sql)  or die(mysqli_error($conn));  
          $_SESSION['massage'] = "<div class='alert alert-success my-4' role='alert'>Added Successfully</div>";
               
          
               header('Location: ' . $_SERVER['HTTP_REFERER']);
                // }
              


       break;




       case 'installment':




         
         $pfiles = $_FILES['receipt'];
         $filename = $pfiles['name'];
         $fileerror = $pfiles['error'];
         $filetmp = $pfiles['tmp_name'];
         $filetype = $pfiles['type'];
         $filesize = $pfiles['size']/1024;


         $fileext = explode('.', $filename);
         $fileactualext = strtolower(end($fileext));

         $allowed = array('jpg','jpeg','mov','mp4','avi');


         if(in_array($fileactualext,$allowed)){
         if($fileerror === 0){
          $filenamenew = uniqid('',true).".".$fileactualext;

    
              $destinationimg = 'upload/'.$filename;
              move_uploaded_file($filetmp, $destinationimg);
              #header("Location:add-product.php?NOTsuccess");
          echo'upload success';
          }


          }else{
             #header("Location:add-product.php?NOTsuccess");
            echo'There was error uploading your file!';
          }
        
             $remain = $_POST["installment_remain"]-1;
        

         echo $sql = "INSERT INTO installing_product (user_id, customer_id, customer_name, pnumber, payment, payment_date, remain_price, delay_fine, remain_installment,  installment_type, se_name, receipt, block, remark,  addon_date)
         VALUES ('".$_SESSION['user_id']."','".$_POST["customer_id"]."','".$_POST['customer_name']."','".$_POST["pnumber"]."','".$_POST["total_instalment"]."','".$_POST["payment_date"]."','".$_POST["remain_installment"]."','".$_POST["delay_fine"]."','$remain','".$_POST["installment_type"]."','".$_POST["se_name"]."','".$destinationimg."','".$_POST['block']."','".$_POST["remark"]."',NOW())";

        


        $query = mysqli_query($conn,$sql) or die(mysqli_error($conn)); 
        echo "<hr><pre>";
        print_r($_POST);
        echo "</pre><hr>";
        echo $sqls = "UPDATE customer SET installment_price = '".$_POST["remain_installment"]."', installment_remain = '$remain' WHERE id = '".$_POST["customer_id"]."'";
              $query = mysqli_query($conn,$sqls)  or die(mysqli_error($conn));  

        header('Location: ' . $_SERVER['HTTP_REFERER']);
       $_SESSION['massage'] = "<div class='alert alert-success my-4' role='alert'>Added Successfully</div>";
                  
           break;


            case 'delete':
        
        $id = $_GET['delete'];
        $table = $_GET['deatils'];

          mysqli_query($conn,"DELETE FROM $table WHERE `id` = '$id'");
      header('Location: ' . $_SERVER['HTTP_REFERER']);
       $_SESSION['massage'] = "<div class='alert alert-success my-4' role='alert'>Delete Successfully</div>";
        break;
                

}
    ?>

    