<?php
session_start();

$_SESSION['name'] = $_POST['name'];

header('location: home.php');
?>
