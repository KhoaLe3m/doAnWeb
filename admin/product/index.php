<?php
include '../inc/header1.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php include '../inc/sidebar.php';
?>
<div class="grid_10">
    <div class="box round first grid">
        <?php
        require_once "../../modules/db_module.php";
        $link = null;
        taoKetNoi($link);
        $sql = "SELECT * FROM tbl_product";
        $result = chayTruyVanTraVeDL($link, $sql);
        if (!isset($_GET['product_id']) || $_GET['product_id'] == null) {
        } else {
            $product_id = $_GET['product_id'];
            $sql = "SELECT COUNT(product_id) AS count from tbl_product where product_id ='$product_id'";
            $check = chayTruyVanTraVeDL($link, $sql);
            $rows = mysqli_fetch_assoc($check);
            if ($rows['count'] <= 0) {
                $_SESSION['status'] = "Xóa sản phẩm thất bại";
                header("refresh:2,url=index.php");
            } else {
                $sql = "DELETE FROM tbl_product WHERE product_id='$product_id'";
                $checkNum = chayTruyVanTraVeDL($link, $sql);
                chayTruyVanKhongTraVeDL($link, $sql);
                $_SESSION['status'] = "Xóa sản phẩm thành công";
                header("refresh:2,url=index.php");
            }
        }
        ?>
        <h1 style="text-align: center;">Quản lí sản phẩm</h1>
        <div class="col-md-12">
            <?php if (isset($_SESSION['status'])) : ?>
                <?php if ($_SESSION['status'] == "Xóa sản phẩm thành công") : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['status']; ?>
                    </div>
                <?php endif; ?>
                <?php if ($_SESSION['status'] == "Xóa sản phẩm thất bại") : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION['status']; ?>
                    </div>
                <?php endif; ?>
                <?php unset($_SESSION['status']); ?>
            <?php endif ?>
        </div>
        <a href="create.php" class="btn btn-success">Thêm </a>
        <table class="table">
            <thead class="thead-dark">
                <th>Id</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Ảnh</th>
                <th>Ngày bảo hành</th>
                <th>Nhà cung cấp</th>
                <th>Loại sản phẩm</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </thead>
            <?php if ($result) :
                while ($rows = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <th><?= $rows['product_id'] ?></th>
                        <th><?= $rows['product_name'] ?></th>
                        <th><?= $rows['product_price'] ?></th>
                        <th><img src="../../img/<?= $rows['product_thumnail'] ?>" width="150px"></th>
                        <th><?= $rows['product_maintenance'] ?></th>
                        <th><?= $rows['product_producer'] ?></th>
                        <th><?= $rows['category_id'] ?></th>
                        <th><a onclick="return confirm('Bạn có muốn sửa sản phẩm này?')" href="update.php?product_id=<?= $rows['product_id'] ?>" class="btn btn-primary">Sửa</a></th>
                        <th><a href="?product_id=<?= $rows['product_id'] ?>" class="btn btn-danger delete-btn" onclick="return confirm('Bạn có muốn xóa sản phẩm này?')">Xóa </a></th>
                    </tr>
                <?php endwhile; ?>
            <?php endif ?>
        </table>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<?php include '../inc/footer.php'; ?>