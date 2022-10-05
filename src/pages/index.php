 <?php
  include '../components/header.php';
  include 'product.php';
  
 ?>
 <?php
  $product =new product();
 ?>

    <div class="content">
    <?php
    include '../components/slider.php';
    ?>
      <div class="row">
        <div class="col-sm-12 ">
          <h2>New Product</h2>
          <hr />
          <div class="row">
          <?php
            $product_new = $product->getproduct_new();
            if($product_new){
              while($result = $product_new->fetch_assoc()){
            ?>
            <div class ="col-12 col-sm-6 col-md-3 ">
              <div class="card" >
                <div class="icon_new" style="position:absolute;color: red; ">
                  <h1>New</h1>
               </div>
                <img
                  src="<?php echo $result['product_thumnail'] ?>"
                  class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $result['product_name'] ?></h5>
                  <p class="price"><?php echo $result['product_price']." "."VNĐ" ?></p>
                </div>
              </div>
            </div>
            <?php
          }
        }
            ?>
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 ">
          <h2>Feature Product</h2>
          <hr />
          <div class="row">
            <?php
            $product_feature = $product->getproduct_feature();
            if($product_feature){
              while($result = $product_feature->fetch_assoc()){

              
            
            ?>
            <div class ="col-12 col-sm-6 col-md-3 ">
              <div class="card" >
                <img
                  src="<?php echo $result['product_thumnail'] ?>"
                  class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $result['product_name'] ?></h5>
                  <p class="price"><?php echo $result['product_price']." "."VNĐ" ?> </p>
                </div>
              </div>
            </div>
            <?php
          }
        }
            ?>
          </div> 
        </div>
      </div>
      
    </div>
<?php
  
  include '../components/footer.php';
 ?>   