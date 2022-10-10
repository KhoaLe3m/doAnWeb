<?php

require_once "config.php";


function taoKetNoi(&$link)
{
    $link = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME1);
    if (mysqli_connect_errno()) {
        echo "Lỗi kết nối đến máy chủ: " . mysqli_connect_error();
        exit();
    }
    mysqli_set_charset($link,"utf8");
}

function chayTruyVanTraVeDL($link, $q)
{
    $result = mysqli_query($link, $q);
    return $result;
}

function chayTruyVanKhongTraVeDL($link, $q)
{
    $result = mysqli_query($link, $q);
    return $result;
}

function giaiPhongBoNho($link, $result)
{
    try {
        mysqli_close($link);
        mysqli_free_result($result);
    } catch (TypeError $e) {
        echo "ERROR: " . $e->getMessage();
    }
}
