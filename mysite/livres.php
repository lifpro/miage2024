<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple de page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php session_start();
    include "header.php" ?>
    <main>
        <p>Nos livres</p>
        <?php
        $fic = fopen('livres.txt', 'r');
        if ($fic) {
            while (($ligne = fgets($fic)) !== false) {
                echo $ligne . '<br>';
            }
        }


        ?>

    </main>
    <?php include "footer.php" ?>
</body>

</html>