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

            // RECUPERATION DES DONNEES DE L'ADMIN
            $sql = "SELECT * FROM administration";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            // FETCHALL : ON RECUPERE UN TABLEAU DE TABLEAU
            $admins = $stmt->fetch(PDO::FETCH_ASSOC);
            // var_dump();

            $adminUsername = $admins['username'];
            $adminPassword = $admins['password'];

            // HASHAGE DU MOT DE PASSE
            $userPassword = $_POST['password'];
            $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

            // var_dump($userPassword);
            // var_dump($hashedPassword);

            // CONDITION DE CONNEXION
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                if (isset($_POST['username']) && isset($_POST['password'])) {

                    if ($_POST['username'] == $adminUsername && password_verify($userPassword, $adminPassword)) {

                        $_SESSION['admin'] = $_POST['username'];
                        session_start();

                        // var_dump($_SESSION);
                        header('Location: admin-pannel.php');
                    } else {

                        echo '<p style="border-radius : 10px; padding: 10px; text-align: center; width: 100%; background-color: red; font-size: 16px; font-weight: bold; align-self: center; color: white;">Nom d\'utilisateur ou mot de passe invalide' . '</p>';
                    }
                }
            }

            ?>


        </div>

    </section>
</main>

<?php

include "../partials/footer.php";

?>