<?
include "bd.php";

if($_POST){
    $title = $_POST['title'];
    $insert = mysqli_query($bd,"INSERT INTO `admin`( `title`) VALUES ('$title')");

    header("location:index.php");
}