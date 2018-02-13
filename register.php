<?php
require_once "functions.php";
Authlogout();
$status=null;

if (isPost()) {
    extract($_POST);
    if (validation_required([$name,$family,$username,$email,$password])) {
        if (validation_email($email)) {
            $password = hash_hmac("sha256", $password, "secret");
            $data=[
                "fullname"=>$name." ".$family,
                "username"=>$username,
                "email"=>$email,
                "password"=>$password
            ];
            $conn=connectToDB();
            if (!getUser($username,$conn)) {
                if(saveUser($data,$conn))
                redirect("login.php");
                else
                    $status = "user not save please try again!";
            }
            else
                $status="The username is exist";
        } else {
            $status = "email format is incorect";
        }
      }
    else
        $status = "username or password is required!";
}

require_once "views/register.view.php";