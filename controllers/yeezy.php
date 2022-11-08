<?php
class Yeezy{
    function Sort(){
        require_once "..\models\product.php";
        $product = new product();
        $result = $product->SortPrice("Yeezy");
        return $result;
    }
}
?>