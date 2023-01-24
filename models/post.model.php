<?php

function createUser(string $userName, string $email,string $password, string $confirmPassword ) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (title, description) values (:title, :description)");
    $statement->execute([
        ':title' => $title,
        ':description' => $description

    ]);

    return $statement->rowCount() > 0;
}