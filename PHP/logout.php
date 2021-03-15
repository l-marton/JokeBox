<?php

session_start();
session_unset();
session_destroy();
$bejelentkezve = false;
$admin = false;
$jelentkezes_url = "login.php";

header('Location: index.php');
?>