<?php
require_once 'functions.php';
Authlogout();
$status=null;
if (isPost()) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (validation_required([$username,$password])) {
        $password = hash_hmac("sha256", $password, "secret");
        $conn=connectToDB();
        $user = getUser($username, $conn);
        if ($user) {
            if ($user->password == $password) {
                if ($_POST['remember'] == true) {
                    setcookie('username', $username, time() + 60 * 60 * 24 * 7);
                    setcookie('password', $password, time() + 60 * 60 * 24 * 7);
                }
                $_SESSION['username'] = $username;
                redirect("adminpanel.php");
            }
            else
               $status = "user not exist";
        }
        else
            $status = "user not exist";
    }

}

require "views/login.view.php";