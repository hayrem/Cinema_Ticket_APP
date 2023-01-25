<?php
session_start();
$username = ($_POST['username']);
$password = ($_POST['password']);
<<<<<<< HEAD
require ("models/sign_in.model.php");
=======
require ("sign_in.model.php");
>>>>>>> fb05cb0435193f5bcdcfb511237ed4881f090cd0
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