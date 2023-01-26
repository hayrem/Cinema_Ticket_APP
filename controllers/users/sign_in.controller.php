<?php
require "models/post.model.php";
require "database/database.php";


?>

<?php 

$messageError = [];
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $email = $_POST['email'];
 
    $password = $_POST['password'];

    $data = "email=".$email;
    
   if(empty($email))
   {
      $messageError["email"] = "Please enter your email address";
	   
   }if(empty($password))
   {
      $messageError["password"] = "Please enter your password";
   
   }
   if(empty($messageError)) {

    	$sql = "SELECT * FROM users WHERE email = ?";
    	$stmt = $connection->prepare($sql);
    	$stmt->execute([$email]);

      if($stmt->rowCount()){
         $user = $stmt->fetch();
         $orldemail =  $user['email'];
         $orldpassword =  $user['password'];
         echo $orldpassword;
         // if($email === $orldemail && password_verify($password,$orldpassword)){
         //    echo "Email successfully";
         //    header("location:/");
            
         // }else{
         //    // echo "Email failed";
         //    $messageError["password"] = "Incorect password";
         //    $messageError["email"] = "Encorrect email";
         // }
         if(password_verify($password,$orldpassword)){
            echo "Email successfully";
            if($email === $orldemail){
               header("location:/");
               $messageError["email"] = "Encorrect email";
            }
            
         }else{
            // echo "Email failed";
            $messageError["password"] = "Incorect password";
         }
      }
    

}}


require "views/users/sign_in.view.php";