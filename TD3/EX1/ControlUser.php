<?php
require 'User.php';
if((isset ($_POST['login']))&& isset($_POST['password'])){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $user = new User($login , $password);
    if (($user->connect())==true)
    echo ($user);
}else{
    header("location : authentification.html");
}
?>