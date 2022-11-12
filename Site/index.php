<?php
    require_once "../Dao/pdo.php";

    if(isset($_GET["dang-nhap"])){
        $VIEW_NAME = "dang-nhap.php";
        $TITLE_NAME = "Trang đăng nhập";
    }else if(isset($_GET["dang-ky"])){
        $VIEW_NAME = "dang-ky.php";
        $TITLE_NAME = "Trang dăng ký";
    }else if(isset($_GET["gio-hang"])){
        $VIEW_NAME = "gio-hang.php";
        $TITLE_NAME = "Trang giỏ hàng";
    }else if(isset($_GET["danh-muc"])){
        $VIEW_NAME = "danh-muc.php";
        $TITLE_NAME = "Trang danh mục sản phẩm";
    }else if(isset($_GET["gioi-thieu"])){
        $VIEW_NAME = "gioi-thieu.php";
        $TITLE_NAME = "Trang giới thiệu";
    }
    else{
        $VIEW_NAME = "trang-chu.php";
        $TITLE_NAME = "Trang chủ";
    }

    include_once "./layout.php";
?>