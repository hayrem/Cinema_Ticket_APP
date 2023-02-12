<?php

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
    $cardName = validation($_POST["card-name"]);
    $cardNumber = validation($_POST["card-number"]);
    $expired = validation($_POST["expired"]);
    $cvv = validation($_POST["cvv"]);
    if(empty($cardName)){
        $messageError["firstName"] = "Please enter your card name";
    }elseif(!preg_match("/^[a-zA-Z\d]+$/",$cardName))
    {
        $messageError["card-name"] = 'Card name most more that 5 letters and least that 20 letters';
    }
    if(empty($cardNumber)){
        $messageError["card-number"] = "Please enter your card number";
    }elseif(!preg_match("/^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14})$/",$cardNumber))
    {
        $messageError["card-number"] = 'Card number must be 16 digits';
    }
    if(empty($expired))
    {
        $messageError["expired"] = "Please enter your expired";
    } 
    elseif (!preg_match("/^(0?[1-9]|1[0-2])([0-9]{2})$/",$expired))
    {
        $messageError["expired"] = "Expired must be only 4 digits"; 
    }
    if (empty($cvv)){
        $messageError['cvv'] = 'Please enter your cvv';
    }
    elseif (!preg_match("/^([1-9]\/|[2-9])$/",$cvv)){
        $messageError['cvv'] = 'CVV must be 3 digits';
    }
}

?>

<?php
header("location: /booking");