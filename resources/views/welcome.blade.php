<!DOCTYPE html>
<html>
<head>
    <!-- <base href="{{asset('public/layout/frontend')}}/" > -->
    <base href="{{asset('layout/frontend')}}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        OptomWatch - @yield('title')
    </title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/home1.css"> -->
    <link rel="stylesheet" href="css/home.css">
    <!-- <link href="../css/home.css" rel="stylesheet" /> -->
     <!-- <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script> -->
    <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
</head>
<body>
    <!-- header -->
    <div class="menu-mobile">
      <div class="icon icon-bar"><i class="fas fa-bars"></i></div>
      <div class="icon icon-menu">menu</div>
      <div class="icon icon-cart-mobile"><i class="fas fa-shopping-cart fa-lg icon-cart"></i></div>
      <div class="icon icon-search"><i class="fas fa-search">    
      </i></div>


      <!---thanh search cho phần mobile-->
      <div class="box-search-mobile">
                <div class="search">

                    <input class="text-search" placeholder="Поиск" type="text" name="text">
                    <input class="btn-search" type="submit" name="submit" value="Поиск">
                    <!-- <div class="cart">
                        <a href="http://optomwatch.com.ua/cart"><i class="fas fa-shopping-cart fa-2x icon-cart"></i></a>
                    </div> -->

                </div>
         </div>
      </div>
      <!---thanh menu cho phần mobile-->

      <ul class="categories-mobile">
                        <!-- @@@@ Tạo dữ liệu gỉa cho menu - Khắc Hữu -->
                        <li class="menu-item">Категории</li>
                        <ul class="category">
                            <li class="category-item firstclass">
                                <a href="http://optomwatch.com.ua/categorybyparent/3">Наручные часы</a>
                                <i class="icon-show-more"><span class="plus">+</span></i>
                                <ul class="category-child">
                                    <li class="category-item secondclass">
                                        <a href="http://optomwatch.com.ua/categorybyparent/8"> Женские наручные часы</a>
                                    </li>
                                    <li class="category-item secondclass">
                                        <a href="http://optomwatch.com.ua/categorybyparent/9"> Мужские наручные часы</a>
                                    </li>
                                    <li class="category-item secondclass">
                                        <a href="http://optomwatch.com.ua/categorybyparent/10"> Детские наручные часы</a>
                                    </li>
                                    <li class="category-item secondclass">
                                        <a href="http://optomwatch.com.ua/categorybyparent/13"> coppy aaa</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="category-item firstclass">
                                <a href="http://optomwatch.com.ua/categorybyparent/2">Настенные часы</a>
                                <i class="icon-show-more"><span class="plus">+</span></i>
                                <ul class=" category-child">
                                    <a href="http://optomwatch.com.ua/categorybyparent/2">
                                    </a>
                                    <li class="category-item thirdclass">
                                        <a href="http://optomwatch.com.ua/categorybyparent/2"></a>
                                        <a href="http://optomwatch.com.ua/categorybyparent/11"> Интерьерные часы</a>
                                    </li>
                                    <li class="category-item thirdclass"><a href="http://optomwatch.com.ua/categorybyparent/12"> Маятники</a>


                                </ul>
                            </li>
                            <li class="category-item firstclass">
                                <a href="http://optomwatch.com.ua/categorybyparent/4">Аксессуары</a>
                                <i class="icon-show-more"><span class="plus">+</span></i>
                            </li>
                            <li class="category-item firstclass">
                                <a href="http://optomwatch.com.ua/categorybyparent/6">Будильники</a>
                                <i class="icon-show-more"><span class="plus">+</span></i>
                            </li>
                            <li class="category-item firstclass">
                                <a href="http://optomwatch.com.ua/categorybyparent/5">Калькуляторы</a>
                                <i class="icon-show-more"><span class="plus">+</span></i>
                            </li>
                            <li class="category-item firstclass">
                                <a href="http://optomwatch.com.ua/categorybyparent/7">Бижутерия</a>
                                <i class="icon-show-more"><span class="plus">+</span></i>
                            </li>
                        </ul>

            </ul>

<!---Menu-top cho phân mobile--->
            <div class="menu-top-mobile">
                    <li><a href="http://optomwatch.com.ua/">Главная</a></li>
                    <li><a href="http://optomwatch.com.ua/newproducts">Новые поступление</a></li>
                    <li><a href="http://optomwatch.com.ua/">Популярные категории</a></li>
                    <li><a href="http://optomwatch.com.ua/brands">Бренды</a></li>
                    <li><a href="http://optomwatch.com.ua/aboutus">О нас</a></li>
            </div>     
           
      
    <div class="header">
    
        <div class="master-header row">
            <div class="col-md-3 col-xs-12">
                <h1>
                   
                    <a href="#"><img class="logo" src="img/home/logo.png"></a>
                    </h1>
            </div>
            <div class="box-search col-md-9 col-xs-12">
                <div class="search">

                    <input class="text-search" placeholder="Поиск" type="text" name="text">
                    <input class="btn-search" type="submit" name="submit" value="Поиск">
                    <div class="cart">
                        <a href="http://optomwatch.com.ua/cart"><i class="fas fa-shopping-cart fa-2x icon-cart"></i></a>
                    </div>

                </div>

                <!-- <div class="cart">
                    <a href="http://optomwatch.com.ua/cart"><i class="fas fa-shopping-cart fa-2x icon-cart"></i></a>
                </div> -->
            </div>
        </div>

    </div>
    <!-- body -->
    <div class="body">
        <!-- master-content -->
        <div class="master">

            <div class="menu-top">
                
                    <li><a href="http://optomwatch.com.ua/">Главная</a></li>
                    <li><a href="http://optomwatch.com.ua/newproducts">Новые поступление</a></li>
                    <li><a href="http://optomwatch.com.ua/">Популярные категории</a></li>
                    <li><a href="http://optomwatch.com.ua/brands">Бренды</a></li>
                    <li><a href="http://optomwatch.com.ua/aboutus">О нас</a></li>
                    <!-- <li class="col-md-2"><a href="http://optomwatch.com.ua/aboutus">Для оптовых покупателей</a></li> -->
					<button class="arrow-right cd-fade-out">
                   	 <i class="fas fa-arrow-right"></i>
                	</button>
              		<!-- <button class="arrow-left cd-fade-out">
                   	 <i class="fas fa-arrow-left"></i>
                    </button> -->
            </div>
            <div class="main-menu">
                <div class="menu-left">
                    <ul>
                        <!-- @@@@ Tạo dữ liệu gỉa cho menu - Khắc Hữu -->
                        <li class="menu-item">Категории</li>
                        <ul class="category">
                            <li class="category-item firstclass">
                                <a href="http://optomwatch.com.ua/categorybyparent/3">Наручные часы</a>
                                <i class="icon-show-more"><span class="plus">+</span></i>
                                <ul class="category-child">
                                    <li class="category-item secondclass">
                                        <a href="http://optomwatch.com.ua/categorybyparent/8"> Женские наручные часы</a>
                                    </li>
                                    <li class="category-item secondclass">
                                        <a href="http://optomwatch.com.ua/categorybyparent/9"> Мужские наручные часы</a>
                                    </li>
                                    <li class="category-item secondclass">
                                        <a href="http://optomwatch.com.ua/categorybyparent/10"> Детские наручные часы</a>
                                    </li>
                                    <li class="category-item secondclass">
                                        <a href="http://optomwatch.com.ua/categorybyparent/13"> coppy aaa</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="category-item firstclass">
                                <a href="http://optomwatch.com.ua/categorybyparent/2">Настенные часы</a>
                                <i class="icon-show-more"><span class="plus">+</span></i>
                                <ul class=" category-child">
                                    <a href="http://optomwatch.com.ua/categorybyparent/2">
                                    </a>
                                    <li class="category-item thirdclass">
                                        <a href="http://optomwatch.com.ua/categorybyparent/2"></a>
                                        <a href="http://optomwatch.com.ua/categorybyparent/11"> Интерьерные часы</a>
                                    </li>
                                    <li class="category-item thirdclass"><a href="http://optomwatch.com.ua/categorybyparent/12"> Маятники</a>


                                </ul>
                            </li>
                            <li class="category-item firstclass">
                                <a href="http://optomwatch.com.ua/categorybyparent/4">Аксессуары</a>
                                <i class="icon-show-more"><span class="plus">+</span></i>
                            </li>
                            <li class="category-item firstclass">
                                <a href="http://optomwatch.com.ua/categorybyparent/6">Будильники</a>
                                <i class="icon-show-more"><span class="plus">+</span></i>
                            </li>
                            <li class="category-item firstclass">
                                <a href="http://optomwatch.com.ua/categorybyparent/5">Калькуляторы</a>
                                <i class="icon-show-more"><span class="plus">+</span></i>
                            </li>
                            <li class="category-item firstclass">
                                <a href="http://optomwatch.com.ua/categorybyparent/7">Бижутерия</a>
                                <i class="icon-show-more"><span class="plus">+</span></i>
                            </li>
                        </ul>

                    </ul>

                    <!-- -------end - Khắc Hữu-----------						 -->
                </div>

                <!-- Phần main-content này giống main trong project cũ - có thể đổ nội dung các trang detail,cart và đây -->
                <div class="main-content"> 
                    <div class="banner">
                        <h1 class="heading-title">Категории</h1>
                        <div class="row">
                            <div class="product-item col-md-3 col-sm-6">

                                <div class="cateImg">
                                    <a href="http://optomwatch.com.ua/categorybyparent/8">
                                        <img src="http://optomwatch.com.ua/lib/storage/app/categoryimage/14988e2b4c73a5149aefb2676c37f434.jpg" class="img-thumbnail">
                                    </a>
                                </div>
                                <p class="name-item">
                                    <a href="http://optomwatch.com.ua/categorybyparent/8">Женские наручные часы</a>
                                </p>
                            </div>

                            <div class="product-item col-md-3 col-sm-6">
                                <div class="cateImg">
                                    <a href="http://optomwatch.com.ua/categorybyparent/9"><img src="http://optomwatch.com.ua/lib/storage/app/categoryimage/764185105_w640_h640_4h3alwp9zxe.jpg" class="img-thumbnail"></a>
                                </div>
                                <p class="name-item">
                                    <a href="http://optomwatch.com.ua/categorybyparent/9">Мужские наручные часы</a>
                                </p>
                            </div>

                            <div class="product-item col-md-3 col-sm-6">
                                <div class="cateImg">
                                    <a href="http://optomwatch.com.ua/categorybyparent/10"><img src="http://optomwatch.com.ua/lib/storage/app/categoryimage/fdfdsfds.jpg" class="img-thumbnail"></a>
                                </div>
                                <p class="name-item">
                                    <a href="http://optomwatch.com.ua/categorybyparent/10">Детские наручные часы</a>
                                </p>
                            </div>

                            <div class="product-item col-md-3 col-sm-6">
                                <div class="cateImg">
                                    <a href="http://optomwatch.com.ua/categorybyparent/13"><img src="http://optomwatch.com.ua/lib/storage/app/categoryimage/GHSJ5586.jpg" class="img-thumbnail"></a>
                                </div>
                                <p class="name-item">
                                    <a href="http://optomwatch.com.ua/categorybyparent/13">coppy aaa</a>
                                </p>
                            </div>


                        </div>
                    </div>
                    <div class="wrap-inner">
                        <h1 class="heading-title">ТОВАРЫ</h1>
                        <div class="product-list row">
                            <div class="product-item col-md-3 col-xs-6">
                                <div class="imgProd">
                                    <div class="status-product">hot</div>
                                    <div class="discount">-30%</div>
                                 
                                    <a href="http://optomwatch.com.ua/products/21"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/A67D8D4B-9AB3-4BFD-A571-CBE83FEB39ED-512-00000105A0DC67F3.jpeg" class="img-thumbnail"></a>
                                </div>
                                <p>
                                </p><div class="prodName">
                                    <a href="http://optomwatch.com.ua/products/21" id="productName">Мужские наручные часы Rolex 1020-01</a><p></p>
                                </div>
                                <div class="price">
                                    <div class="price-origin"> 110 грвн</div>
                                    <div class="price-discount">110 грвн</div>
                                </div>
                               
                                <p class="addToCart" data-id="21">Добавить в корзину</p>

                            </div>
                            <div class="product-item col-md-3 col-xs-6">
                                <div class="imgProd">
                                    <div class="status-product">hot</div>
                                    <div class="discount">-30%</div>
                                    <a href="http://optomwatch.com.ua/products/22"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/8C7B41AA-A886-4849-9B29-4A62DC931338-512-00000174E0F2EBE5.jpeg" class="img-thumbnail"></a>
                                </div>
                                <p>
                                </p><div class="prodName">
                                    <a href="http://optomwatch.com.ua/products/22" id="productName">Мужские наручные часы Rolex 1020-02</a><p></p>
                                </div>
                                <div class="price">
                                    <div class="price-origin"> 110 грвн</div>
                                    <div class="price-discount">110 грвн</div>
                                </div>



                                <p class="addToCart" data-id="22">Добавить в корзину</p>

                            </div>
                            <div class="product-item col-md-3 col-xs-6">
                                <div class="imgProd">
                                    <div class="status-product">hot</div>
                                    <div class="discount">-30%</div>
                                    <a href="http://optomwatch.com.ua/products/23"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/4192FD00-5B57-4B19-8F65-7F2DEF408C4A-512-0000011079130B8C.jpeg" class="img-thumbnail"></a>
                                </div>
                                <p>
                                </p><div class="prodName">
                                    <a href="http://optomwatch.com.ua/products/23" id="productName">Мужские наручные часы Rolex 1020-03</a><p></p>
                                </div>
                                <div class="price">
                                    <div class="price-origin"> 110 грвн</div>
                                    <div class="price-discount">110 грвн</div>
                                </div>

                                <p class="addToCart" data-id="23">Добавить в корзину</p>

                            </div>

                            <div class="product-item col-md-3 col-xs-6">
                                <div class="imgProd">
                                    <div class="status-product">hot</div>
                                    <div class="discount">-30%</div>
                                    <a href="http://optomwatch.com.ua/products/24"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/CABA9366-68CF-4DCF-A662-5EC5450DA260-512-00000105EE49A4BF.jpeg" class="img-thumbnail"></a>
                                </div>
                                <p>
                                </p><div class="prodName">
                                    <a href="http://optomwatch.com.ua/products/24" id="productName">Мужские наручные часы Rolex 1020-04</a><p></p>
                                </div>
                                <div class="price">
                                    <div class="price-origin"> 110 грвн</div>
                                    <div class="price-discount">110 грвн</div>
                                </div>

                                <p class="addToCart" data-id="24">Добавить в корзину</p>

                            </div>
                            <!--
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/25"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/E895CF8D-E9E3-4FDC-B2FE-979E7B9D331B-512-00000105D9058416.jpeg" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/25" id="productName">Мужские наручные часы Rolex 1020-05</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="25">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/26"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/E278B0D6-E3D9-48D5-8DFF-781751EAB206-512-0000017791D00C30.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/26" id="productName">Мужские наручные часы Rolex 1020-06</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="26">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/27"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/62FDAFD4-58A1-477C-99B7-2742DA79C098-512-00000172753EA68E.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/27" id="productName">Мужские наручные часы Rolex 1020-07</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="27">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/28"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/0A54A25D-7427-4211-BC98-5D5D14998FB5-512-0000017562B410B2.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/28" id="productName">Мужские наручные часы Rolex 1020-08</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="28">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/29"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/ABA407D6-A9AC-4F8D-8002-21F01491F830-512-0000017580417073.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/29" id="productName">Мужские наручные часы Rolex 1020-09</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="29">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/30"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/A6A19981-897C-4C6E-A9CD-FD0E1DB3E1BE-512-0000017549BC1F16.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/30" id="productName">Мужские наручные часы Rolex 1020-10</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="30">Добавить в корзину</p>

                            </div> -->
                            <!-- <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/31"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/D2BCD219-FE6B-489A-9A3F-6D1E3D09ED2A-512-00000174C412A535.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/31" id="productName">Мужские наручные часы Rolex 1020-11</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="31">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/32"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/873A3B18-BCEF-4BBF-BAD0-166F9783B096-512-00000174AD248737.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/32" id="productName">Мужские наручные часы Rolex 1020-12</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="32">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/33"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/3E57C46C-DF3C-4F47-A774-2918FED157BE-512-0000017499696560.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/33" id="productName">Мужские наручные часы Rolex 1020-13</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="33">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/34"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/E6B1E048-0F0B-4357-B5CE-CB0156E75C30-512-000001746A2EF774.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/34" id="productName">Мужские наручные часы Rolex 1020-14</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="34">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/35"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/929AC106-38D2-4B14-A46C-7AEBC6076FA9-512-0000017452AD1FBC.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/35" id="productName">Мужские наручные часы Rolex 1020-15</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="35">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/36"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/4A34B21D-FE3A-4992-9981-3854E27EE018-512-00000173EE659362.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/36" id="productName">Мужские наручные часы Rolex 1020-16</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="36">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/37"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/EDA9E35E-6AAC-4109-B348-2FBE32A15E36-512-00000173D7492A44.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/37" id="productName">Мужские наручные часы Rolex 1020-17</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="37">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/38"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/392EE1D9-641D-4A0D-9F93-D7FFCD74FBB8-512-00000173BC721B84.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/38" id="productName">Мужские наручные часы Rolex 1020-18</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="38">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/39"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/45837CE9-F464-40CE-AAFA-865CA7A401ED-512-00000173A177B233.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/39" id="productName">Мужские наручные часы Rolex 1020-19</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="39">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/40"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/F25AC7F9-376F-467B-8D4C-249F158283A9-512-00000173777AB557.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/40" id="productName">Мужские наручные часы Rolex 1020-20</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="40">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/41"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/8F063AAE-5F68-4087-9B56-73DCB13C25B5-512-0000017358D53CAF.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/41" id="productName">Мужские наручные часы Rolex 1020-21</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="41">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/42"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/863F2A4D-A5D9-41FC-863B-CFB46DF9E9AA-512-0000017345BA2B2E.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/42" id="productName">Мужские наручные часы Rolex 1020-22</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="42">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/43"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/EEADE165-3C7F-4262-9339-916BB67B648D-512-0000017328F622E0.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/43" id="productName">Мужские наручные часы Rolex 1020-23</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="43">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/44"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/E446A69A-9D40-4C38-8209-CB5FB8B89018-512-0000017312B7DA72.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/44" id="productName">Мужские наручные часы Rolex 1020-24</a><p></p>
                                    </div>
                                <p class="price">110 грвн</p>
                                <p class="addToCart" data-id="44">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/45"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/3FBB0639-8A91-472B-B043-A5F780FB1BE2-512-000001087C99E3C3.PNG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/45" id="productName">Женские наручные часы Rolex 1020-25</a><p></p>
                                    </div>
                                <p class="price">178.75 грвн</p>
                                <p class="addToCart" data-id="45">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/46"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-1997.JPG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/46" id="productName">Женские наручные часы Rolex 1020-26</a><p></p>
                                    </div>
                                <p class="price">178.75 грвн</p>
                                <p class="addToCart" data-id="46">Добавить в корзину</p>

                            </div>
                                                            <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                <div class="imgProd">
                                    <a href="http://optomwatch.com.ua/products/47"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-1964.JPG" class="img-thumbnail"></a>
                                </div>
                                <p>
                                    </p><div class="prodName">
                                        <a href="http://optomwatch.com.ua/products/47" id="productName">Женские наручные часы Rolex 1020-27</a><p></p>
                                    </div>
                                <p class="price">178.75 грвн</p>
                                <p class="addToCart" data-id="47">Добавить в корзину</p>

                            </div> -->
                            <!-- <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/48"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-1982.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/48" id="productName">Женские наручные часы Rolex 1020-28</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="48">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/49"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-1966.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/49" id="productName">Женские наручные часы Rolex 1020-29</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="49">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/50"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-1970.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/50" id="productName">Женские наручные часы Rolex 1020-30</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="50">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/51"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-1988.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/51" id="productName">Женские наручные часы Rolex 1020-31</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="51">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/52"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-1986.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/52" id="productName">Женские наручные часы Rolex 1020-32</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="52">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/53"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-1994.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/53" id="productName">Женские наручные часы Rolex 1020-33</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="53">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/54"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-1992.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/54" id="productName">Женские наручные часы Rolex 1020-34</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="54">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/55"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-1990.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/55" id="productName">Женские наручные часы Rolex 1020-35</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="55">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/56"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-1978.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/56" id="productName">Женские наручные часы Rolex 1020-36</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="56">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/57"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-1976.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/57" id="productName">Женские наручные часы Rolex 1020-37</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="57">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/58"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-7684.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/58" id="productName">Женские наручные часы Rolex 1020-38</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="58">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/59"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-7664.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/59" id="productName">Женские наручные часы Rolex 1020-39</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="59">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/60"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-5119.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/60" id="productName">Женские наручные часы Rolex 1020-40</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="60">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/61"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-1968.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/61" id="productName">Женские наручные часы Rolex 1020-41</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="61">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/62"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-2585.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/62" id="productName">Мужские наручные часы Rolex 1020-42</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="62">Добавить в корзину</p>

                               </div>
                                                               <div class="product-item col-md-3 col-sm-6 col-xs-12">
                                   <div class="imgProd">
                                       <a href="http://optomwatch.com.ua/products/63"><img src="http://optomwatch.com.ua/lib/storage/app/avatar/IMG-2676.JPG" class="img-thumbnail"></a>
                                   </div>
                                   <p>
                                       </p><div class="prodName">
                                           <a href="http://optomwatch.com.ua/products/63" id="productName">Мужские наручные часы Rolex 1020-43</a><p></p>
                                       </div>
                                   <p class="price">178.75 грвн</p>
                                   <p class="addToCart" data-id="63">Добавить в корзину</p>

                               </div>
                            -->

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- footer -->
    <div class="footer">

        <div id="footer-t">
            <div class="container">
                <div class="row">

                    <div id="about" class="col-md-6 col-sm-12 col-xs-12">
                        <h3>О нас</h3>
                        <p class="text-justify">Мы продаем часы в оптом.</p>
                    </div>
                    <div id="hotline" class="col-md-6 col-sm-12 col-xs-12">
                        <h3>Hotline</h3>
                        <p>Phone Sale: (+84) 0988 550 553</p>
                        <p>Email: optomwatch@gmail.com</p>
                    </div>
                    <!--<div id="contact" class="col-md-4 col-sm-12 col-xs-12">
                        <h3>Адресс</h3>
                        <p>Адресс 1: Киев - Украина</p>
                        <p>Адресс 1: Харков - Украина</p>
                    </div>-->
                </div>
            </div>
            <div id="footer-b">

                <div class="container">

                    <div class="row">
                        <div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
                            <p> <a style="color:#fff;" href="http://www.optomwatch.com.ua"> Магазин часов - www.optomwatch.com.ua</a></p>
                        </div>
                        <div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
                            <p>© 2019 MD-Tech Company. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
                <!-- <div id="scroll">
                <a href="#"><img src="img/home/scroll.png"></a>
            </div>	 -->
            </div>
        </div>
    </div>
    <a class="lgscreenphone phonelink" href="yourdomian.com/contact"><img class="phoneicon" src="https://freeiconshop.com/wp-content/uploads/edd/phone-flat.png"></a>
    <div class="scroll-top"></div>
    <a href="#" class="cd-top">Back To Top</a>
    <button class="open-button">Написать магазину</button>
    <div class="chat-popup" id="myForm">
        <form method="post" action="#" class="form-container" id="messForm">
            <h2>Сообщение</h2>
            <textarea placeholder="Ваше сообщение..." name="msg" required id="msgContent"></textarea>
            <input type="text" placeholder="Ваш номер телефона" name="phoneNum" id="clientPhone" style="width: 100%;background: #f1f1f1;border: none;height: 30px;margin-bottom: 20px;padding-left: 15px;">
            <button type="button" class="btn" id="sendMessage">Отправить</button>
            <button type="button" class="btn cancel" id="buttonclose" onclick="closeForm()">Закрыть</button>
            {{csrf_field()}}
        </form>
    </div>

    <!-- <script src="../Scripts/jquery-3.2.1.min.js"></script> -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <!-- <script src="../Scripts/bootstrap.min.js"></script>
    <script src="../Scripts/home.js"></script> -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/home.js"></script>
</body>
</html>