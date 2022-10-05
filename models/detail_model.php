<?php 
class DetailModel{
    public function getProduct($id){
        $link =null;
        taoKetNoi($link);
        $result = chayTruyVanTraVeDL($link,"SELECT * FROM tbl_product WHERE product_id='$id'");
        while($rows = mysqli_fetch_assoc($result)){
            $product = 1;
        }
        giaiPhongBoNho($link,$result);
        return $product;
    }
}
?>