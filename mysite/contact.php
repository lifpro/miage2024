<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple de page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include "header.php" ?>
    <main>
        <p>Formulaire de contact</p>
        <form action="contactValidation.php" method="POST">
            <label for="nom">Nom : </label>
            <input type="text" id="nom" name="nom" required />
            <label for="email">Email : </label>
            <input type="email" id="email" name="email" required />
            </br></br>
            <label for="message">Message : </label>
            <textarea id="message" name="message" required></textarea>
            </br></br>
            <label><input type="checkbox" name="newsletter" value="oui" />S'inscrire à la newsletter</label>
            </br></br>
            <button type="submit">Envoyer</button>
        </form>
    </main>
    <?php include "footer.php" ?>
</body>

</html>