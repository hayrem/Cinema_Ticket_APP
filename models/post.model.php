<?php

function createUser(string $userName, string $email,string $password, string $confirmPassword ) : bool
{
    global $connection;
<<<<<<< HEAD
    $statement = $connection->prepare("insert into users (user_name, email,password, confirm_password) values (:user_name, :email,:password, :confirm_password)");
    $statement->execute([
        ':user_name' => $userName,
        ':email' => $email,
        ':password' => $password,
        ':confirm_password' => $confirmPassword
=======
    $statement = $connection->prepare("insert into users (title, description) values (:title, :description)");
    $statement->execute([
        ':title' => $title,
        ':description' => $description

>>>>>>> 765d6a985933617cf6d66cd285d33c9abb40f2ef
    ]);

    return $statement->rowCount() > 0;
}