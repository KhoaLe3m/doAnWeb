<?php
    require_once "../controllers/cart_controller.php";
    $cart_controller = new CartController();
    $cart_controller->purchase($_POST["userid"]);
?>