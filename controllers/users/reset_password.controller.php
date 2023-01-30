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
 
    $oldPassword = validate($_POST['oldPassword']);
    $newPassword = validate($_POST['newpassword']);
    $confirmNewPassword = validate($_POST['confirmnewpassword']);

    if(empty($oldPassword))
    {
         $messageError["oldPassword"] = "Please enter your old password";
    }   
    elseif(!preg_match("/^[a-zA-Z\d]{8,50}+$/" ,$oldPassword))
    {
         $messageError["ordlpassword"]  = "Please enter your password more that 8 cheraters";
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
    }
    if ($newPassword != $confirmNewPassword)
    {
         $messageError["confirmnewpassword"] = "Password doesn't match";
    }


    $passwordLogin = passwordUserLogin();
    foreach ($passwordLogin as $users)
    {
         $oldPassword = $users['password'];
         //old password for database
    }
    if(password_verify($newPassword,$oldPassword))
    {
         // echo "correct password";
            $valueTrue += 1 ;
    }
    else
    {
         // echo "incroorec password";
        $messageError["password"] = 'Incorect password';
               
    }
    if($valueTrue === 1 ){
          $byeamil = usernameByEmail($email)['email'];
          print_r($byeamil);
          $sql_2 = "UPDATE users
        	    SET password='$newPassword'
        	    WHERE password='$oldPassword";
          $stmt = $connection->prepare($sql);
	     $stmt ->execute();

        // header("location:/");
    }

    echo $oldPassword.'hello';
    echo (password_verify($newPassword,$oldPassword));  
}


// require "../../views/partials/head.php";
// require "../../views/users/reset_password.view.php";
require "views/users/reset_password.view.php";
// require "../../views/partials/nav.php";