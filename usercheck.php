<?php
include "connection.php";
session_start();
$useremail=$_SESSION['login_user'];
if(!isset($_SESSION['login_user'])){
    header("location:login.php");
    die();
}