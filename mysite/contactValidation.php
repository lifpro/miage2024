<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['cv'])) {
    $nom = trim(htmlspecialchars($_POST['nom']));
    $email = trim(htmlspecialchars($_POST['email']));
    $message = trim(htmlspecialchars($_POST['message']));
    $newsletter = isset($_POST['newsletter']) ? "Oui" : "Non";
    $fileName = $_FILES['cv']['name'];
    $filePath = $_FILES['cv']['tmp_name'];
    if (empty($nom)) {
        echo "Le nom est requis";
    } else {
        echo "Nom : " . $nom . "<br>";
        echo "Email : " . $email . "<br>";
        echo "Message : " . $message . "<br>";
        echo "Inscription à la newletter : " . $newsletter . "<br>";
        echo "Nom du fichier : " . $fileName . "<br>";
        echo "Chement du fichier : " . $filePath . "<br>";
        if (move_uploaded_file($filePath, 'docs/' . $fileName)) {
            echo "fichier transferé";
        } else {
            echo "Ooups une erreure est survenue";
        }
    }
}
