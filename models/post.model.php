<?php

function createUser(string $userName, string $email,string $password, string $confirmPassword ) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (user_name, email,password, confirm_password) values (:user_name, :email,:password, :confirm_password)");
    $statement->execute([
<<<<<<< HEAD
        // ':title' => $title,
        // ':description' => $description

=======
        ':user_name' => $userName,
        ':email' => $email,
        ':password' => $password,
        ':confirm_password' => $confirmPassword
>>>>>>> 4bb572f84cac47b6983fe87500fc349e1fc53482
    ]);
    return $statement->rowCount() > 0;
}