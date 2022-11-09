<?php
require_once "../models/order_model.php";

class OrderController
{
    public $model;
    public function __construct()
    {
        $this->model = new OrderModel();
    }
    public function getOrderItemsDetails($user_id)
    {
        $order_items = $this->model->getOrdersByUserId($user_id);
        $all_order_details_items = [];
        foreach($order_items as $item)
        {
            $order_details_items = $this->model->getOrderDetail($item->get_order_id());
            foreach($order_details_items as $val){
                $all_order_details_items[] = $val;
            }
        }
        include "order_view.php";
    }
}
