<?php
    session_start();
    session_destroy();
    header('url = index.php');
    exit();
?>