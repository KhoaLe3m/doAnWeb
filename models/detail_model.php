<?php
require_once "product_class.php";
require_once "review.php";
require_once "../modules/db_module.php";
class DetailModel
{
    public function getProduct($id)
    {
        $link = null;
        taoKetNoi($link);
        $query = "SELECT * FROM tbl_product WHERE product_id='$id'";
        $result = chayTruyVanTraVeDL($link, $query);
        while ($rows = mysqli_fetch_assoc($result)) {
            $product = new ProductClass($rows['product_id'], $rows['product_name'], $rows['product_price'], $rows['product_preview'], $rows['product_thumnail'], $rows['product_maintenance'], $rows['product_producer'], $rows['category_id']);
        }
        giaiPhongBoNho($link, $result);
        return $product;
    }
    public function getReview($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraveDL($link, "SELECT * from tbl_review where product_id=$id");
        while ($rows = mysqli_fetch_assoc($result)) {
            $review = new Review($rows["product_id"], $rows["review_content"]);
        }
        giaiPhongBonho($link, $result);
        return $review;
    }
}
