<?php

include('db_con.php');

if(isset($_POST)){
    $msg='';
    $first_name = trim($_POST['first_name']);

    if (empty($first_name)) {
        $msg .= 'You must enter First Name!<br>' ;
    } else {
        $first_name = mysqli_real_escape_string($con,strip_tags($first_name)) ;
    }
    $last_name = trim($_POST['last_name']);

    if (empty($last_name)) {
        $msg .= 'You must enter Last Name!<br>' ;
    } else {
        $last_name = mysqli_real_escape_string($con,strip_tags($last_name)) ;
    }

    $user_email = trim($_POST['user_email']);

    if (empty($user_email)) {
        $msg .= 'You must enter an Email Address!<br>' ;
    } else {
        $user_email = mysqli_real_escape_string($con,strip_tags($user_email)) ;
    }

    $dob = trim($_POST['dob']);

    if (empty($dob)) {
        $msg .= 'You must enter DOB!<br>' ;
    } else {
        $dob = mysqli_real_escape_string($con,strip_tags($dob)) ;
    }
    $contact_no = trim($_POST['contact_no']);

    if (empty($contact_no)) {
        $msg .= 'You must enter Contact Number!<br>' ;
    } else {
        $contact_no = mysqli_real_escape_string($con,strip_tags($contact_no)) ;
    }

    $gender = trim($_POST['gender']);

    if (empty($gender)) {
        $msg .= 'You please select Gender!<br>' ;
    } else {
        $gender = mysqli_real_escape_string($con,strip_tags($gender)) ;
    }
    
    $hobbie=implode(', ', $_POST['hobbie']);

    if (empty($hobbie)) {
        $msg .= 'You please select any Hobbie!<br>' ;
    } else {
        $hobbie = mysqli_real_escape_string($con,strip_tags($hobbie)) ;
    }
    $location='add_user_info.php'; 

    if(!empty($first_name) && !empty($last_name) && !empty($user_email) && !empty($contact_no) && !empty($dob) && !empty($gender)){
        $query=mysqli_query($con,"insert into user_info(first_name, last_name, dob, gender, contact_no, user_email, hobbie) values('$first_name','$last_name','$dob','$gender','$contact_no','$user_email','$hobbie')");
        if($query)
        {
        $msg .="Data successfully added ";
        $location='all_user.php';
        
        }
        else{
        $msg .="Something went wrong . Please try again.";  
         
        } 
    }
    header("Location: $location?message=$msg");
}


?>