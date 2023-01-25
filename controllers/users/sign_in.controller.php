<?php
session_start();
$email = ($_POST['email']);
$password = ($_POST['password']);
require ("sign_in.model.php");
require "../models/post.model.php";
$user = getUserAccount($email,$password);

if ($email===$user[0]['user_name'] && $password===$user[0]['password'])
{

    if(!empty($_POST["remember"])) 
    {
        setcookie ("email",$_POST["email"],time()+ 3600);
        setcookie ("password",$_POST["password"],time()+ 3600);
    } else {
        setcookie("email","");
        setcookie("password","");
    };
}
?>
<?php 
// session_start(); 
// include "db_conn.php";

// if (isset($_POST['uname']) && isset($_POST['password'])) {

// 	function validate($data){
//        $data = trim($data);
// 	   $data = stripslashes($data);
// 	   $data = htmlspecialchars($data);
// 	   return $data;
// 	}

// 	$uname = validate($_POST['uname']);
// 	$pass = validate($_POST['password']);

// 	if (empty($uname)) {
// 		header("Location: index.php?error=User Name is required");
// 	    exit();
// 	}else if(empty($pass)){
//         header("Location: index.php?error=Password is required");
// 	    exit();
// 	}else{
// 		// hashing the password
//         $pass = md5($pass);

        
// 		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

// 		$stmt = $conn->prepare($sql);
// 		$stmt ->execute();


// 		if ($stmt->rowCount() === 1) {
// 			$user = $stmt->fetch();
//             if ($user['user_name'] === $uname && $user['password'] === $pass) {
//             	$_SESSION['user_name'] = $user['user_name'];
//             	$_SESSION['name'] = $user['name'];
//             	$_SESSION['id'] = $user['id'];
//             	header("Location: home.php");
// 		        exit();
//             }else{
// 				header("Location: index.php?error=Incorect User name or password");
// 		        exit();
// 			}
// 		}else{
// 			header("Location: index.php?error=Incorect User name or password");
// 	        exit();
// 		}
// 	}
	
// }else{
// 	header("Location: index.php");
// 	exit();
// }