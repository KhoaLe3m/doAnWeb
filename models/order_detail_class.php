<?php
class OrderDetailClass
{
    private $order_detail_id;
    private $order_id;
    private $product_id;
    private $product_quantity;

    public function get_order_detail_id()
    {
        return $this->order_detail_id;
    }
    public function get_order_id()
    {
        return $this->order_id;
    }
    public function get_product_id()
    {
        return $this->product_id;
    }
    public function get_product_quantity()
    {
        return $this->product_quantity;
    }

    public function __construct($order_detail_id,$order_id, $product_id, $product_quantity)
    {
        $this->order_detail_id = $order_detail_id;
        $this->order_id = $order_id;
        $this->product_id = $product_id;
        $this->product_quantity = $product_quantity;
    }
}
