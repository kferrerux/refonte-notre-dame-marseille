<?php

include "../partials/header.php";
require_once "../database/db-connect.php";

?>

<!------------------------ LOGIN ADMINISTRATEUR BASE DE DONNEE ------------------------>
<main>
    <a href="#admin-pannel"><i class="down z-3 position-fixed p-3 bottom-0 end-0 fa-solid fa-circle-up"></i></a>
    <section id="admin-pannel" class="mt-5 d-flex flex-wrap justify-content-center align-items-center m-0 p-5 text-black">

        <div class="mt-5 d-flex flex-column justify-content-center align-items-center">

            <div class="text-center">
                <img class="w-25 m-5" src="../assets/imgs/Lock-icon.png" alt="Administration image">
                <h1 class="text-center">Administration</h1>
                <p class="text-center">Veuillez vous connecter pour accéder à l'espace administration</p>
            </div>

            <form action="admin-login.php" method="POST">

                <div>
                    <label for="login" class="form-label">Identifiant
                        <input type="text" class="form-control" name="username" id="username" placeholder="Identifiant" required></label>

                    <label for="password" class="form-label">Mot de passe
                        <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required></label>
                </div>

                <input type="submit" value="Connexion" class="my-3 w-100 mt-3 fw-bold btn btn-success rounded p-3">

            </form>

            <?php

            // ON VERIFIE LA SOUMISSION DU FORMULAIRE
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // ON VERIFIE SI LES VARIABLES SONT DEFINIES
                if (isset($_POST['username']) && isset($_POST['password'])) {
                    // ON RECUPERE LES DONNES DE L'ADMINISTRATEUR
                    $sql = "SELECT * FROM administration";
                    $stmt = $db->prepare($sql);
                    $stmt->execute();
                    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

                    // ICI NOUS ALLONS VERIFIER QUE LES DONNEES EXISTENT
                    if ($admin) {
                        // Récupération des informations d'identification de l'administrateur
                        $adminUsername = $admin['username'];
                        $adminPassword = $admin['password'];

                        // ON RECUPERE LE MOT DE PASSE SAISIE PAR L'UTILISATEUR
                        $userPassword = $_POST['password'];

                        // SI LE MOT DE PASSE N'EST PAS VIDE
                        if (!empty($userPassword)) {
                            // VERIFICATION INFORMATIONS D'IDENTIFICATION
                            if ($_POST['username'] == $adminUsername && password_verify($userPassword, $adminPassword)) {
                                $_SESSION['admin'] = true;
                            } else {
                                echo '<p style="border-radius: 10px; padding: 10px; text-align: center; width: 100%; background-color: red; font-size: 16px; font-weight: bold; align-self: center; color: white;">Nom d\'utilisateur ou mot de passe invalide</p>';
                            }
                        } else {
                            echo '<p style="border-radius: 10px; padding: 10px; text-align: center; width: 100%; background-color: red; font-size: 16px; font-weight: bold; align-self: center; color: white;">Veuillez saisir un mot de passe</p>';
                        }
                    } else {
                        echo '<p style="border-radius: 10px; padding: 10px; text-align: center; width: 100%; background-color: red; font-size: 16px; font-weight: bold; align-self: center; color: white;">Aucun administrateur trouvé</p>';
                    }
                } else {
                    echo '<p style="border-radius: 10px; padding: 10px; text-align: center; width: 100%; background-color: red; font-size: 16px; font-weight: bold; align-self: center; color: white;">Veuillez saisir un nom d\'utilisateur et un mot de passe</p>';
                }
            }

            ?>

        </div>

    </section>
</main>

<?php

include "../partials/footer.php";

?>