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
    if(isset($_GET['product_id'])){
        $product_id = $_GET['product_id'];
        $sqlProduct = "SELECT * FROM tbl_product where product_id = '$product_id'";
        $result = mysqli_fetch_assoc(chayTruyVanTraVeDL($link,$sqlProduct));
        $category = $result['category_id'];
        $sqlCategoryProduct = "SELECT * FROM tbl_product_category where category_id = '$category'";
        $sqlCategory= "SELECT * FROM tbl_product_category";
        $resultCategoryFull = chayTruyVanTraVeDL($link,$sqlCategory);
        $resultCategoryOne = chayTruyVanTraVeDL($link,$sqlCategoryProduct);
        if(isset($_POST['submit'])){

        }
    }
    else{

    }
    ?>
    <div class="container">
        <div class="col-md-12">
            <?php if (isset($_SESSION['status'])) : ?>
                <?php if ($_SESSION['status'] == "Sửa sản phẩm thành công") : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $_SESSION['status']; ?>
                    </div>
                <?php endif; ?>
                <?php if ($_SESSION['status'] == "Sửa sản phẩm thất bại") : ?>
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
                <input type="text" class="form-control" name="product_name" id="1" placeholder="Nhập tên sản phẩm" value="<?= $result['product_name'] ?>">
                <label for="2">Giá sản phẩm</label>
                <input type="number" class="form-control" name="product_price" id="2" placeholder="Nhập giá sản phẩm" value="<?= $result['product_price'] ?>">
                <label for="3">Thời gian bảo hành</label>
                <input type="text" class="form-control" name="product_maintenance" id="3" placeholder="Nhập thời gian bảo hành" value="<?= $result['product_maintenance'] ?>">
                <label for="4">Nhà cung cấp</label>
                <input type="text" class="form-control" name="product_producer" id="4" placeholder="Nhập nhà cung cấp" value="<?= $result['product_producer'] ?>">
                <label for="5">Loại sản phẩm</label>
                <div class="form-group">
                    <select name="category_id" id="5" class="form-control">
                        <?php while ($rows = mysqli_fetch_assoc($resultCategoryFull)) : ?>
                            <option value="<?= $rows['category_id'] ?>"><?= $rows['category_ename'] . " " . $rows['category_name'] ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Sửa sản phẩm</button>
            </div>
        </form>
    </div>

</body>

</html>