<?php
require_once "cart_class.php";
require_once "order_class.php";
require_once "product_class.php";
require_once "../modules/db_module.php";
class Cart_Model
{
    public function getCartItem($user_id)
    {
        $link = null;
        taoKetNoi($link);
        $data = [];
        $sql = "SELECT * FROM tbl_cart WHERE user_id = '$user_id'";
        $result = chayTruyVanTraVeDL($link, $sql);
        while ($rows = mysqli_fetch_assoc($result)) {
            $cartItem = new CartClass($rows['user_id'], $rows['product_id'], $rows['product_quantity']);
            $data[] = $cartItem;
        }
        giaiPhongBoNho($link, $result);
        return $data;
    }
    public function getProducts($product_id)
    {
        $link = null;
        taoKetNoi($link);
        $sql = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
        $result = chayTruyVanTraVeDL($link, $sql);
        while ($rows = mysqli_fetch_assoc($result)) {
            $product = new ProductClass(
                $rows['product_id'],
                $rows['product_name'],
                $rows['product_size'],
                $rows['product_price'],
                $rows['product_preview'],
                $rows['product_thumnail'],
                $rows['product_maintenance'],
                $rows['product_producer'],
                $rows['category_id']
            );
        }
        return $product;
    }
    public function addCartItem($product_id, $product_quantity)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraveDL($link, "SELECT * from tbl_cart where product_id = $product_id and user_id = " . $_SESSION["userid"]);
        $data = array();
        while ($rows = mysqli_fetch_assoc($result)) {
            $cart_item = new CartClass($rows["user_id"], $rows["product_id"], $product_quantity);
            array_push($data, $cart_item);
        }
        if (count($data) <= 0) {
            $query = "INSERT INTO `tbl_cart` (`user_id`, `product_id`, `product_quantity`) VALUES ( '" . $_SESSION["userid"] . "', '" . $product_id . "', '1')";
        } else {
            $data1 = array();
            $q = chayTruyVanTraveDL($link, "SELECT * from tbl_cart where product_id = $product_id and user_id = " . $_SESSION["userid"]);
            $cart_item;
            while ($rows = mysqli_fetch_assoc($q)) {
                $cart_item = new CartClass($rows["user_id"], $rows["product_id"], $product_quantity);
                array_push($data1, $cart_item);
            }
            $query = "UPDATE tbl_cart SET product_quantity = " . $cart_item->get_product_quantity() . " where product_id = $product_id and user_id = " . $_SESSION["userid"];
        }
        chayTruyVanKhongTraVeDL($link, $query);
        header("Location: cart_invoke.php");
        exit();
    }
    public function purchase($user_id)
    {
        $link = null;
        taoKetNoi($link);
        $data = array();
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_cart where user_id = " . $user_id);
        while ($rows = mysqli_fetch_assoc($result)) {
            $cart_item = new CartClass($rows["user_id"], $rows["product_id"], $rows["product_quantity"]);
            array_push($data, $cart_item);
        }
        chayTruyVanKhongTraVeDL($link, "DELETE FROM tbl_cart where user_id = " . $user_id);
        $date = date("Y/m/d");
        $insertOrder = "INSERT INTO tbl_order(user_id , order_date, order_status) VALUES (". $user_id . ", CAST('" . $date . "' AS DATE), 1)";
        chayTruyVanKhongTraVeDL($link,$insertOrder);
        $last_order = chayTruyVanTraVeDL($link, "SELECT * FROM tbl_order ORDER BY order_id DESC LIMIT 1");
        $data1 = array();
        while ($row = mysqli_fetch_assoc($last_order)) {
            $order = new OrderClass($row["order_id"], $row["user_id"], $row["order_date"], $row["order_status"]);
            array_push($data1, $order);
        }
        foreach ($data as $item) {
            $insertOrderDetail = "INSERT INTO tbl_order_detail(order_id,product_id,product_quantity) VALUES ( " . $order->get_order_id() . ",'" . $item->get_product_id() . "', '" . $item->get_product_quantity() . "')";
            chayTruyVanKhongTraVeDL($link, $insertOrderDetail);
        }
        header("Location: order.php");
        exit();
    }
}
