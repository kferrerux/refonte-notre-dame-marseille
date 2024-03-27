<?
include "../partials/header.php";
include "products.poo.php";

$product1 = new Product("https://cdn-icons-png.flaticon.com/512/703/703312.png", "Colombe", "Colombe App Description");
$product2 = new Product("https://cdn-icons-png.flaticon.com/512/12006/12006517.png", "Olivier App", "Olivier App Description");


$product1->productCard();
$product2->productCard();


include "../partials/footer.php";
