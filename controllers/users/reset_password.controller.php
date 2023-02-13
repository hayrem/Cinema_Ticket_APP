<?php
session_start();

// require "models/user.modes.php";
require "models/users.model.php";
// require "database/database.php";

$valueTrue = 0 ;

$messageError = [];

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 
    $oldPassword = validate($_POST['oldpassword']);
    $newPassword = validate($_POST['newpassword']);
    $confirmNewPassword = validate($_POST['confirmnewpassword']);

    if(empty($oldPassword))
    {
         $messageError["oldpassword"] = "Please enter your old password";
    }   
    elseif(!preg_match("/^[a-zA-Z\d]{8,50}+$/" ,$oldPassword))
    {
         $messageError["oldpassword"]  = "Please enter your password more that 8 cheraters";
    }
    if(empty($newPassword))
    {
         $messageError["newpassword"] = "Please enter your new password";
    }   
    elseif(!preg_match("/^[a-zA-Z\d]{8,50}+$/" ,$newPassword))
    {
         $messageError["newpassword"]  = "Please enter your password more that 8 cheraters";
    }
    if (empty($confirmNewPassword)) 
    {
         $messageError["confirmnewpassword"] = "Please enter you comfirm new password";
    }elseif ($newPassword != $confirmNewPassword)
    {
         $messageError["confirmnewpassword"] = "Password doesn't match";
    }


    $passwordLogin = usernameByEmail($_COOKIE['email']);
    if(!empty($oldPassword)){
          if (password_verify($oldPassword,$passwordLogin['password'])){
                    $valueTrue +=1;
          }
          else
          {
               // echo "incroorec password";
               $messageError["oldpassword"] = 'Incorrect password';
                         
          }
    }
    if (!empty($newPassword) or !empty($confirmNewPassword)){
          if($newPassword === $confirmNewPassword)
          {
               $valueTrue += 1 ;
          }
     
    }
    
    if($valueTrue === 2 ){
          changePassword($_COOKIE['email'],$newPassword);
          header("location: /");
    }  
}

require "views/users/reset_password.view.php";
