<?php
$_SESSION['name'] = null;
$_SESSION['email'] = null;
$_SESSION['address'] = null;
$_SESSION['number'] = null;
$_SESSION['password'] = null;;

session_destroy();
header("Location: ../index.php");
