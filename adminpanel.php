<?php
require_once 'functions.php';
Authlogin("login.php");

$username = $_SESSION['username'];
require "views/adminpanel.view.php";