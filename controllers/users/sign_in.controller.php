<?php

session_start();
require "models/users.model.php";
require "database/database.php";

?>

<?php 
$valueTrue = 0;

$messageError = [];


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
      //email
      $emailUserLogin = getUserEmail($email);
     
      if($emailUserLogin)
      {
         // echo "have email user login";
         $valueTrue += 1;
       
      }else
      {
         // echo "don't have emailUser login";
         $messageError["email"] = "Encorrect email";
      }
      // password
      $passwordLogin = passwordUserLogin();
      foreach ($passwordLogin as $users)
      {
         $orldPassword = $users['password'];
      }
      if(password_verify($password,$orldPassword))
      {
         // echo "correct password";
            $valueTrue += 1 ;
      }
      else
      {
         // echo "incroorec password";
         $messageError["password"] = 'Incorect password';
               
      }
      // echo $password;
   }
   if($valueTrue === 2){
      header("location: /");
      $firstName = usernameByEmail($email)['first_name'];
      $lastName = usernameByEmail($email)['last_name'];
      $remembering_timespan = time() + 7 * 24 * 60 * 60;// will store 1 week
      setcookie("email",$email,$remembering_timespan);
      setcookie("firstName", $firstName, $remembering_timespan);
      setcookie("lastName", $lastName, $remembering_timespan);
   }

   echo $valueTrue;

}
   
   
require "views/users/sign_in.view.php";