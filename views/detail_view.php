<?php
$p_id = $product->get_product_id();
$p_name = $product->get_product_name();
$p_price = $product->get_product_price();
$p_thumnail = $product->get_product_thumnail();
$p_producer = $product->get_product_producer();
$p_maintenance = $product->get_product_maintenance();
$p_preview = $product->get_product_preview();
$arr_preview    = explode(";",$p_preview);
?>
<div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-10">
    <div class="ml-5 row mt-3"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ </a> <span class="ml-1">/</span> <a class="ml-1" href="">Sản Phẩm <?= $p_producer ?></a></div>
    <div class="row">
      <article class="col-sm-12">
        <div class="row">
          <div class="col-sm-5 mt-3 mb-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner block">
                <?php for ($i = 0; $i < count($arr_preview); $i++) : ?>
                  <?php if ($i == 0) : ?>
                    <div class="carousel-item active">
                      <img src="../img/<?= $p_thumnail ?>" class=" w-100" alt="...">
                    </div>
                  <?php else : ?>
                    <div class="carousel-item">
                      <img src="../img/<?= $arr_preview[$i] ?>" class=" w-100" alt="...">
                    </div>
                  <?php endif; ?>
                <?php endfor; ?>
              </div>
              <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </button>
            </div>
          </div>
          <div class="col-sm-7 block">
            <ul>
              <li class="font-weight-bold mt-3">
                <h2><?= $p_name ?></h2>
              </li>
              <h4 style="color: red;"><?= number_format((int)$p_price, 0, ",", ",") . " VNĐ" ?></h4>
              <li>
                <span>Nhà Cung Cấp: <span class="text-10"><?= $p_producer ?></span></span>
              </li>
              <li>Bảo hành: <?= $p_maintenance . " Ngày" ?></li>
              <form action="add_to_cart.php" method="post">
              <li>
                <label for="">Nhập số lượng </label>
                <input type="number" class="rounded-lg border" name="product_quantity" id="product_quantity">
                <br>
              </li>
                <input type="hidden" name="product_id" value="<?= $p_id ?>">
                <button type="submit" class="btn btn-danger">
                  <i class="fa fa-shopping-cart"></i>
                  Thêm vào giỏ hàng
                </button>
              </form>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12" style="line-height: 35px ;">
            <h1>MÔ TẢ SẢN PHẨM</h1>
            <hr>
            <p> Đôi giày màu trắng là một phụ kiện "phải có" trong tủ đồ của các bạn trẻ. Bởi tính ứng dụng cao
              trong thời trang, giày trắng thường giúp chúng ta dễ phối đồ hơn và có thể mang phù hợp với bất cứ
              dịp nào (đi học, đi chơi, ...). 365.giay.store đảm bảo mang lại cho các bạn một đôi giày trắng vừa
              xinh vừa hời. Ngại gì không tậu ngay một đôi nào!!</p>

            <h3>- THÔNG TIN SẢN PHẨM: </h3>
            <ul>
              <li>+ Chất liệu giày: da sần, da trơn nhẵn.</li>
              <li>+ Màu: trắng</li>
              <li>+ Size: từ 36 đến 43 (các bạn tham khảo thêm bảng size để chọn được một đôi giày ưng ý nhất nhé)
              </li>
              <li>+ Chiều cao: đế cao 2,5 cm</li>
              <li>+ Trọng lượng Giày : 800g</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 ">
            <h2>SẢN PHẨM TƯƠNG TỰ</h2>
            <hr />
            <div class="row">
              <div class="col-sm-6 col-12 col-md-3 position-relative">
                <div class="card float-left mr-3 mt-3 ml-2 w-100" style="font-size: 16px; ">
                  <img src="https://myshoes.vn/image/cache/catalog/nike/25.10/giay-Nike-Renew-Retaliation-TR-2-01-550x550.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-title">GIÀY NIKE FREE METCON 4 NAM - ĐEN TRẮNG</h6>
                    <p class="card-text">Giày vjp</p>
                    <a href="#" class="btn btn-primary " style="bottom: 15px;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt
                      Hàng</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-12 col-md-3 position-relative">
                <div class="card float-left mr-3 mt-3 ml-2 w-100" style="font-size: 16px;">
                  <img src="https://myshoes.vn/image/cache/catalog/nike/25.10/giay-Nike-Renew-Retaliation-TR-2-01-550x550.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-title">GIÀY NIKE FREE METCON 4 NAM - ĐEN TRẮNG</h6>
                    <p class="card-text">Giày vjp</p>
                    <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt
                      Hàng</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-12 col-md-3 position-relative">
                <div class="card float-left mr-3 mt-3 ml-2 w-100" style="font-size: 16px;">
                  <img src="https://myshoes.vn/image/cache/catalog/nike/25.10/giay-Nike-Renew-Retaliation-TR-2-01-550x550.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-title">AIR FORCE 1 SUNFLOWER</h6>
                    <p class="card-text">Giày vjp</p>
                    <a href="#" class="btn btn-primary  "><i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt
                      Hàng</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-12 col-md-3 position-relative">
                <div class="card float-left mr-3 mt-3 ml-2 w-100" style="font-size: 16px;">
                  <img src="https://myshoes.vn/image/cache/catalog/nike/25.10/giay-Nike-Renew-Retaliation-TR-2-01-550x550.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h6 class="card-title">GIÀY NIKE FREE METCON 4 NAM - ĐEN TRẮNG</h6>
                    <p class="card-text">Giày vjp</p>
                    <a href="#" class="btn btn-primary "><i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt
                      Hàng</a>
                  </div>
                </div>
              </div>
            </div>
            <br style="clear: both;">
            <div class="row ">
              <div class="col-sm-12">
                <h1 class="mt-3"><i class="fa fa-comment" aria-hidden="true"></i> Bình Luận</h1>
                <hr>
              </div>
              <div class="col-sm-12 mb-3">
                <textarea class="form-control" name="" id="" cols="30" placeholder="Nhập bình luận"></textarea>
              </div>
            </div>
            <div style="float: right ;"><button class="btn btn-primary">Enter</buttonc>
            </div>
          </div>

        </div>
      </article>
      <!-- <div class="col-sm-3"></div> -->
    </div>
  </div>
  <div class="col-md-1">
  </div>
</div>