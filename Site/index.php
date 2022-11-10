<?php
    require_once "../Dao/pdo.php";

    if(isset($_GET["dang-nhap"])){
        $VIEW_NAME = "dang-nhap.php";
        $TITLE_NAME = "Trang đăng nhập";
    }else{
        $VIEW_NAME = "trang-chu.php";
        $TITLE_NAME = "Trang chủ";
    }

    include_once "./layout.php";
?>