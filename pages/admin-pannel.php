<?php
include dirname(__DIR__) . "/partials/header.php";
require_once dirname(__DIR__) . "/database/db-connect.php";

if (isset($_SESSION['admin'])) {
?>

    <!------------------------ ADMINISTRATION BASE DE DONNEE ------------------------>
    <main>
        <a href="#admin-pannel"><i class="down z-3 position-fixed p-3 bottom-0 end-0 fa-solid fa-circle-up"></i></a>
        <section id="admin-pannel" class="mt-5 d-flex flex-wrap justify-content-center align-items-center m-0 p-5 text-black">

            <div class="mt-5 d-flex justify-content-center align-items-center">
                <img class="w-25 m-5" src="../assets/imgs/admin.png" alt="Administration image">
                <div class="text-center">
                    <h1 class="text-center">Administration</h1>
                    <p class="text-center">Bienvenue sur votre espace d'administration</p>
                    <a href="add-product.php" class="w-100 fw-bold btn btn-success rounded p-3">Ajouter un produit</a>
                </div>
            </div>

            <?php
            $sql = "SELECT * FROM catalogue";
            $statement = $db->prepare($sql);
            $statement->execute();
            $products = $statement->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($products);
            ?>

            <!------------------------ LE CATALOGUE ------------------------>
            <div class="d-flex flex-wrap justify-content-center align-items-center m-0 text-black">

                <?php foreach ($products as $product) :
                ?>

                    <div class="w-100 card p-2 m-3 d-flex align-items-center justify-content-center">
                        <div>
                            <img class="card-img-top img-fluid" style="width: 7rem;" src="<?= $product['image'] ?>" alt="Image produit">
                            <p class="fw-bold btn btn-dark rounded text-center p-2 card-text">ID du produit : <?= $product['id'] ?></p>
                        </div>

                        <div class="d-flex flex-column align-items-center justify-content-centecard-body">

                            <h5 class="fw-bold text-center card-title"><?= $product['titre'] ?></h5>
                            <p class="text-center card-text"><?= $product['description'] ?></p>

                            <div class="d-flex align-items-center justify-content-center">
                                <a href="update-product.php?id=<?= $product['id'] ?>" class="fw-bold btn btn-warning rounded m-2 p-2">Modifier ce produit</a>
                                <a href="../partials/delete-request.php?id=<?= $product['id'] ?>" class="fw-bold btn btn-danger rounded p-2">Supprimer ce produit</a>
                            </div>

                        </div>

                    </div>

                <?php
                endforeach;
                ?>
            </div>

        </section>
    </main>

    <?php
    include dirname(__DIR__) . "/partials/footer.php";
    ?>

<?php
} else {
    header("Location: /notredamerefonte/pages/admin-login.php");
}
?>