<?php

require "views/partials/head.php";
require "views/partials/nav.php";

$messageError = [];
function validation($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
}
if (isset($_POST['payment']))
{if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $firstName = validation($_POST["firstName"]);
        $lastName = validation($_POST["lastName"]);
        $email = validation($_POST["email"]);
        $phoneNumber = validation($_POST["phoneNumber"]);
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
    if (empty($phoneNumber)){
        $messageError['phoneNumber'] = 'Please enter your phone number';
    }
    elseif (!preg_match("/^[0].[0-9]{7,8}+$/",$phoneNumber)){
        $messageError['phoneNumber'] = 'Zero mush in the front and Number mush be 9 or 10 number';
    }
}}

require "models/list_show.model.php";

$halls = showHall();
require "views/booking/booking.view.php";
require "views/partials/footer.php";