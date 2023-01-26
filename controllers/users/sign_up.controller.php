<?php

session_start();

require "models/post.model.php";

$messageError = [];
function validation($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
}
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    
    $username = validation($_POST["username"]);
    $email = validation($_POST["email"]);
    $password = validation($_POST["password"]);
    $comfirm_password = validation($_POST["comfirm-password"]);
    
    if(empty($username)){
        $messageError["username"] = "please enter a username";
    }elseif(!preg_match("/^[a-zA-Z\d]+$/",$username))
    {
        $messageError["username"] = 'Username most more that 5 letters and least that 20 letters';
    }
    if(empty($email))
    {
        $messageError["email"] = " Please enter your email";
    }
    elseif (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,5})+$/",$email))
    {
        $messageError["email"] = "Invalid format and please re-enter valid email"; 
    }
    if(empty($password))
    {
        $messageError["password"] = "Please enter your password";
    }   
    elseif(!preg_match("/^[a-zA-Z\d]{8,50}+$/" ,$password))
    {
        $messageError["password"]  = 'Please enter your password more that 8 cheraters';
    }
    if (empty($comfirm_password)) 
    {
        $messageError["comfirm-password"] = 'Please enter you comfirm password';
    }
    if ($password != $comfirm_password)
    {
        $messageError["password"] ="Password doesn't match";
        $messageError["comfirm-password"] ="Password doesn't match";
    }
    if(empty($messageError))
    {

        $password = password_hash($password, PASSWORD_DEFAULT);
        $comfirm_password = password_hash($password, PASSWORD_DEFAULT);
        createUser($username,$email,$password,$comfirm_password);

        $_SESSION = $_POST['username'];
        header("location:/");
    }
    
}
require "views/users/sign_up.view.php";

?>

