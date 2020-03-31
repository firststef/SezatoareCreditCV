<?php
session_start();

define ('SLASH', DIRECTORY_SEPARATOR);
define ('DIRECTOR_SITE', dirname(__FILE__));

require_once DIRECTOR_SITE.SLASH."config.php";
require_once DIRECTOR_SITE.SLASH."util".SLASH."autoloader.php";

if (isset($_SESSION["utilizator"])) {
    $controller = "CMesaje";
    $actiune = "afiseazaMesaje";
    $parametri = "";
}
else {
    header("Location: login.php");
}

if (isset($_POST["actiune"])) $actiune = $_POST["actiune"];

if ($actiune == "adaugaMesaj"){
    $parametri = array($_SESSION["utilizator"], $_POST["mesaj"]);
}
if ($actiune == "stergeMesaj"){
    $parametri = array($_POST["id"]);
}

if ($actiune=="triggerModificaMesaj"){
    $parametri = array($_POST["id"]);
}

if ($actiune=="salveazaMesaj"){
    $parametri = array($_POST["id"], $_POST["mesaj"]);
}

if ($actiune=="deautentificare"){
    unset($_SESSION["utilizator"]);
    header("Location: login.php");
}

$control = new $controller($actiune, $parametri);
?>