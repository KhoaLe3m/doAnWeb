<?php
require_once("order_class.php");
require_once("order_detail_class.php");
require_once("product_class.php");
require_once "../modules/db_module.php";
class OrderModel
{
    public function getOrdersByUserId($user_id)
    {
        $link = null;
        taoKetNoi($link);
        $data = [];
        $query = "SELECT * FROM tbl_order where user_id = '$user_id'";
        $result = chayTruyVanTraVeDL($link, $query);
        while ($rows = mysqli_fetch_assoc($result)) {
            $order = new OrderClass($rows["order_id"], $rows["user_id"], $rows["order_date"], $rows["order_status"]);
            $data[] = $order;
        }
        giaiPhongBonho($link, $result);
        return $data;
    }
    public function getOrderById($order_id)
    {
        $link = null;
        taoKetNoi($link);
        $query = "SELECT * FROM tbl_order WHERE order_id = '$order_id'";
        $result = chayTruyVanTraVeDL($link, $query);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $order = new OrderClass($row["order_id"], $row["user_id"], $row["order_date"], $row["order_status"]);
            $data[] = $order;
        }
        giaiPhongBonho($link, $result);
        return $order;
    }
    public function getOrderDetail($order_id)
    {
        $link = null;
        taoKetNoi($link);
        $data = [];
        $query = "SELECT * FROM tbl_order_detail WHERE order_id = '$order_id'";
        $result = chayTruyVanTraVeDL($link, $query);
        while ($rows = mysqli_fetch_assoc($result)) {
            $order_detail = new OrderDetailClass($rows['order_detail_id'], $rows["order_id"], $rows["product_id"], $rows["product_quantity"]);
            $data[] = $order_detail;
        }
        return $data;
    }
    public function getProducts($product_id)
    {
        $link = null;
        taoKetNoi($link);
        $data = array();
        $result = chayTruyVanTraveDL($link, "SELECT * from tbl_product where product_id=$product_id");
        while ($rows = mysqli_fetch_assoc($result)) {
            $product = new ProductClass($rows['product_id'], $rows['product_name'], $rows['product_price'], $rows['product_preview'], $rows['product_thumnail'], $rows['product_maintenance'], $rows['product_producer'], $rows['category_id']);
            array_push($data, $product);
        }
        giaiPhongBonho($link, $result);
        return $product;
    }
}
