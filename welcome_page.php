<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./style.css">

<style type="text/css">
    body
{
    background-image: url("bg2.jpg");
    background-position: 100%;
    width: 100%;
    height: 100%;
    color: #fff;
}
</style>
</html>




<?php
session_start();
if(isset($_SESSION['username']))
{
    echo "<h1>welcome,".$_SESSION['username']."</h1>";
    echo "<br>";
    echo "<a href='./logout.php'>Logout</a>";
}
else
{
    header("location:/");
}

?>