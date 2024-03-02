<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout - Catalogue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="bg-light text-black">

    <?php

    include "../database/db-connect.php";

    $_SERVER["REQUEST_METHOD"] == "POST";

    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    // var_dump($_POST);

    ?>

    <!------------------------ TRAITEMENT INSERTION BDD ------------------------>
    <main>
        <section id="update-form" class="vh-100 d-flex flex-column justify-content-center align-items-center m-0 p-5 text-black">

            <div class="d-flex flex-column justify-content-center align-items-center">

                <h1 class="mb-3 text-center">👍</h1>
                <p class="text-center fw-bold">Le produit a bien été ajouté au catalogue</p>

                <?php
                try {
                    // REQUETE
                    $sql = "INSERT INTO catalogue SET titre = '$titre', description = '$description', image = '$image'";

                    // PREPARATION DE LA REQUETE
                    $stmt = $db->prepare($sql);

                    // EXECUTION DE LA REQUETE
                    $stmt->execute();
                } catch (PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }

                ?>

            </div>

            <a class="text-white btn btn-success" href="../pages/admin-pannel.php">Retour page d'administration</a>

        </section>
    </main>

</body>

</html>