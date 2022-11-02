<?php
require_once "cart_class.php";
require_once "order_class.php";
require_once "product.php";
require_once($_SERVER['DOCUMENT_ROOT']."/modules/db_module.php");
class Cart_Model{
    public function getCartItem($user_id){
        $link = null;
        taoKetNoi($link);
        $data = [];
        $sql = "SELECT * FROM tbl_cart WHERE user_id = '$user_id'";
        $result = chayTruyVanTraVeDL($link,$sql);
        while($rows = mysqli_fetch_assoc($result)){
            $cartItem = new CartClass($rows['user_id'],$rows['product_id'],$rows['product_quantity'],$rows['product_note']);
            $data[] = $cartItem;
        }
        giaiPhongBoNho($link,$result);
        return $data;
    }
    public function getProducts($product_id){
        $link = null;
        taoKetNoi($link);
        $sql="SELECT * FROM tbl_product WHERE product_id = '$product_id'";
        $result = chayTruyVanTraVeDL($link,$sql);
        while($rows = mysqli_fetch_assoc($result)){
            $product = new ProductClass($rows['product_id'],$rows['product_name'],$rows['product_size'],$rows['product_price'],
            $rows['product_preview'],$rows['product_thumnail'],$rows['product_maintenance'],$rows['product_producer'],$rows['category_id']);
        }
        return $product;
    }
    public function addCartItem($product_id){
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraveDL($link, "SELECT * from tbl_cart where product_id = $product_id and user_id = ". $_SESSION["user_id"]);
        $data = array();
        while($rows = mysqli_fetch_assoc($result))
        {
            $cart_item = new CartClass($rows["user_id"], $rows["product_id"], $rows["product_quantity"],$rows['product_note']);
            array_push($data, $cart_item);
        }
        if(count($data) <= 0)
        {
            $query = "INSERT INTO `tbl_cart` (`user_id`, `product_id`, `product_quantity`) VALUES ( '".$_SESSION["user_id"]."', '".$product_id."', '1')";
        }
        else
        {
            $data1 = array();
            $q = chayTruyVanTraveDL($link, "SELECT * from tbl_cart where product_id = $product_id and user_id = ". $_SESSION["user_id"]);
            $cart_item;
            while($rows = mysqli_fetch_assoc($q))
            {
                $cart_item = new CartClass($rows["user_id"], $rows["product_id"], $rows["product_quantity"],$rows['product_note']);
                array_push($data1, $cart_item);
            }
            $query = "UPDATE tbl_cart SET product_quantity = ".$cart_item->get_product_quantity()." where product_id = $product_id and user_id = ". $_SESSION["user_id"];
        }
        chayTruyVanKhongTraVeDL($link, $query);
        header("Location: cart_invoke.php");
        exit();
    }

}