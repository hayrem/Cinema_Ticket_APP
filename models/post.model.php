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