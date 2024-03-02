    <?php

    include "db-connect.php";

    // RECUPERATION DE L'ID VIA L'URL
    $id = $_GET['id'];

    // SUPRESSION DE L'ELEMENT
    if ($_GET['id'] == $id) {
        $sql = "DELETE FROM catalogue WHERE ID = $id";
        $stmt = $db->prepare($sql);
        $stmt->execute();

        var_dump($stmt);
    }

    header("Location: ../admin-pannel.php");

    ?>