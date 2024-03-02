<?php

include "../partials/header.php";
require "../database/db-connect.php";

session_start();

?>

<!------------------------ LE CONTENU MAJEUR (MAIN/SECTIONS/ETC) ------------------------>
<main>
    <a href="#boutique"><i class="down z-3 position-fixed p-3 bottom-0 end-0 fa-solid fa-circle-up"></i></a>
    <!------------------------ LE CATALOGUE ------------------------>
    <section id="boutique" class="d-flex flex-column justify-content-center align-items-center m-0 p-5 text-black">

        <div id="catalogue" class="d-flex flex-wrap justify-content-center align-items-center">

            <?php

            $sql = "SELECT * FROM catalogue ORDER BY titre ASC";
            $statement = $db->prepare($sql);
            $statement->execute();
            $products = $statement->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($products);

            foreach ($products as $product) :

                include("../partials/shop-cards.php");

            endforeach

            ?>

        </div>

    </section>
    <?php
    if (isset($_SESSION['admin'])) {
    ?>
        <a href="admin-pannel.php" class="fw-bold rounded-0 w-100 btn btn-success">Administrer la boutique</a>
    <?php
    }
    ?>
</main>

<?php

include "../partials/footer.php";
?>