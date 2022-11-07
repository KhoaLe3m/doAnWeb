<?php
  include '../src/components/header.php';
  require_once ("../controllers/search.php");
 ?>
 <?php
 $product = new Search(); 
 $text = $_GET["keyword"];
 $product_new = $product->Search($text);
 ?>
 <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>web-ban-giay</title>
        <link rel="stylesheet" type="text/css" href="../styles/style_sang.css">
  </head>
  <div>
    <h5>Kết quả tìm kiếm cho từ khóa: "
    <?php
    echo $_GET["keyword"];
    ?>"
    </h5>
    <hr>
  </div>
    <div class="content">
      <div class="row">
        <div class="col-sm-12 ">
          <div class="row">
          <?php
              while($result = mysqli_fetch_assoc($product_new)){
            ?>
            <div class ="col-12 col-sm-6 col-md-3 "style = "padding-bottom: 20px">
              <div class="card" >
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
    </div>
 <?php
  include '../src/components/footer.php';
 ?>