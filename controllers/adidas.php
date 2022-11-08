<?php
class Adidas{
    function Sort(){
        require_once "..\models\product.php";
        $product = new product();
        $result = $product->SortPrice("Adidas");
        return $result;
    }
}
?>