<?php


function connectToDB()
{
    try {
        return new PDO("mysql:host=localhost;dbname=phplearn", "root", "123456");
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function getUser($username,$conn)
{
    $statement=$conn->prepare("SELECT * FROM users WHERE username=:username");
    $statement->bindParam("username", $username);
    $statement->execute();
    $user=$statement->fetch(PDO::FETCH_OBJ);
    return $user?$user:false;
    
}

function saveUser($data, $conn)
{
    extract($data);

    $statement=$conn->prepare("INSERT INTO users (fullname,username,email,password) VALUE (:fullname,:username,:email,:password)");
    $statement->bindParam("fullname", $fullname);
    $statement->bindParam("username", $username);
    $statement->bindParam("email", $email);
    $statement->bindParam("password", $password);
    
    return $statement->execute();
   
    
    
}



function saveData($data)
{
    file_put_contents(DATABASE_LOCATION, "\n" . $data, FILE_APPEND);
}