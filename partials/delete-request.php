<?php
require_once dirname(__DIR__) . "/database/db-connect.php";

$id = $_GET['id'];

if ($_GET['id'] == $id) {
    $sql = "DELETE FROM catalogue WHERE ID = $id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
}

header("Location: ../pages/admin-pannel.php");
exit();
