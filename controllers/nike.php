<?php
class Nike{
    function Sort(){
        require_once "..\models\product.php";
        $product = new product();
        $result = $product->SortPrice("Nike");
        return $result;
    }
}
?>