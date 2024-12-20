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
        <form action="contactValidation.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <th> <label for="nom">Nom : </label></th>
                    <td> <input type="text" id="nom" name="nom" required /></td>
                </tr>
                <tr>
                    <th> <label for="email">Email : </label></th>
                    <td> <input type="email" value="ysalissou@gmail.com" id="email" name="email" required /></td>
                </tr>
                <tr>
                    <th><label for="message">Message : </label></th>
                    <td><textarea id="message" name="message" required></textarea></td>
                </tr>
                <tr>
                    <th></th>
                    <td><label><input type="checkbox" name="newsletter" value="oui" />S'inscrire à la newsletter</label></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="file" id="cv" name="cv" /></td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <button type="submit">Envoyer</button>
                    </td>
                </tr>

            </table>
        </form>
    </main>
    <?php include "footer.php" ?>
</body>

</html>