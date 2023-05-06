<?php
require_once ('./db.php');

$title      =$_GET['title'];
$comment    =$_GET['comment'];
$tel        =$_GET['tel'];
$city       =$_GET['city'];
$soc_link   =$_GET['soc_link'];
$check      =$_GET['accept'];

if($check){
    echo $title     .   '<br>';
    echo $comment   .   '<br>';
    echo $tel       .   '<br>';
    echo $city      .   '<br>';
    echo $soc_link  .   '<br>';
}
?>