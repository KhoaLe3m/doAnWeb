<?php
class CartClass
{
    private $user_id;
    private $product_id;
    private $product_quantity;

    public function get_user_id()
    {
        return $this->user_id;
    }
    public function get_product_id()
    {
        return $this->product_id;
    }
    public function get_product_quantity(){
        return $this->product_quantity;
    }
    public function __construct($user_id,$product_id,$product_quantity)
    {
        $this->user_id = $user_id;
        $this->product_id = $product_id;
        $this->product_quantity = $product_quantity;
    }
}
