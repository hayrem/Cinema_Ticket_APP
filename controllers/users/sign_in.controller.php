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
   if (isset($_POST['submit']) && isset($_FILES['image'])) 
   {     
      $imgName = $_FILES['image']['name'];
      $tmp_name = $_FILES['image']['tmp_name'];
      $img_ex = pathinfo($imgName, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);
      $allowed_exs = array("jpg", "jpeg", "png"); 

      if(in_array($img_ex_lc, $allowed_exs))
      {
         $profileImage = uniqid("IMG-", true).'.'.$img_ex_lc;
         $img_upload_path = 'uploads/'.$profileImage;
         move_uploaded_file($tmp_name, $img_upload_path);
      }   
   }  
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
     
         $valueTrue += 1;
       
      }else
      {

         $messageError["email"] = "Incorrect email";

      }
      // password
      $passwordLogin = passwordUserLogin();
      foreach ($passwordLogin as $users)
      {
         $orldPassword = $users['password'];
      }
      if(password_verify($password,$orldPassword))
      {
 
         $valueTrue += 1 ;
      }
      else
      {

         $messageError["password"] = 'Incorect password';   

      }

   }
   if($valueTrue === 2){
      $firstName = usernameByEmail($email)['first_name'];
      $lastName = usernameByEmail($email)['last_name'];
      $profileImage = usernameByEmail($email)['image'];
      $sellerRole = usernameByEmail($email)['role'];
      $remembering_timespan = time() + 7 * 24 * 60 * 60;// will store 1 week
      if (empty($_POST['remember'])){
         $remembering_timespan = time() + 60*60; // will store 1 hour
      }

      setcookie("email",$email,$remembering_timespan);
      setcookie("firstName", $firstName, $remembering_timespan);
      setcookie("lastName", $lastName, $remembering_timespan);
      setcookie ("userrole",$sellerRole, $remembering_timespan);
      setcookie ("image",$profileImage, $remembering_timespan);
      if (!empty(userRole($email))){
         header('location: /seller');
      }else{
         header("location: /");
      }
   }
   
  
}
   
   
require "views/users/sign_in.view.php";