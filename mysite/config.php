<?php
$server = "localhost";
$user = "dev";
$password = "dev";
$db = "biblio";
try {
    $connexion = new PDO("mysql:host=" . $server . ";dbname=" . $db, $user, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    die('Ooups une erreur est survenue ' . $e->getMessage());
}
