<?php
require_once "../models/detail_model.php";
class DetailController{
    public $model;
    public function __construct()
    {
        $this->model = new DetailModel();
    }
    public function product_detail_invoke($id){
        $review = $this->model->getReview($id);
        $product = $this->model->getProduct($id);
        include "detail_view.php";
    }
}