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
        <p>Bienvenue</p>
        <?php


        $patronyme = 'MOUSSA';

        $_SESSION['eleve'] = $patronyme;
        //setcookie('name', $patronyme, time() + 3600);

        ?>

    </main>
    <?php include "footer.php" ?>
</body>

</html>