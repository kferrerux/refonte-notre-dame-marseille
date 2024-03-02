<?php

include "../partials/header.php";
include "../database/db-connect.php";

?>

<!------------------------ LE CONTENU MAJEUR (MAIN/SECTIONS/ETC) ------------------------>
<main>
    <a href="#product"><i class="down z-3 position-fixed p-3 bottom-0 end-0 fa-solid fa-circle-up"></i></a>
    <!------------------------ LE CATALOGUE ------------------------>
    <section id="product-page" class="d-flex justify-content-center align-items-center m-0 p-5 text-black">
        <div class="container d-flex flex-wrap justify-content-center align-items-center m-0 p-5 text-black">
            <?php

            $id = $_GET['id'];

            $sql = "SELECT * FROM catalogue WHERE id = $id";
            $statement = $db->prepare($sql);
            $statement->execute();
            $products = $statement->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($products);

            foreach ($products as $product) :

                include "../partials/product-display.php";

            endforeach

            ?>

        </div>

    </section>
</main>

<?php

include "../partials/footer.php";

?>