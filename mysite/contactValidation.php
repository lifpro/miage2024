<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    echo "Nom : " . htmlspecialchars($nom) . "<br>";
    echo "Email : " . htmlspecialchars($email) . "<br>";
}
