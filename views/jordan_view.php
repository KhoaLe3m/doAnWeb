<?php
   include '../src/components/header.php';
   require_once ("../controllers/jordan.php");
   $product =new Jordan();
   $product_new = $product->Sort();
 ?> 
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>web-ban-giay</title>
        <link rel="stylesheet" type="text/css" href="../styles/style_sang.css">
  </head>
  <?php
  ?>
       <div class="row">
        <div class="col-sm-12 ">
        <div>
              <form action="" class = "formsort">
                <h5 style = " padding-top : 10px">Bộ Lọc Sản Phẩm</h5> <hr>
                <input type="radio" name = "Options" id = "option" value = "DESC"> &nbsp Giá cao tới thấp &nbsp&nbsp&nbsp
                <input type="radio" name = "Options" id = "option" value = "ASC"> &nbsp Giá thấp tới cao &nbsp&nbsp
                <select name="selectname">
                  <option value=" " selected="selected">Loại Giày</option>
                  <option value="Thể Thao">Thể Thao</option>
                  <option value="Dã ngoại" >Dã Ngoại</option>
                  <option value="Thời Trang">Thời Trang</option>
                </select>
                <input type="submit" value = "Lọc" style = "padding : 0px 10px">
                <hr>
              </form>
            </div>
          <div class="row">
          <?php
              while($result =mysqli_fetch_assoc($product_new)){
            ?>
            <div class ="col-12 col-sm-6 col-md-3 "style = "padding-bottom: 20px">
              <div class="card">
                <img
                  src="<?php echo $result['product_thumnail'] ?>"
                  class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title" ><a href="details.php?product_id=<?= $result['product_id'] ?>"><?php echo $result['product_name'] ?></a></h5>
                  <p class="price"><?php echo $result['product_price']." "."VNĐ" ?></p>
                </div>
              </div>
            </div>
            <?php
        }
            ?>
          </div> 
        </div>
      </div>

<?php
  include '../src/components/footer.php';
 ?>  