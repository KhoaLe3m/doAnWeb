<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/models/cart_class.php");
require_once($_SERVER['DOCUMENT_ROOT']."/models/cart_model.php");
class CartController{
    private $model;
    public function __construct(){
        $this->model = new Cart_Model();
    }
    public function getCartItems($user_id){
        $cart_items = $this->model->getCartItem($user_id);
        include "cart_view.php";
    }
    public function getProduct($product_id){
        $product = $this->model->getProducts($product_id);
    }
    public function addProductToCart($product_id)
    {
        $this->model->addCartItem($product_id);
    }
    // public function purchase($user_id)
    // {
    //     $this->model->purchase($user_id);
    // }
}

