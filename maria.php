<?php
    session_start();
    $_SESSION["utilizator"]="Maria";
    header("Location: index.php");
?>