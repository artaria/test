<?php
require_once "functions.php";

session_destroy();

$username=$_COOKIE['username'];
$password=$_COOKIE['password'];
if (isset($username) && isset($password)) {
    $conn=connectToDB();
    $user=getUser($username, $conn);
    if ($user) {
        if ($user->password == $password) {
            setcookie('username', '', time() - 60);
            setcookie('password','', time() - 60 );
        }
    }
}

    redirect("login.php");