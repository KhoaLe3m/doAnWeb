<?php
include '../modules/session.php';
Session::init();
?>

<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>web-ban-giay</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../styles/style_khoa.css">
        <link rel="stylesheet" href="../styles/vendors/font-awesome/css/font-awesome.min.css">
    </head>

    <body>
        <div class="container-fluid container1">
            <div id="header">
                <header>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header bg-secondary">
                                <div class="menu w-100 h-100">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index:10">
                                        <a class="navbar-brand" href="index.php">SHOP</a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav mr-auto">
                                                <li class="nav-item active">
                                                    <a class="nav-link" href="adidas.php">Adidas <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="nav-item active">
                                                    <a class="nav-link" href="nike.php">Nike <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="nav-item active">
                                                    <a class="nav-link" href="jordan.php">Jordan <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="nav-item active">
                                                    <a class="nav-link" href="yeezy.php">Yeezy <span class="sr-only">(current)</span></a>
                                                </li>
                                            </ul>
                                            <form class="form-inline my-2 my-lg-0">
                                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                                <btn class="block btn"><i class="fa fa-search" aria-hidden="true"></i></btn>
                                            </form>
                                            <ul class="ml-3 navbar-nav">
                                                <?php
                                                if (isset($_GET['action']) && $_GET['action'] == 'logout') {
                                                    Session::destroy();
                                                }
                                                ?>
                                                <li class="nav-item active" style="padding-top: 5px;">
                                                    <a class="nav-link" href="cart_invoke.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="nav-item active ">
                                                    <a class="mr-2 nav-link" href="?action=logout"><i class="fa fa-sign-in" aria-hidden="true"></i> <?php echo Session::checkSign() ?> <span class="sr-only">(current)</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <main class="content dynamic-container row">
                <?php
                    require_once "../controllers/order_controller.php";
                    $controller = new OrderController();
                    $controller->getOrderItemsDetails($_SESSION['userid']);
                ?>
            </main>
            <div id="footer">
                <footer class="text-center text-lg-start bg-light text-muted d-block">
                    <div class=" text-center text-md-start mt-5 pt-2">
                        <div class="row mt-3">
                            <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Products
                                </h6>
                                <p>
                                    <a href="adidas.php" class="text-reset">Adidas</a>
                                </p>
                                <p>
                                    <a href="nike.php" class="text-reset">Nike</a>
                                </p>
                                <p>
                                    <a href="jordan.php" class="text-reset">Jordan</a>
                                </p>
                                <p>
                                    <a href="yeezy.php" class="text-reset">Yeezy</a>
                                </p>
                            </div>
                            <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Useful links
                                </h6>
                                <p>
                                    <a href="#" class="text-reset">Pricing</a>
                                </p>
                                <p>
                                    <a href="#" class="text-reset">Settings</a>
                                </p>
                                <p>
                                    <a href="#" class="text-reset">Orders</a>
                                </p>
                                <p>
                                    <a href="#" class="text-reset">Help</a>
                                </p>
                            </div>
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                                <p><i class="fa fa-home" aria-hidden="true"></i> Ho Chi Minh, VN</p>
                                <p>
                                    <i class="fa fa-envelope me-3"></i>
                                    shopgiay@gmail.com
                                </p>
                                <p><i class="fa fa-phone me-3"></i> + 01 900 100 89</p>
                                <p><i class="fa fa-print me-3"></i> + 01 234 567 89</p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    </body>