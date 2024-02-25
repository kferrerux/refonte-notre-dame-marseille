<?php

include "./partials/header.php";
require "./database/db-connect.php";

?>

<!------------------------ LE CONTENU MAJEUR (MAIN/SECTIONS/ETC) ------------------------>
<main>
    <a href="#boutique"><i class="down z-3 position-fixed p-3 bottom-0 end-0 fa-solid fa-circle-up"></i></a>
    <!------------------------ LE CATALOGUE ------------------------>
    <section id="boutique" class="d-flex flex-wrap justify-content-center align-items-center m-0 p-5 text-black">

        <?php

        $sql = "SELECT * FROM catalogue ORDER BY titre ASC";
        $statement = $db->prepare($sql);
        $statement->execute();
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($products);

        foreach ($products as $product) :

            include("./partials/shop-cards.php");

        endforeach

        ?>
    </section>
</main>

<?php

include "./partials/footer.php";
?>