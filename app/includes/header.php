<?php
require_once("includes/config.php");
require_once("includes/classes/PreviewProvider.php");
require_once("includes/classes/Entity.php");
require_once("includes/classes/CategoryContainers.php");
require_once("includes/classes/EntityProvider.php");

if(!isset($_SESSION["userLoggedIn"])) {
    header("Location: register.php");
}

$userLoggedIn = $_SESSION["userLoggedIn"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome to Crewflix</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    <script src="https://kit.fontawesome.com/7e513cdc92.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</head>

<body>
    <div class='wrapper'>