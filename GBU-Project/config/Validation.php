<?php
 // define variables and set to empty values
 $name = $email = $phone = $category = $password = "";
 $nameErr = $emailErr = $phoneErr = $categoryErr = $passwordErr = $confpwdErr="";

 
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } elseif(strlen(trim($_POST["name"])) < 3){
        $nameErr = "Name must have atleast 3 characters.";
    } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace 
  }
   if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
   if (empty($_POST["phone"])) {
    $phoneErr = "Phone Number is required";
  }elseif(strlen(trim($_POST["phone"])) < 10){
        $phoneErr = "Phone Number must contain 10 digits.";
    } else {
    $phone = test_input($_POST["phone"]);
    // check if phone address is well-formed
    // if (!filter_var($phone, FILTER_VALIDATE_INT)) {
    //   $phoneErr = "Invalid phone format"; 
    // }
  }
    // Validate password
    if(empty(trim($_POST["password"]))){
        $passwordErr = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 5){
        $passwordErr = "Password must have atleast 5 characters.";
    }elseif(strlen(trim($_POST["password"])) > 32){
        $passwordErr = "Password must be less than 32 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confpassword"]))){
        $confpwdErr = "Please confirm password.";     
    } else{
        $confpassword = trim($_POST["confpassword"]);
        if(empty($passwordErr) && ($password != $confpassword)){
            $confpwdErr = "Password did not match.";
        }
    } 

 
  
?>