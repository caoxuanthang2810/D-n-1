<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$TITLE_NAME?></title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../Asset/Css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="main.js"></script>
</head>

<body>

    <!-- Header -->
    <div class="">
        <div class="container mx-auto flex justify-between items-center">
            <div class="">
                <ul class="flex gap-6 text-[13px] items-center">
                    <li class="logo__item">
                        <a class="flex" href="https://goo.gl/maps/dfQDF4H3aH7vK4ue9">
                            <img src="https://cdn.pnj.io/images/image-update/layout/icon-stores-new.svg" alt="">
                                <span class="logo__text">Cửa hàng</span>
                        </a>
                    </li>

                    <li class="logo__item">
                        <a class="flex" href="tel:+1800545457">
                            <img src="https://cdn.pnj.io/images/image-update/layout/icon-hotline-new.svg" alt="">
                                <span class="logo__text-hotline">1800 54 54 57</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <img src="" alt="">
            </div>

            <div class="flex gap-8 items-center">

                <div>
                    <ul class="flex gap-5">
                        <li class="border border-[#000] p-3">
                            <a href="./index.php?dang-nhap">Đăng nhập</a>
                        </li>
                        <li class="border border-[#000] p-3">
                            <a href="./index.php?dang-ky">Đăng ký</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <ul>
                        <li>
                            <a href="./index.php?gio-hang" class="flex">
                                <img src="https://cdn.pnj.io/images/image-update/layout/icon-cart-new.svg" alt="">
                                    <span class="ml-2">Giỏ hàng</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <hr>
    </div>

    <!-- Navbar -->

    <div class="mt-2">
        <div class="container mx-auto">
            <div class="py-[5px] flex items-center justify-between">
                <div>
                    <ul class="flex gap-5">
                        <li class="hover:text-black hover:underline"><a href="./index.php">Trang chủ</a></li>
                        <li class="hover:text-black hover:underline"><a href="./index.php?gioi-thieu">Giới thiệu</a></li>
                        <li class="hover:text-black hover:underline"><a href="./index.php?danh-muc">Danh mục sản phẩm</a></li>
                    </ul>
                </div>
                <div class="form__search max-w-[35%] py-2 bg-[#ededed] rounded-[35px] border-transparent outline-transparent">
                    <form action="" class="flex">
                        <input type="text" placeholder="Tìm Kiếm Nhanh" class="bg-[#ededed] border-[#ededed] text-[18px] rounded-[35px] pl-2 outline-transparent" required>
                        <button class="form__search_btn text-[16px] pr-2">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                </form>
            </div>
            </div>

            
        </div>
    </div>

    <!-- Content -->

    <main>
        <?php include_once $VIEW_NAME?>
    </main>

    <!-- Footer -->
    <hr>
    <div class="container mx-auto py-4 border-2px-white md:block hidden">
        <div class="flex justify-between">
            <div>
                <img src="" alt="">
            </div>
            <div>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat veniam dicta ipsam voluptatibus hic quibusdam sapiente adipisci doloribus? Minus eius tempora explicabo tenetur excepturi minima quidem deserunt architecto, ex nulla!</span>
            </div>
        </div>
    </div>
</body>

</html>