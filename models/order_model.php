<?php
require_once ("order_class.php");
require_once("order_detail_class.php");
require_once "../modules/db_module.php";
class OrderModel{
    public function getOrdersByUserId($user_id){
        $link = null;
        taoKetNoi($link);
        $data = [];
        $query = "SELECT * FROM tbl_order where user_id = '$user_id'";
        $result = chayTruyVanTraVeDL($link,$query);
        while($rows = mysqli_fetch_assoc($result)){
            $order = new OrderClass($rows["order_id"], $rows["user_id"], $rows["order_date"], $rows["order_status"]);
            $data[] = $order;
        }
        giaiPhongBonho($link, $result); 
        return $data;
    }
    public function getOrderById($order_id){
        $link = null;
        taoKetNoi($link);
        $query = "SELECT * FROM tbl_order WHERE order_id = '$order_id'";
        $result = chayTruyVanTraVeDL($link,$query);
        while($row = mysqli_fetch_assoc($result)){
            $order = new OrderClass($row["order_id"], $row["user_id"], $row["order_date"], $row["order_status"]);
        }
        giaiPhongBonho($link, $result); 
        return $order;
    }
    public function getOrderDetail($order_id){
        $link = null;
        taoKetNoi($link);
        $data = [];
        $query = "SELECT * FROM tbl_order_detail WHERE order_id = '$order_id'";
        $result = chayTruyVanTraVeDL($link,$query);
        while($rows = mysqli_fetch_assoc($result)){
            $order_detail = new OrderDetailClass($rows['order_detail_id'],$rows["order_id"], $rows["product_id"], $rows["product_quantity"]);
            $data[] = $order_detail;
        }
        return $data;
    }
}
?>