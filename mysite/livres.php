<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple de page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1rem;
            font-family: Arial, sans-serif;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            color: #333;
            font-weight: bold;
        }

        tr {
            transition: background-color 0.2s ease-in-out;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        caption {
            font-size: 1.2rem;
            margin: 10px 0;
            color: #555;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    //session_start();
    include "header.php";
    require 'config.php';
    $sql = "SELECT * FROM livres ORDER BY datepub DESC";
    $stmt = $connexion->query($sql);
    ?>
    <main>
        <h1>Nos livres</h1>

        <form action="create_livre.php" method="POST">
            <table>
                <tr>
                    <th> <label for="titre">Titre : </label></th>
                    <td> <input type="text" id="titre" value="" name="titre" required /></td>


                    <th> <label for="auteur">Auteur : </label></th>
                    <td> <input type="text" id="auteur" value="" name="auteur" required /></td>

                    <th> <label for="datepub">Date de publication : </label></th>
                    <td> <input type="date" id="datepub" name="datepub" required /></td>

                    <th></th>
                    <td>
                        <button type="submit">Enregistrer</button>
                    </td>
                </tr>


            </table>
        </form>

        <table>
            <tr>
                <th> <label>ID</label></th>
                <th> <label>Titre</label></th>
                <th> <label>Auteur</label></th>
                <th> <label>Date de publication</label></th>
            </tr>
            <?php while ($l = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <tr>
                    <td> <?php echo $l['id'] ?></td>
                    <td> <?= $l['titre'] ?></td>
                    <td> <?= $l['auteur'] ?></td>
                    <td> <?= $l['datepub'] ?></td>
                </tr>
            <?php endwhile; ?>

        </table>

    </main>
    <?php include "footer.php" ?>
</body>

</html>