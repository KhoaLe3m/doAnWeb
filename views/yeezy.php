<?php
   include '../src/components/header.php';
   require_once ("../models/search_model.php");
 ?> 
  <?php
  $product =new search_model();
 ?>
       <div class="row">
        <div class="col-sm-12 ">
          <h2>Yezzy</h2>
          <hr />
          <div class="row">
          <?php
            $product_new = $product->GetYezzy();
              while($result =mysqli_fetch_assoc($product_new)){
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

<?php
  include '../src/components/footer.php';
 ?>  