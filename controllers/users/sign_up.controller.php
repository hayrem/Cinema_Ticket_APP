
<?php
session_start();

$name_err=$email_err=$password_err=$comfirm_password_err="";

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);


//php form data validation function 
function testInput($data): string
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = testInput($_POST["name"]);
    $email = testInput($_POST["email"]);
    $password = testInput($_POST["password"]);
    $comfirm_password = testInput($_POST["comfirm_password"]);

    if (emty($name))
    {
        $name_err = 'Please enter you username';
    }
    elseif(($name != "/^[a-zA-Z1-0]{5,20}"))
    {
        $name_err = 'Please enter your username more that 5 letters and least that 20 letters';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $email_err = "Invalid format and please re-enter valid email"; 
    }
    elseif(empty($email))
    {
        $email_err = " Please enter your email";
    }
    if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
        // tell the user something went wrong
        $password_err = "Please enter your password more that 8 cheraters";
    }
    elseif(empty($password))
    {
        $password_err = 'Please enter your passowrd';
    }
    if (empty($comfirm_password)) {
        $comfirm_password_err = 'Please enter you ';
    }
    if ($password != $comfirm_password){
        $password_err="Password doesn't match";
        $comfirm_password_err="Password doesn't match";
    }
}
?>