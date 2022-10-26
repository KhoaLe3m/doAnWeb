<?php
require_once "product_class.php";
require_once "review.php";
require_once($_SERVER['DOCUMENT_ROOT'] . "/SHOPGIAY/doAnWeb/modules/db_module.php");
?>
<?php 
class search_model{
    function __construct()
    {

    }
    public function GetAdidas()
    {
        $link = null;
        taoKetNoi($link);
        $producer = "Adidas";
        $query = "SELECT * FROM tbl_product";
        $result = chayTruyVanTraVeDL($link, $query);
        return $result;
    }
    public function GetNike(){
        $link = null;
        taoKetNoi($link);
        $producer = "Nike";
        $query = "SELECT * FROM tbl_product WHERE product_producer='$producer'";
        $result = chayTruyVanTraVeDL($link, $query);
        return $result;

    }
    public function GetJordan(){
        $link = null;
        taoKetNoi($link);
        $producer = "Jordan";
        $query = "SELECT * FROM tbl_product WHERE product_producer='$producer'";
        $result = chayTruyVanTraVeDL($link, $query);
        return $result;

    }
    public function GetYezzy(){
        $link = null;
        taoKetNoi($link);
        $producer = "Yezzy";
        $query = "SELECT * FROM tbl_product WHERE product_producer='$producer'";
        $result = chayTruyVanTraVeDL($link, $query);
        return $result;

    }
    public function SortPrice()
    {   
        $link = null;
        taoKetNoi($link);
        $producer = "Yezzy";
        $query = "SELECT * FROM tbl_product WHERE product_producer='$producer'";
        $result = chayTruyVanTraVeDL($link, $query);

    }
}
?>