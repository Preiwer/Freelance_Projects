<?php
require_once ('./db.php');

$login      =$_GET['login'];
$email      =$_GET['email'];
$password   =$_GET['pass'];
$retry_pass =$_GET['retry_pass'];
$accept     =$_GET['accept'];

$ip         =$_SERVER['REMOTE_ADDR'];

if ($password != $retry_pass) {
    echo "Password didn't match";
    exit;
} 
if (!$accept){
    echo "accept isn't true";
    exit;
}
if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "email isn't valid";
    exit;
}
else {
    if ($result =$db->query("INSERT INTO `users` (login,mail,password,IP) VALUES ('{$login}','{$email}','{$password}','{$ip}')")){
        echo "Success";
        foreach ($result as $row) {
            echo $row['login'] . '<br>';
            echo $row['mail'] . '<br>';
            echo $row['password'] . '<br>';
            echo $row['IP'] . '<br>';
        }
    }
}
?>