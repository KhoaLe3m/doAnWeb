<?php
session_start();
if(isset($_SESSION['userlogin'])){
    include "cart.php";
}
else{
    header("location: index.php");
}
