<!-- AFFICHAGE DE LA PAGE DU PRODUIT
----------------------------------->
<section id="product" class="p-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?= $product['image'] ?> " alt="Image produit" style="width: 100%; height: 100%; object-fit: cover;"></div>
            <div class=" col-md-6">
                <div class="small mb-1">SKU: BST-498</div>
                <h1 class="display-5 fw-bolder"><?= $product['titre'] ?></h1>
                <div class="fs-5 mb-5">
                    <span class="text-decoration-line-through">A définir</span>
                    <span>€00.00</span>
                </div>
                <p class="lead"><?= $product['description'] ?></p>
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                    <a class="btn-card rounded flex-shrink-0 me-3" href="404.php">Ajouter au panier</a>
                </div>
            </div>
            <a class="fw-bold my-5 p-3 w-100 btn btn-dark" href="shop.php">RETOUR AU CATALOGUE</a>
            <div class="d-flex justify-content-center align-items-center">
                <?php
                if (isset($_SESSION['admin'])) {
                ?>
                    <a class="fw-bold btn btn-warning rounded flex-shrink-0 me-3" href="update-product.php?id=<?= $product['id'] ?>">Modifier le produit</a>
                    <a class="fw-bold btn btn-danger rounded flex-shrink-0 me-3" href="../partials/delete-request.php?id=<?= $product['id'] ?>">Supprimer le produit</a>
                <?php
                }
                ?>
            </div>
        </div>
        <hr class="my-5">
    </div>
</section>