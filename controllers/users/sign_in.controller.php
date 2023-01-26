<?php
// session_start();
// // require ("sign_in.model.php");
// require "../../models/post.model.php";
// $email = ($_POST['email']);
// $password = ($_POST['password']);
// $user = getUserAccount($email,$password);

// if ($email===$user[0]['user_name'] && $password===$user[0]['password'])
// {

//     if(!empty($_POST["remember"])) 
//     {
//         setcookie ("email",$_POST["email"],time()+ 3600);
//         setcookie ("password",$_POST["password"],time()+ 3600);
//     } else {
//         setcookie("email","");
//         setcookie("password","");
//     };
// }
?>
<?php 
session_start(); 
require "views/users/sign_in.view.php";

require "database/database.php";

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['password']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_users = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select_users->execute([$email, $pass]);
   $row = $select_users->fetch(PDO::FETCH_ASSOC);

   if($select_users->rowCount() > 0){
      setcookie('user_id', $row['id'], time() + 60*60*24, '/');
      header('location:/');
   }else{
      $message[] = 'incorrect email or password!';
   }

   echo $message;
}
