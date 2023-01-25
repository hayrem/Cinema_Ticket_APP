<?php

function createUser(string $userName, string $email,string $password, string $confirmPassword ) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (user_name, email,password, confirm_password) values (:user_name, :email,:password, :confirm_password)");
    $statement->execute([
        ':user_name' => $userName,
        ':email' => $email,
        ':password' => $password,
        ':confirm_password' => $confirmPassword
    ]);
    return $statement->rowCount() > 0;
}

function getUserAccount(string $email,string $password)
{
    global $connection;
    $sql = "SELECT * FROM users WHERE user_name='$email' AND password='$password'";

	$stmt = $$connection->prepare($sql);
	$stmt ->execute();
}