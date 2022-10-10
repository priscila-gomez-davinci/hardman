<?php

session_start();

$login = $_SESSION['auth'] ?? null;

if($login){

    unset($_SESSION['auth']);

}

header('Location: login.php');

?>