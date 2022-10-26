<?php
  include '../src/components/header.php';
  require_once ("../models/search_model.php");
 ?>
 <?php
 $product = new search_model(); 
 ?>
 <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>web-ban-giay</title>
        <link rel="stylesheet" type="text/css" href="../styles/style_sang.css">
  </head>
    <div class="content">
      <h2 class = "test">testcss</h2>
      <div class="row">
        <div class="col-sm-12 ">
          <div class="row">
          <?php
            $product_new = $product->GetNike();
              while($result = mysqli_fetch_assoc($product_new)){
            ?>
            <div class ="col-12 col-sm-6 col-md-3 ">
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