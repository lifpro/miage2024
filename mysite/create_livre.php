<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple de page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .message {
            text-align: center;
        }

        .message p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out, transform 0.2s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .btn:active {
            transform: translateY(0);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>

</head>

<body>
    <?php
    require 'config.php';
    include "header.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titre = trim(htmlspecialchars($_POST['titre']));
        $auteur = trim(htmlspecialchars($_POST['auteur']));
        $datepub = trim(htmlspecialchars($_POST['datepub']));

        try {
            $sql = "INSERT INTO livres (titre,auteur,datepub) VALUES (:titre,:auteur,:datepub);";
            $stm = $connexion->prepare($sql);
            $stm->execute(['titre' => $titre, 'auteur' => $auteur, 'datepub' => $datepub]);
    ?>
            <div class="message">
                <p>Livre ajouté avec succès !</p>
                <a href="livres.php" class="btn">Retour</a>
            </div>
    <?php
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
        include "footer.php";
    }
    ?>
</body>

</html>