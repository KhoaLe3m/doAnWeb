<?php
if (count($all_order_details_items) <= 0) {
    echo "<p>Không có lịch sử nào được ghi nhận.</p>";
} else {
    echo '
    <h1>Lịch sử đặt hàng</h1>                
    <table class="table cart-table">
        <thead>
            <th>STT</th>
            <th>Ngày đặt hàng</th>
            <th>Sản phẩm</th>
            <th>Số lượng</th>
            <th>Tình trạng</th>
        </thead>
    <tbody>';

    $count = 1;
    foreach ($all_order_details_items as $item) {
        $product = $this->model->getProducts($item->get_product_id());
        $order_id = $this->model->getOrderById($item->get_order_id());
        $product_thumbnail = $product->get_product_thumnail();
        $product_name = $product->get_product_name();
        echo '
        <tr>
            <td>' . $count . '</td>
            <td>' . $this->model->getOrderById($item->get_order_id())->get_order_date() . '</td>
            <td>
                <img src="../img/' . $product_thumbnail . '" width="50">
                <a href="details.php?product_id=' . $item->get_product_id() . '">' . $product_name . '</a>
            </td>
            <td>' . $item->get_product_quantity() . '</td>
        ';
        $status = $this->model->getOrderById($item->get_order_id())->get_order_status();
        if ($status == 0) {
            echo '
                <td>Chưa thanh toán</td>
            </tr>
            ';
        } else if ($status == 1) {
            echo '
                <td>Đã thanh toán</td>
            </tr>
        ';
        } else if ($status == 2) {
            echo '
                <td>Đã hoàn tất</td>
            </tr>
        ';
        } else if ($status == 3) {
            echo '
                <td>Đã huỷ</td>
            </tr>
        ';
        }
        $count++;
    }
    echo '
        </tbody>
    </table>
    ';
}
