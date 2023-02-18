<?php


session_start();

require "views/partials/head.php";
require "models/users.model.php";

$emailTrue = false;

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
    
    $firstName = validation($_POST["firstName"]);
    $lastName = validation($_POST["lastName"]);
    $email = validation($_POST["email"]);
    $password = validation($_POST["password"]);
    $confirmPassword = validation($_POST["comfirm-password"]);
    $sellerRole = 'customer';
    if(empty($firstName)){
        $messageError["firstName"] = "please enter a first name";
    }elseif(!preg_match("/^[a-zA-Z\d]+$/",$firstName))
    {
        $messageError["firstName"] = 'Username most more that 5 letters and least that 20 letters';
    }
    if(empty($lastName)){
        $messageError["lastName"] = "please enter a last name";
    }elseif(!preg_match("/^[a-zA-Z\d]+$/",$lastName))
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

    else{

        // it will be returned number 1
        $emailUser = getUserEmail($email);
        
        if($emailUser){
            $messageError['email'] = 'email already taken!';
        }else{
            $emailTrue = true;
        }
    }
    if(empty($password))
    {
        $messageError["password"] = "Please enter your password";
    }   
    elseif(!preg_match("/^[a-zA-Z\d]{8,50}+$/" ,$password))
    {
        $messageError["password"]  = "Please enter your password more that 8 cheraters";
    }
    if (empty($confirmPassword)) 
    {
        $messageError["comfirm-password"] = "Please enter you comfirm password";
    }
    if ($password != $confirmPassword)
    {
        $messageError["password"] = "Password doesn't match";
        $messageError["comfirm-password"] = "Password doesn't match";
    }
    $profileImage = "";
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
    if(empty($messageError) && $emailTrue = true)
    {
// store user information in database
        $password = password_hash($password, PASSWORD_DEFAULT);
        createUser($firstName,$lastName,$email,$password,$profileImage);
//  store user information in cookie
        $remembering_timespan = time() + 7 * 24 * 60 * 60;// will store 1 week
        setcookie("email",$email,$remembering_timespan);
        setcookie("firstName",$firstName,$remembering_timespan);
        setcookie("lastName",$lastName,$remembering_timespan);
        setcookie ("userrole",$sellerRole, $remembering_timespan);
        setcookie("image",$profileImage,$remembering_timespan);

// store user information in session 
        $_SESSION ['firstNme'] = $_POST['firstName']; $_SESSION['lastName'] = $_POST['lastName']; $_SESSION['email'] = $_POST['email'];$_SESSION['image'] = $profileImage;
        header("location:/");
    }
    
}
require "views/users/sign_up.view.php";

?>

