<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = trim(htmlspecialchars($_POST['nom']));
    $email = trim(htmlspecialchars($_POST['email']));
    $message = trim(htmlspecialchars($_POST['message']));
    $newsletter = isset($_POST['newsletter']) ? "Oui" : "Non";
    if (empty($nom)) {
        echo "Le nom est requis";
    } else {
        echo "Nom : " . $nom . "<br>";
        echo "Email : " . $email . "<br>";
        echo "Message : " . $message . "<br>";
        echo "Inscription à la newletter : " . $newsletter . "<br>";
    }
}
