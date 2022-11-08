<?php 
class Search{
    function Search(){
        require_once "..\models\product.php";
        $product = new product();
        $text = $_GET['keyword'];
        $result = $product->Search($text);
        return $result;
    }
}
?>