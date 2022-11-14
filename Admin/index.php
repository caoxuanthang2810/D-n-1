<?php
    require_once "../Dao/pdo.php";

    if(isset($_GET["category"])){
        $VIEW_NAME = "category.php";
        $TITLE_NAME = "Trang category";
    }elseif(isset($_GET["product"])){
        $VIEW_NAME="product.php";
        $TITLE_NAME="Trang product";
    }
    else{
        $VIEW_NAME = "user.php";
        $TITLE_NAME = "Trang chủ";
    }

    include_once "./layout.php";
?>