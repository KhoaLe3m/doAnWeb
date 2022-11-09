<?php
if (count($cart_items) <= 0) {
    echo "<p>Chưa có mặt hàng nào trong giỏ!</p>";
} else {
    echo '
    <h1>Giỏ hàng</h1>                
    <table class="table cart-table">
        <thead>
            <th>STT</th>
            <th>Sản phẩm</th>
            <th>Số lượng</th>
            <th>Đơn giá (VND)</th>
        </thead>
    <tbody>';

    $count = 1;
    $quantity = 0;
    $price = 0;
    foreach ($cart_items as $item) {
        $product = $this->model->getProducts($item->get_product_id());
        $product_thumbnail = $product->get_product_thumnail();
        $product_name = $product->get_product_name();
        $product_price = $product->get_product_price();
        echo '
        <tr>
            <td>' . $count . '</td>
            <td>
                <img src="../img/' . $product_thumbnail . '" width="50">
                <a href="details.php?product_id=' . $item->get_product_id() . '">' . $product_name . '</a>
            </td>
            <td>' . $item->get_product_quantity() . '</td>
            <td class="">' . number_format($product_price, 0, ",", ".") . 'đ</td>
        </tr>
        ';
        $count++;
        $quantity += $item->get_product_quantity();
        $price += $product_price * $quantity;
    }
    echo '
            <tr>
                <td></td>
                <td></td>
                <td>
                    <span id="total-product-quantity" style="font-weight: 500;">' . "Tổng tiền" . '</span>
                </td>
                <td id="total-product-price" style="font-weight: 500; color: red;">' . number_format($price, 0, ",", ".") . 'đ</td>
            </tr>
        </tbody>
    </table>
    ';
    echo'
    <form action="purchase.php" method="POST">
    <input type="hidden" name="userid" value="'.$_SESSION["userid"].'" />
    <button type="submit" class="btn btn-primary">
        Đặt hàng
    </button>
    </form>
    ';
}

// include "../src/components/footer.php";
?>
