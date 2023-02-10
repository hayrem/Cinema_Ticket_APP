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
if($_SERVER['REQUEST_METHOD'] === 'POST')
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
    if (impty($phoneNumber))
    {
        $messageError["phoneNumber"] = "Please enter a phone number";
    }
    if(empty($messageError))
    {
// store user information in database

        createUser($firstName,$lastName,$email,$phoneNumber);

        header("location:/");
    }
    
}



require "views/booking/booking.view.php";
require "views/partials/footer.php";

?>
