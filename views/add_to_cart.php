<?php
session_start();
require_once "../controllers/cart_controller.php";
if (isset($_SESSION['userlogin'])) {
    $cartController = new CartController();
    $cartController->addProductToCart($_POST['product_id'], $_POST['product_quantity']);
} else {
    header("location: index.php");
}
