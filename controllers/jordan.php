<?php
class Jordan{
    function Sort(){
        require_once "..\models\product.php";
        $product = new product();
        $result = $product->SortPrice("Jordan");
        return $result;
    }
}
?>