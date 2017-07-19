<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <!--css/bootstrap.min.css start-->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!--style.css start-->
    <link href="style.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <!--swiper.min.css start-->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <!--swiper.min.css start-->
    <link href="css/portfolio.css" rel="stylesheet">
    <!--swiper.min.css start-->
    <link href="css/shortcode.css" rel="stylesheet">
    <!--swiper.min.css start-->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <!--css/jquery.bxslider.css start-->
    <link href="css/selectric.css" rel="stylesheet">
    <!--css/component.css start-->
    <link href="css/component.css" rel="stylesheet">
    <!--svg-icon.css start-->
    <!--<link href="svg-icon.css" rel="stylesheet">-->
    <!--css/font-awesome.css start-->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/component.css" rel="stylesheet">
    <!--css/typography.css start-->
    <link href="css/typography2.css" rel="stylesheet">
    <!--css/jquery.bxslider.css start-->
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <!--css/color.css start-->
    <link href="css/color.css" rel="stylesheet">
    <!--css/widget.css start-->
    <link href="css/widget.css" rel="stylesheet">
    <!--css/responsive.css start-->
    <link href="css/responsive.css" rel="stylesheet">
    <link href="bootstrap-social.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="priceCalculator/styles.css">
    <?php if($arr){?>
        <script>const RATIOS = {
                chamferRemovingPrice: <?=$arr[0]['chamferRemovingPrice']?>,
                complexRadiusPrice: <?=$arr[0]['complexRadiusPrice']?>,
                coveringPreparationPrice: <?=$arr[0]['coveringPreparationPrice']?>,
                glueType: {
                    waterproof: <?=$arr[0]['waterproof']?>,
                    notWaterproof: <?=$arr[0]['notWaterproof']?>
                },
                coveringPrice: {
                    polish: <?=$arr[0]['polish']?>,
                    polishWithColor: <?=$arr[0]['polishWithColor']?>,
                    noCovering: <?=$arr[0]['noCovering']?>
                },
                packagingPrice: <?=$arr[0]['packagingPrice']?>,
                woodBreedPrice: {
                    ash: <?=$arr[0]['ash']?>,
                    oak: <?=$arr[0]['oak']?>
                },
                bondingType: {
                    glued: <?=$arr[0]['glued']?>,
                    spliced: <?=$arr[0]['spliced']?>
                },
                gauge: {
                    20: <?=$arr[0]['gauge20']?>,
                    30: <?=$arr[0]['gauge30']?>,
                    40: <?=$arr[0]['gauge40']?>
                },
                discount: <?=$arr[0]['discount']?>
            };</script>
    <?}?>
</head>
<body class="light">
<!--// KODE WRAPER START //-->
<div class="kode-wraper">
    <div class="header">
        <!--KODE TOP WRAPER START-->
        <!-- <div class="kode_top_wrap2">
            <div class="container">
                <div class="kode_top_row">
                    <ul class="kode_top_faq">
                        <li><a href="index.html#">Faq</a></li>
                        <li><a href="index.html#">Help Desk</a></li>
                        <li><a href="index.html#">Track Shipment</a></li>
                    </ul>
                    <span class="kode_time_detail"><i class="fa fa-clock-o"></i>Sat-Thus : 9am:6pm</span>
                    <ul class="kode_top_social_icon">
                        <li><a href="index.html#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="index.html#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div> -->
        <!--KODE TOP WRAPER END-->
        <div class="kode_top_content_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="kode_top_logo">
                            <a href="index.html#"><img src="images/logo11.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="kode_top_info2_list">
                            <div class="kode_top_info2">
                                <span><i class="glyphicon glyphicon-home"></i></span>
                                <div class="kode_top_info_text">
                                    <a href="index.html" >г.  Днепр, АНД район</a>
                                    <a href="index.html" >ул. Саранская 91д   </a>
                                </div>
                            </div>
                            <div class="kode_top_info2">
                                <span><i class="glyphicon glyphicon-envelope"></i></span>
                                <div class="kode_top_info_text">
                                    <a href="index.html#">stoleshka.com.ua@gmail.com</a>
                                    <a href="index.html#">stoleshka.com.ua@gmail.com</a>
                                </div>
                            </div>
                            <div class="kode_top_info2">
                                <span><i class="glyphicon glyphicon-earphone"></i></span>
                                <div class="kode_top_info_text">
                                    <a href="index.html">+1234 (4563) 7894</a>
                                    <a href="index.html">+1234 (4563) 7894</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a class="kode-button-style-1 kode-theme-color-bg-color" href="index.html#">как получить скидку -7%</a>
                    </div>
                </div>
            </div>
        </div>
        <!--KODE TOP NAVI WRAPER START-->
        <div class="kode_top_navi_wraper">
            <div class="navigation">
                <div class="container">
                    <ul>
                        <li><a class="active" href="<?=$_SERVER['PHP_SELF']?>?page=mainpage">Главная</a>
                            <!-- 				<ul>
                                                <li><a href="index.html">homr page</a></li>
                                                <li><a href="index1.html">HOME PAGE 01</a></li>
                                                <li><a href="index2.html">HOME PAGE 02</a></li>
                                                <li><a href="index3.html">HOME PAGE 03</a></li>
                                            </ul> -->
                        </li>
                        <li><a href="index.html#about">О нас</a>
                            <!-- 			<ul>
                                            <li><a href="about-us.html">about us</a></li>
                                            <li><a href="about-us-01.html">about us 01</a></li>
                                        </ul> -->
                        </li>
                        <li><a href="<?=$_SERVER['PHP_SELF']?>?page=productions">Продукция</a>
                            <!-- <ul>
                                <li><a href="practice-area.html">Столешницы</a></li>
                                <li><a href="practice-area-01.html">Ступени</a></li>
                                <li><a href="practice-area-02.html">Подоконники</a></li>
                                <li><a href="practice-area-03.html">Прямые фасады</a></li>
                            </ul> -->
                        </li>
                        <li><a href="../nomenclature%20.php">Цена</a>
                            <ul>
                                <li><a href="<?=$_SERVER['PHP_SELF']?>?page=costproducts">Продсчитать стоимость</a></li>
                                <li><a href="sale.html">Как получить скидку</a></li>
                            </ul>
                        </li>
                        <li><a href="delivery.html">Доставка и оплата</a>
                            <!--<ul>-->
                            <!--<li><a href="advice.html">Доставка по Украине</a></li>-->
                            <!--<li><a href="advice.html">Доставка по г.Днепр</a></li>-->
                            <!--</ul>-->
                        </li>
                        <li><a href="<?=$_SERVER['PHP_SELF']?>?page=blogarticles">Блог</a>
                            <!-- <ul>
                                <li><a href="agent.html">Блог</a></li>
                                <li><a href="enginer.html">Советы по уходу</a></li>
                                <li><a href="404.html">Контроль качества</a></li>
                                <li><a href="time-line-farm.html">Красиво и экологично</a></li>
                            </ul> -->
                        </li>
                        <li><a href="index.html#map-canvas">Контакты</a></li>
                    </ul>
                    <!--DL Menu Start-->
                    <div id="kode-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Меню</button>
                        <ul class="dl-menu">
                            <li><a class="active" href="index.html#">Главная</a>
                                <!-- <ul class="dl-submenu">
                                    <li><a href="index.html">homr page</a></li>
                                    <li><a href="index1.html">HOME PAGE 01</a></li>
                                    <li><a href="index2.html">HOME PAGE 02</a></li>
                                    <li><a href="index3.html">HOME PAGE 03</a></li>
                                </ul> -->
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="index.html#about">О нас</a>
                                <!-- <ul class="dl-submenu">
                                    <li><a href="about-us.html">about us</a></li>
                                    <li><a href="about-us-01.html">about us 01</a></li>
                                </ul> -->
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="index.html#">Проду</a>
                                <!-- <ul class="dl-submenu">
                                    <li><a href="practice-area.html">Столешницы</a></li>
                                <li><a href="practice-area-01.html">Ступени</a></li>
                                <li><a href="practice-area-02.html">Подоконники</a></li>
                                <li><a href="practice-area-03.html">Прямые фасады</a></li>
                                </ul> -->
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="index.html#">Цена</a>
                                <ul class="dl-submenu">
                                    <li><a href="out-team.html">Продсчитать стоимость</a></li>
                                    <li><a href="our-team-detail.html">Получить скидку</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="advice.html">Доставка и оплата</a>
                                <!-- <ul class="dl-submenu">
                                    <li><a href="gallery.html">Доставка по Украине</a></li>
                                <li><a href="gallery-detail.html">Доставка по г.Днепр</a></li>
                                </ul> -->
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="index.html#">Контакты</a>
                                <!-- <ul class="dl-submenu">
                                    <li><a href="agent.html">agent</a></li>
                                    <li><a href="enginer.html">enginer</a></li>
                                    <li><a href="404.html">404 page</a></li>
                                    <li><a href="time-line-farm.html">time farm</a></li>
                                </ul> -->
                            </li>
                            <li><a href="">Связаться с нами</a></li>
                        </ul>
                    </div>
                    <!--DL Menu END-->
                </div>
            </div>
        </div>
        <!--KODE TOP NAVI WRAPER END-->
    </div>