<?php
require "database/database.php";

function createUser(string $firstName,string $lastName, string $email,string $password, string $profileImage) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (first_name,last_name, email,password,image) values (:first_name,:last_name, :email,:password, :image)");
    $statement->execute([
        ':first_name' => $firstName,
        ':last_name' => $lastName,
        ':email' => $email,
        ':password' => $password,
        ':image' => $profileImage,

    ]);
    return $statement->rowCount() > 0;
}

function getUserAccount(string $email,string $password)
{
    global $connection;
    $sql = "SELECT * FROM users WHERE user_name='$email' AND password='$password'";

	$stmt = $connection->prepare($sql);
	$stmt ->execute();
}


function getUserEmail(string $email):bool
{
    global $connection;
    $select_users = $connection->prepare("SELECT * FROM `users` WHERE email = ?");
    $select_users->execute([$email]);
    return $select_users->rowCount() > 0;
}


function passwordUserLogin():array
{
    global $connection;
    $sql = "SELECT password FROM users";
	$stmt = $connection->prepare($sql);
	$stmt ->execute();
    return $stmt->fetchAll();
}

function usernameByEmail($email): array
{
    global $connection;
    $sql = "SELECT* FROM users WHERE email = :email";
	$stmt = $connection->prepare($sql);
	$stmt ->execute([':email' => $email]);
    return $stmt->fetch();
}
function changePassword( $email,$newPassword)
{
    global $connection;
    $newPassword=password_hash($newPassword, PASSWORD_DEFAULT);
    $sql = "UPDATE users SET password= :newPassword WHERE email= :email";
	$stmt = $connection->prepare($sql);
	$stmt ->execute(
        [
            ':email' => $email,
            ':newPassword' => $newPassword,
        ]);
}

function userRole($email)
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE email = :email AND role = 'seller' ");
    $statement->execute([':email' => $email]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
 
}

