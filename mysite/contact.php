<!DOCTYPE html>
<html>

<head></head>

<body>
    <?php include "header.php" ?>
    <p>Formulaire de contact</p>
    <form action="contactValidation.php" method="POST">
        <label for="nom">Nom : </label>
        <input type="text" id="nom" name="nom" required />
        <label for="email">Email : </label>
        <input type="email" id="email" name="email" required />
        </br></br>
        <button type="submit">Envoyer</button>
    </form>
    <?php include "footer.php" ?>
</body>

</html>