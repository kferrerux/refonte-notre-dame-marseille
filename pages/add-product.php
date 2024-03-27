<?php
include dirname(__DIR__) . "/partials/header.php";
require_once dirname(__DIR__) . "/database/db-connect.php";
?>

<!------------------------ ADMINISTRATION BASE DE DONNEE ------------------------>
<main>
    <a href="#update"><i class="down z-3 position-fixed p-3 bottom-0 end-0 fa-solid fa-circle-up"></i></a>
    <section id="update-form" class="mt-5 d-flex flex-wrap justify-content-center align-items-center m-0 p-5 text-black">

        <div class="mt-5 d-flex justify-content-center align-items-center">

            <form action="../partials/add-request.php" method="POST" class="w-100" enctype="multipart/form-data">

                <h1 class="mb-3 text-center">Ajouter un produit</h1>
                <label class="form-label fw-bold" for="titre">Titre du produit</label>
                <input type="text" name="titre" id="titre" class="rounded-5 bg-light form-control my-1 mb-2 p-2" required placeholder="Titre du produit">

                <label class="form-label fw-bold" for="titre">Description</label>
                <textarea name="description" id="description" class="rounded-5 bg-light my-1 mb-2 form-control no-resize" required placeholder="Description du produit"></textarea>

                <label class="form-label fw-bold" for="titre">Lien vers l'image</label>
                <input type="text" name="image" id="image" class="rounded-5 bg-light form-control my-1 mb-2 p-2" required placeholder="URL de l'image">

                <label for="upload" class="form-label fw-bold">Choisir une image (Ordinateur)</label>
                <input type="file" name="upload" id="upload" class="form-control my-1">

                <div class="d-flex justify-content-center align-items-center">

                    <input type="submit" value="Ajouter" class="w-100 mt-3 fw-bold btn btn-success rounded p-3">
                    <a class="w-100 mx-3 mt-3 fw-bold btn btn-danger rounded p-3" href="../pages/admin-pannel.php">Annuler</a>

                </div>

            </form>

        </div>

    </section>
</main>

<?php
include dirname(__DIR__) . "/partials/footer.php";
?>