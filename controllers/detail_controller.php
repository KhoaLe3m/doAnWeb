<?php
require_once "../models/detail_model.php";
class DetailController{
    public $model;
    public function __construct()
    {
        $this->model = new DetailModel();
    }
    public function product_detail_invoke($id){
        // $review = $this->model->getReview($id);
        // $reviews = $review->get_review_content();
        
        // $product = $this->model->getProduct($id);
        // $p_id = $product->get_product_id();
        // $p_name = $product->get_product_name();
        // $p_price = $product ->get_product_price();
        // $p_thumnail= $product->get_product_thumnail();
        // $p_size = $product->get_product_size();

        include "detail_view.php";
    }
}