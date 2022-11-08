<?php
class ProductClass{
    private $product_id;
    private $product_name;
    private $product_price;
    private $product_preview;
    private $product_thumnail;
    private $product_maintenance;
    private $product_producer;
    private $category_id;
    
    public function get_product_id()
    {
        return $this->product_id;
    }
    public function get_product_name()
    {
        return $this->product_name;
    }
    public function get_product_price()
    {
        return $this->product_price;
    }
    public function get_product_preview()
    {
        return $this->product_preview;
    }
    public function get_product_thumnail()
    {
        return $this->product_thumnail;
    }
    public function get_product_maintenance()
    {
        return $this->product_maintenance;
    }
    public function get_product_producer()
    {
        return $this->product_producer;
    }
    public function get_category_id()
    {
        return $this->category_id;
    }
    public function __construct($product_id,$product_name,$product_price,$product_preview,$product_thumnail,$product_maintenance,$product_producer,$category_id)
    {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_preview = $product_preview;
        $this->product_thumnail = $product_thumnail;
        $this->product_maintenance = $product_maintenance;
        $this->product_producer = $product_producer;
        $this->category_id = $category_id;
    }
}