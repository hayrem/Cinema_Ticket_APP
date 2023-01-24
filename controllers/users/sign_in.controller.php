<?php
session_start();
$username = ($_POST['username']);
$password = ($_POST['password']);
require ("sign_in.model.php");
$user=getUseraccount($username,$password);

if ($username===$user[0]['user_name'] && $password===$user[0]['password'])
{

    if(!empty($_POST["remember"])) 
    {
        setcookie ("username",$_POST["username"],time()+ 3600);
        setcookie ("password",$_POST["password"],time()+ 3600);
    } else {
        setcookie("username","");
        setcookie("password","");
    };
}
?>