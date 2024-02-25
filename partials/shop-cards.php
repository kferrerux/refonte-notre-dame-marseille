<!-- AFFICHAGE DE LA CARTE PRODUIT
--------------------------------->
<div class="vh-100 d-flex flex-row align-items-center justify-content-center">

    <div id="product-card" class="d-flex justify-content-center card p-3 m-3" style="width: 17rem; height: 28rem;">
        <img class="m-3 align-self-center card-img-top img-fluid" style="width: 10rem; height: 6rem" src="<?= $product['image'] ?>" alt="Image produit">
        <hr class="w-100 m-0 p-0 border-dark border-1">
        <div class="d-flex flex-column align-items-center justify-content-center card-body">
            <h5 class="text-center card-title"><?= $product['titre'] ?></h5>
            <p class="text-center p-3 card-text"><?= $product['description'] ?></p>
        </div>
        <a href="product-details.php?id=<?= $product['id'] ?>" class="align-self-center rounded p-3 btn-card">Détail produit</a>
    </div>

</div>