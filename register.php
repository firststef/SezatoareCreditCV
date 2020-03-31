<?php
session_start();

define ('SLASH', DIRECTORY_SEPARATOR);
define ('DIRECTOR_SITE', dirname(__FILE__));

require_once DIRECTOR_SITE.SLASH."config.php";
require_once DIRECTOR_SITE.SLASH."util".SLASH."autoloader.php";

if (isset($_SESSION["utilizator"])) {
    header("Location: index.php");
}
else {
    $controller = "CAutentificare";
    $actiune = "";
    $parametri = "";
    $pagina_autentificare = "inregistrare";
}

if (isset($_POST["actiune"])) $actiune = $_POST["actiune"];

if ($actiune=="inregistrare"){
    $parametri = array($_POST["user"], $_POST["parola"]);
}

$control = new $controller($actiune, $pagina_autentificare, $parametri);
?>