<?php
    session_start();
    require '../backend/db/config.php';
    session_destroy();

    header('Location: login.php');
?>
