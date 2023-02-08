<?php
// require ('models/list_show.model.php');
if (isset($_POST['submit']))
{
    $mv_title = $_POST['title'];
    $mv_genre = $_POST['genre'];
    $mv_country = $_POST['country'];
    $mv_duration = $_POST['duration'];
    $mv_language = $_POST['language'];
    $mv_released = $_POST['released'];
    $mv_image = $_POST['image'];
    $mv_description =$_POST['description'];
    $mv_trailer = $_POST['trailer'];
    // $show_date =$_POST['date'];
    // $show_time_start = $_POST['time_start'];
    // $show_time_end =$_POST['time_end'];
    // $hallName = $_POST['name'];
    // $total_seat = $mv_title_POST['total_seat'];
    
    echo "<h3>".$mv_title."</h3>";
    echo "<h3>".$mv_genre."</h3>";
    echo "<h3>".$mv_country."</h3>";
    echo "<h3>".$mv_duration."</h3>";
    echo "<h3>".$mv_language."</h3>";
    echo "<h3>".$mv_released."</h3>";
    echo "<h3>".$mv_image."</h3>";
    echo "<h3>".$mv_description."</h3>";
    echo "<h3>".$mv_trailer."</h3>";
}

// addNewMovie( $title, $genre,  $mv_country, $mv_duration, $mv_language, $mv_released, $mv_image, $mv_description,  $mv_trailer) ;


// form validation $emailTrue = false;

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
    
    $title = validation($_POST["$title"]);
    $lastName = validation($_POST["lastName"]);
    $email = validation($_POST["email"]);
    $password = validation($_POST["password"]);
    $confirmPassword = validation($_POST["comfirm-password"]);
    
    if(empty($title)){ 
        $messageError["$title"] = "please enter a first name";
    }elseif(!preg_match("/^[a-zA-Z\d]+$/",$title))
    {
        $messageError["$title"] = 'Username most more that 5 letters and least that 20 letters';
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
    if(empty($messageError) && $emailTrue = true)
    {
// store user information in database
        $password = password_hash($password, PASSWORD_DEFAULT);
        createUser($title,$lastName,$email,$password);
//  store user information in cookie
        $remembering_timespan = time() + 7 * 24 * 60 * 60;// will store 1 week
        setcookie("email",$email,$remembering_timespan);
        setcookie("$title",$title,$remembering_timespan);
        setcookie("lastName",$lastName,$remembering_timespan);
// store user information in session 
        $_SESSION ['firstNme'] = $_POST['$title']; $_SESSION['lastName'] = $_POST['lastName']; $_SESSION['email'] = $_POST['email'];
        header("location:/");
    }
    
}
require("views/seller/create_movie.view.php");
?>


