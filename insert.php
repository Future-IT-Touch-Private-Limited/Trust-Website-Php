<?php
include 'conn.php';





$msg = "";
switch ($_GET['act']) {


    case 'gallery':
        if (isset($_POST['save'])) {
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            //move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename);
            $sql = "INSERT INTO gallery (gallery_image) VALUES ('$filename')";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
        header('Location:' . $_SERVER['HTTP_REFERER']);
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong> gallery added successfully :) 
                                    </div>';
        break;
    case 'small_gallery':
        if (isset($_POST['save'])) {
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            //move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename);
            $sql = "INSERT INTO small_gallery (small_gallery_image) VALUES ('$filename')";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }

            mysqli_close($conn);
        }
        header('Location:view_smallgallery.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>small gallery added successfully :) 
                                    </div>';
        break;
    case 'logo':
        if (isset($_POST['save'])) {
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            //move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename);
            $sql = "INSERT INTO logo (logo_image) VALUES ('$filename')";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }

            mysqli_close($conn);
        }
        header('Location:' . $_SERVER['HTTP_REFERER']);
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>logo added successfully :) 
                                    </div>';
        break;

    case 'portfolios':
        if (isset($_POST['save'])) {
            $filename = NULL;
            if(!empty($_FILES['uploadfile']['name'])){
                //print_r($_FILES['uploadfile']);
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            }
            $title = $_POST['title'];
           // $rating = $_POST['rating'];
           // $rate = $_POST['rate'];
            $desc = $_POST['desc'];
            $category = $_POST['category'];
            $video_url = $_POST['video_url'];
           // $type = $_POST['type'];
            $sql = "INSERT INTO our_rooms (our_rooms_image, our_video_url, our_rooms_title, our_rooms_desc,  `category_id`) VALUES ('$filename', '$video_url', '$title', '$desc',  '$category')";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
         
          header('Location:view_rooms.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>Added successfully :) 
                                    </div>';
        break;

        case 'update_rooms':
        if (isset($_POST['save'])) {
            $id = $_POST['id'];
                if($_FILES['uploadfile']['name'] != null){
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
        }else{
             $filename  = $_POST['img'];
        }
            $title = $_POST['title'];
            $rating = $_POST['rating'];
            $rate = $_POST['rate'];
            $desc = $_POST['desc'];
             $home_room = $_POST['home_room'];
            $category = $_POST['category'];
            $type = $_POST['type'];
            $sql = "UPDATE `our_rooms` SET `our_rooms_image`='$filename',`our_rooms_title`='$title',`our_rooms_desc`='$desc',`category_id`='$category' WHERE `id` = '$id'";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
        header('Location:view_rooms.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong> Updated successfully :) 
                                    </div>';
        break;



    case 'team':
        if (isset($_POST['save'])) {
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            $name = $_POST['name'];
            $title = $_POST['title'];
            $mobno = $_POST['mobno'];
            $sql = "INSERT INTO our_team (name, title, mob_no, photo) VALUES ('$name', '$title', '$mobno', '$filename')";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
        header('Location:view_team.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>team added successfully :) 
                                    </div>';
        break;




    case 'update_team':
        if (isset($_POST['save'])) {
                if($_FILES['uploadfile']['name'] != null){
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
        }else{
             $filename  = $_POST['img'];
        }
            $name = $_POST['name'];
            $id = $_POST['id'];
            $title = $_POST['title'];
            $mobno = $_POST['mobno'];
            $sql = "UPDATE `our_team` SET `name`='$name',`title`='$title',`mob_no`='$mobno',`photo`='$filename' WHERE `id` = '$id'";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
        header('Location:view_team.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>team added successfully :) 
                                    </div>';
        break;
  
   case 'blog':
        if (isset($_POST['save'])) {
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            $name = $_POST['name'];
            $title = $_POST['title'];
            $mobno = $_POST['mobno'];
            $sql = "INSERT INTO our_blog (name, title, mob_no, photo) VALUES ('$name', '$title', '$mobno', '$filename')";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
        header('Location:view_blog.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>blog added successfully :) 
                                    </div>';
        break;




    case 'update_blog':
        if (isset($_POST['save'])) {
                if($_FILES['uploadfile']['name'] != null){
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
        }else{
             $filename  = $_POST['img'];
        }
            $name = $_POST['name'];
            $id = $_POST['id'];
            $title = $_POST['title'];
            $mobno = $_POST['mobno'];
            $sql = "UPDATE `our_blog` SET `name`='$name',`title`='$title',`mob_no`='$mobno',`photo`='$filename' WHERE `id` = '$id'";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
        header('Location:view_blog.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>blog added successfully :) 
                                    </div>';
        break;


    case 'awards':
        if (isset($_POST['save'])) {
            $awards = $_POST['awards'];
            $guests = $_POST['guests'];
            $cupsofcoffee = $_POST['cupsofcoffee'];
            $recommendations = $_POST['recommendations'];
            $sql = "INSERT INTO awards (awards, guests, cups_of_coffee,recommendations) VALUES ('$awards', '$guests', '$cupsofcoffee','$recommendations')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
        }
        header('Location:view_awards.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>awards added successfully :) 
                                    </div>';
        break;

        case 'update_awards':
        if (isset($_POST['save'])) {
            $id = $_POST['id'];
            $awards = $_POST['awards'];
            $guests = $_POST['guests'];
            $cupsofcoffee = $_POST['cupsofcoffee'];
            $recommendations = $_POST['recommendations'];

            $sql = "UPDATE `awards` SET `awards`='$awards',`guests`='$guests',`cups_of_coffee`='$cupsofcoffee',`recommendations`='$recommendations' WHERE `id` = '$id'";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
        }
        header('Location:view_awards.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>awards Updated successfully :) 
                                    </div>';
        break;

    case 'whatpeoplesay';
        if (isset($_POST['save'])) {
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            $name = $_POST['name'];
            $id = $_POST['id'];
            $desc = $_POST['desc'];
            $sql = "INSERT INTO what_people_say (people_name, people_photo, people_desc) VALUES ('$name', '$filename', '$desc')";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
        header('Location:view_peoplesay.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>what people say added successfully :) 
                                    </div>';
        break;

        case 'update_whatpeoplesay';
        if (isset($_POST['save'])) {
            if($_FILES['uploadfile']['name'] != null){
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
        }else{
             $filename  = $_POST['img'];
        }

            $name = $_POST['name'];
            $desc = $_POST['desc'];

            $id = $_POST['id'];
            echo $sql = "UPDATE `what_people_say` SET `people_name`='$name',`people_photo`='$filename',`people_desc`='$desc' WHERE `id` = '$id'";
            mysqli_query($conn, $sql);
            
            mysqli_close($conn);
        }
        header('Location:view_peoplesay.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>what people say update successfully :) 
                                    </div>';
        break;



    case 'fontend_company_deatils':
        if (isset($_POST['save'])) {

            $phone = $_POST['p_name'];
            $email = $_POST['email'];
            $number_row = $_POST['number'];
            $id_number = $_POST['check_true'];

            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));

            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }

            $link_json = array('facebook' => $_POST['facebook_link'], 'twitter' => $_POST['twitter_link'], 'instagram' => $_POST['instagram_link'], 'youtube' => $_POST['youtube_link']);

            $link = json_encode($link_json);
            $location = $_POST['location'];


            if ($number_row < 1) {
                $sql = "INSERT INTO footer (`contact_number`, `social_link`, `address`, `email`,`logo`) VALUES ('$phone', '$link', '$location', '$email','$filename')";
            } else {
                $sql = " UPDATE `footer` SET `contact_number`='$phone',`social_link`='$link',`address`='$location',`email`='$email',`logo`='$filename' WHERE  '$id_number'";
            }

            mysqli_query($conn, $sql);
        }
        header('Location:' . $_SERVER['HTTP_REFERER']);
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                     <strong>Done!</strong>successfully :) 
                                    </div>';
        break;

    case 'contact_form_fonted':
        if (isset($_POST['save'])) {


            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
            //$ip_address = $_SERVER['REMOTE_ADDR'];




            $sql = "INSERT INTO `contact_us` (`name`, `email`, `phone`, `massage`)  VALUES ('$name', '$email', '$phone', '$message')";
            mysqli_query($conn, $sql);
        }

        header('Location:' . $_SERVER['HTTP_REFERER']);
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                     <strong>Thanks!</strong>sumbit form :) 
                                    </div>';
        break;


    case 'add_pages':
        if (isset($_POST['save'])) {

            $content = $_POST['content'];

            //$ip_address = $_SERVER['REMOTE_ADDR'];
            foreach ($_POST as $key => $value) {
                $sql = "UPDATE `pages` SET `content`='$value' WHERE `page_name` = '$key'";
                mysqli_query($conn, $sql);
            }
        }

        header('Location:' . $_SERVER['HTTP_REFERER']);
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                     <strong>Thanks!</strong>sumbit form  :) 
                                    </div>';
        break;



         case 'banner':
        if (isset($_POST['save'])) {
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            $title = $_POST['title'];
            $sub_title = $_POST['sub_title'];
            $silder_category = $_POST['silder_category'];
            $sql = "INSERT INTO `home_silder` (`title`, `sub_title`,`silder_category`, `image`, `button`) VALUES ('$title', '$sub_title','$silder_category','$filename','1')";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
        header('Location:view_banner.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>added successfully :) 
                                    </div>';
        break;




    case 'update_banner':
        if (isset($_POST['save'])) {
                if($_FILES['uploadfile']['name'] != null){
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
        }else{
             $filename  = $_POST['img'];
        }
           
            $id = $_POST['id'];
            $silder_category = $_POST['silder_category'];
            $title = $_POST['title'];
            $sub_title = $_POST['sub_title'];
            $sql = "UPDATE `home_silder` SET `title`='$title',`sub_title`='$sub_title',`image`='$filename',`silder_category`='$silder_category',`button`='1' WHERE `id` = '$id'";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
        header('Location:view_banner.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>Update successfully :) 
                                    </div>';
        break;

        case 'category':
        if (isset($_POST['save'])) {
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            $name = $_POST['name'];
            $sql = "INSERT INTO `category`(`name`,`image`) VALUES ('$name','$filename')";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
        header('Location:view_category.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>added successfully :) 
                                    </div>';
        break;




    case 'update_category':
        if (isset($_POST['save'])) {
                if($_FILES['uploadfile']['name'] != null){
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
        }else{
             $filename  = $_POST['img'];
        }
           
            $id = $_POST['id'];
            $name = $_POST['name'];
            $sql = "UPDATE `category` SET `name`='$name',`image`='$filename' WHERE `id` = '$id'";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
        header('Location:view_category.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>Update successfully :) 
                                    </div>';
        break;


            case 'update_user':
        if (isset($_POST['save'])) {
                if($_FILES['uploadfile']['name'] != null){
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
        }else{
             $filename  = $_POST['img'];
        }
           
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "UPDATE `user_data` SET `name`='$name',`email`='$email',`password`='$password',`image`='$filename' WHERE `id`='$id'";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
        header('Location:profile.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>Update successfully :) 
                                    </div>';
        break;

        case 'donation':
         
        if (isset($_POST['save'])) {

             $name = $_POST['name'];
            $email = $_POST['email'];
            $price = $_POST['price'];
            $type = $_POST['type'];
            $option_price = $_POST['payment_option'];
            $message = $_POST['message'];
            $payment_status = 'Penddig';
            $time =time();
            $address_one =$_POST['address_line'];
            $address_two =$_POST['address_two'];
            $phone = $_POST['phone'];
            $country = $_POST['country'];
            $state = $_POST['state'];
            $district = $_POST['district'];
            $pincode = $_POST['pincode'];
            $target = $_POST['target'];
            $pannumber =$_POST['pan_card'];
            $donationtime =time();
            $location =$_POST['address_line'].','.$_POST['district'].','.$_POST['state'].','.$_POST['country'].','.$_POST['pincode'];

          
           $sql = "INSERT INTO `donation`(`donation_name`, `donation_message`, `donation_option`, `donation_email`, `donation_price`, `donation_type`, `donation_status`, `addon_date`, `donation_address`, `donation_address_two`, `donation_country`, `donation_state`, `donation_district`, `donation_pincode`, `donation_phone_number`, `donation_pan_number`,`donation_target`, `donation_date`, `donation_location`)  VALUES ('$name','$message','$option_price','$email','$price','$type','$payment_status','$time', '$address_one', '$address_two', '$country', '$state', '$district', '$pincode', '$phone', '$pannumber', '$target', '$donationtime', '$location')";
            mysqli_query($conn, $sql);
              } else {
                $msg = "Failed message";
            }
              $last_id = mysqli_insert_id($conn);  
        
        $_SESSION['donation'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong> Thanks For Sumbit Form :) 
                                    </div>';

            if($option_price==='Online Payment'){ 
                    
          header('Location:../razerpay.php?total='.$price.'&phone='.$phone.'&email='.$email.'&name='.$name.'&address='.$location.'&order_id='.$last_id);
            }else{
            header('Location:' . $_SERVER['HTTP_REFERER']);
            }
            
             $to_email = $email;
              $subject = "Thank you For Donation";
              $message = "Please use this user id to login " . $user_id ."<br> Password have you choosen ";
              $headers = "From : test123@ratnatrayajinmandir.com";
              $secure_check = sanitize_my_email($to_email);
        
              if ($secure_check == true) {
                send_mail($email, $subject, $message, $headers);
               echo $_SESSION['msg']  = "<p class='alert alert-success' role='alert'>Congratulations! Your are Registered successfully (Please Check Your Email box)</p>";
              //   header("Location:login.php");
              }else{
              echo  $_SESSION['msg'] = "<p class='alert alert-danger text-center' role='alert'>Failed to Registation Send Email, try again</p>";
              }
        break;
        
        case 'add_news':
        if (isset($_POST['save'])) {
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
        
            $title = $_POST['title'];
            $desc = $_POST['desc'];
            $author = $_SESSION['user_id'];
            $status = $_POST['status'];
            $time = date('Y-m-d h:i:s');

            $sql = "INSERT INTO `news`(`title`, `content`, `photo`, `posted`, `date`, `author`)  VALUES ('$title', '$desc', '$filename',  '$status', '$time', '$author')";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
     
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>News added successfully :) 
                                    </div>';
           header('Location:news-article/view_news.php');
        break;
        
         case 'update_news':
        if (isset($_POST['save'])) {
            
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
         
          
        
            $title = $_POST['title'];
            $desc = str_replace("'",'',$_POST['desc']);
            $author = $_SESSION['user_id'];
            $status = $_POST['status'];
            $update_id = $_POST['update_id'];
            $time = date('Y-m-d h:i:s');

            $sql = "UPDATE `news` SET `title`='$title',`content`='$desc',`photo`='$filename',`posted`='$status',`date`='$time' WHERE `id`='$update_id'";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
     header('Location:news-article/view_news.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>Update successfully :) 
                                    </div>';
           
        break;
        
        

        case 'add_blogs':
        if (isset($_POST['save'])) {
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
        
            $title = $_POST['title'];
            $tags = $_POST['tags'];
            $category = $_POST['category'];
            $desc = $_POST['desc'];
            $author = $_SESSION['user_id'];
            $status = $_POST['status'];
            $time = date('Y-m-d h:i:s');

            $sql = "INSERT INTO `blogs`(`title`, `tags`, `content`, `photo`, `posted`, `date`, `author`, `category`)  VALUES ('$title', '$tags', '$desc', '$filename',  '$status', '$time', '$author', '$category')";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
     
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>Blog added successfully :) 
                                    </div>';
           header('Location:blog/post/view_post.php');
        break;

         case 'update_blogs':
        if (isset($_POST['save'])) {
            
            $filename = uniqid('uploaded-', true) . '.' . strtolower(pathinfo($_FILES['uploadfile']['name'], PATHINFO_EXTENSION));
         
          
        
            $title = $_POST['title'];
            $tags = $_POST['tags'];
            $category = $_POST['category'];
            $desc = str_replace("'",'',$_POST['desc']);
            $author = $_SESSION['user_id'];
            $status = $_POST['status'];
            $update_id = $_POST['update_id'];
            $time = date('Y-m-d h:i:s');

        echo    $sql = "UPDATE `blogs` SET `title`='$title',`tags`='$tags',`content`='$desc',`photo`='$filename',`posted`='$status',`date`='$time', `category`='$category' WHERE `id`='$update_id'";
            mysqli_query($conn, $sql);
            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], '../images/' . $filename)) {
                $msg = "Image uploaded successfully";
            } else {
                $msg = "Failed to upload image";
            }
            mysqli_close($conn);
        }
     header('Location:blog/post/view_post.php');
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>Update successfully :) 
                                    </div>';
           
        break;

         case 'add_blog_Category':
        if (isset($_POST['save'])) {

            $title = $_POST['title'];
            $status = $_POST['status'];
            $time = date('Y-m-d h:i:s');

            $sql = "INSERT INTO `blog_categories`( `blog_categories_name`, `blog_categories_status`, `blog_categories_addon_on`)  VALUES ('$title','$status', '$time')";
            mysqli_query($conn, $sql);
         
            mysqli_close($conn);
        }
     
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong> added successfully :) 
                                    </div>';
           header('Location:blog/post_category/view_category.php');
        break;
        
         case 'add_pooja_Category':
        if (isset($_POST['save'])) {

            $title = $_POST['title'];
            $status = $_POST['status'];
            $time = date('Y-m-d h:i:s');

            $sql = "INSERT INTO `pooja_categories`( `pooja_categories_name`, `pooja_categories_status`, `pooja_categories_addon_on`)  VALUES ('$title','$status', '$time')";
            mysqli_query($conn, $sql);
         
            mysqli_close($conn);
        }
     
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong> added successfully :) 
                                    </div>';
           header('Location:pooja/view_category.php');
        break;

         case 'update_blog_category':
       if (isset($_POST['save'])) {
            $title = $_POST['title'];
            $status = $_POST['status'];
            $time = date('Y-m-d h:i:s');
            $update_id = $_POST['update_id'];


            $sql = "UPDATE `blog_categories` SET  `blog_categories_name`='$title',`blog_categories_status`='$status' WHERE `blog_categories_id`='$update_id'";
            mysqli_query($conn, $sql);
         
            mysqli_close($conn);
        }
     
        $_SESSION['msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>update successfully :) 
                                    </div>';
           header('Location:blog/post_category/view_category.php');
        break;

        case 'add_post_comment':
        print_r($_POST);
       if (isset($_POST['add_post_comment'])) {

            $name = $_POST['fname'];
            $email = $_POST['email'];
            $website = $_POST['website'];
            $comment = $_POST['comment'];
            $time = date('Y-m-d h:i:s');
            $post_id = $_POST['post_id'];
        


            $sql = "INSERT INTO `post_comment`( `comment_name`, `comment_post_id`, `comment_email`, `comment_website`,  `comment_addon`, `comment_message`) VALUES ('$name','$post_id','$email','$website','$time','$comment')";
            mysqli_query($conn, $sql);
         
            mysqli_close($conn);
        }
     
        $_SESSION['comment_msg'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>added successfully :) 
                                    </div>';
                                  header('Location:' . $_SERVER['HTTP_REFERER']);
        break;


         case 'razorpay':
        if (isset($_GET['status'])) {
            //print_r($_GET); exit;
            $status = $_GET['status'];
            $order_id = $_GET['order_id'];
            $sql = "UPDATE `donation` SET `donation_status`=' $status' WHERE `id`='$order_id'";
            //echo $sql; exit;
            mysqli_query($conn, $sql);
         
            //mysqli_close($conn);
        }
        

        if($status=='completed'){
             $val = "SELECT * FROM `donation` WHERE `id`='$order_id'";
             $marquee_result = mysqli_query($conn, $val);
             $row = mysqli_fetch_assoc($marquee_result);
           $ch = curl_init();
            
            $url = 'https://japi.instaalerts.zone/httpapi/QueryStringReceiver';
            
            $dataArray = ['ver' => '1.0','key' =>'hu1qAROmeGNw4BGIwtFAHA==','encrpt'=>0,'dest'=>$row['donation_phone_number'],'send'=>'FUTTCH','dlt_entity_id'=>1001727717016161791,'text'=>'Many thanks for giving your proper donation to Shri Digambar Jain Ratnatraya Jain Mandir Dwarka. We have received the donation amount '.$row['donation_price'].' www.ratnatrayajinmandir.com. POWERED BY Future IT touch'];
  
    $data = http_build_query($dataArray);
  
    $getUrl = $url."?".$data;
  
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_URL, $getUrl);
    curl_setopt($ch, CURLOPT_TIMEOUT, 80);
       
    $response = curl_exec($ch);
        
  
       
    curl_close($ch);
    
        $_SESSION['donation'] = '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Done!</strong>Payment successfully <a href="https://ratnatrayajinmandir.com/admin/invoice.php?id='.$order_id.'" download style="color:red">Download invoice</a>
                                    </div>';
         
    
         
                             
                                } else{
                    $_SESSION['donation'] = '<div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Error!</strong>Payment failed 
                                    </div>';                
                                }
       if($row['donation_type']=="donation"){
         header('Location:../donation.php');  
       } else{
          header('Location:../pooja.php'); 
       }                       
       
        break;

    default:
        mysqli_close($conn);
        break;
}







function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}


function send_mail($to_email, $subject, $message) {
    print_r($to_email);
 require 'phpmailer.php';
$mail = new PHPMailer(); 
$mail->IsSMTP();
$msg = 'g';

    $mail->SMTPAuth = true;
    //$mail->SMTPSecure = "ssl";
    $mail->Host = "115.246.122.234";
    $mail->Port = 465;

     $mail->Username = "noreply@ratnatrayajinmandir.com"; // SMTP account username
    $mail->Password = "noreply@123";        // SMTP account passwordra
    $mail->AddAddress($to_email);
    $mail->SetFrom("noreply@ratnatrayajinmandir.com", "noreply@ratnatrayajinmandir.com");
    $mail->Subject = $subject;
    $mail->MsgHTML($message);
    
    $mail->Send();
    echo "Message Sent OK";
    
    
   
}
