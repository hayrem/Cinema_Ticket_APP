<?php
$name_err="";
$email_err="";
$password_err="";
$comfirm_password_err="";


//php form data validation function 
function testInput($data): string
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
}
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $name = testInput($_POST["username"]);
    $password = testInput($_POST["password"]);
    $comfirm_password = testInput($_POST["comfirm_password"]);
    $email =($_POST["email"]);
    

    if (empty($name))
    {
        $name_err = 'Please enter you username';

    }
    elseif(!preg_match("/^[a-zA-Z\d]+$/",$name ))
    {
        $name_err = 'Please enter your username more that 5 letters and least that 20 letters';


    }
    if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,5})+$/",$email))
    {
        $email_err = "Invalid format and please re-enter valid email"; 
    }
    elseif(empty($email))
    {
        $email_err = " Please enter your email";
    }
    if(empty($password))
    {
        $password_err = "Please enter your passowrd";
    }
    elseif(!preg_match("/^[a-zA-Z\d]{8,50}+$/" ,$password))
    {
        $password_err = 'Please enter your password more that 8 cheraters';
    }
    if (empty($comfirm_password)) {
        $comfirm_password_err = 'Please enter you ';
    }
    if ($password != $comfirm_password){
        $password_err="Password doesn't match";
        $comfirm_password_err="Password doesn't match";
    }
    if ($name_err==="" && $password_err==='' && $email_err===''  && $comfirm_password_err==='')
    {
        require ("models/sign_up.model.controller.php");
        header('Location:index.php');

    }
}
?>