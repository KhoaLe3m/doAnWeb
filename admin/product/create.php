<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../styles/style_khoa.css">
    <link rel="stylesheet" href="../styles/vendors/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <?php
    require_once "../../modules/db_module.php";
    $link = null;
    taoKetNoi($link);
    $sql = "SELECT * FROM tbl_product_category";
    $result = chayTruyVanTraVeDL($link, $sql);
    if (isset($_POST['submit'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_maintenance = $_POST['product_maintenance'];
        $product_producer = $_POST['product_producer'];
        $category_id = $_POST['category_id'];
        $sqlInsert = "INSERT INTO tbl_product (product_name, product_price, product_maintenance, product_producer, category_id) VALUES ('$product_name', '$product_price', '$product_maintenance', '$product_producer', '$category_id')";
        $check = chayTruyVanKhongTraVeDL($link, $sqlInsert);
        if ($check) {
            $_SESSION['status'] = "Thêm sản phẩm thành công";
            header("refresh:3,url=index.php");
        } else {
            $_SESSION['status'] = "Thêm sản phẩm thất bại";
            header("refresh:3,url=index.php");
        }
    }
    ?>
    <div class="container">
        <div class="col-md-12">
            <?php if (isset($_SESSION['status'])) : ?>
                <?php if ($_SESSION['status'] == "Thêm sản phẩm thành công") : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['status']; ?>
                    </div>
                <?php endif; ?>
                <?php if ($_SESSION['status'] == "Thêm sản phẩm thất bại") : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION['status']; ?>
                    </div>
                <?php endif; ?>
                <?php unset($_SESSION['status']); ?>
            <?php endif ?>
        </div>
        <form action="" method="post" >
            <div class="form-group" class="col-md-12 col-sm-12">
                <label for="1">Tên sản phẩm</label>
                <input type="text" class="form-control" name="product_name" id="1" placeholder="Nhập tên sản phẩm">
                <label for="2">Giá sản phẩm</label>
                <input type="number" class="form-control" name="product_price" id="2" placeholder="Nhập giá sản phẩm">
                <label for="3">Thời gian bảo hành</label>
                <input type="text" class="form-control" name="product_maintenance" id="3" placeholder="Nhập thời gian bảo hành">
                <label for="4">Nhà cung cấp</label>
                <input type="text" class="form-control" name="product_producer" id="4" placeholder="Nhập nhà cung cấp">
                <label for="5">Loại sản phẩm</label>
                <div class="form-group">
                    <select name="category_id" id="5" class="form-control">
                        <?php while ($rows = mysqli_fetch_assoc($result)) : ?>
                            <option value="<?= $rows['category_id'] ?>"><?= $rows['category_ename'] . " " . $rows['category_name'] ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Thêm sản phẩm</button>
            </div>
        </form>
    </div>

</body>

</html>