<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    <!--css/bootstrap.min.css start-->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!--style.css start-->
    <link href="/style.css" rel="stylesheet">
    <link href="/css/slick.css" rel="stylesheet">
    <!--swiper.min.css start-->
    <link href="/css/prettyPhoto.css" rel="stylesheet">
    <!--swiper.min.css start-->
    <link href="/css/portfolio.css" rel="stylesheet">
    <!--swiper.min.css start-->
    <link href="/css/shortcode.css" rel="stylesheet">
    <!--swiper.min.css start-->
    <link href="/css/owl.carousel.css" rel="stylesheet">
    <!--css/jquery.bxslider.css start-->
    <link href="/css/selectric.css" rel="stylesheet">
    <!--css/component.css start-->
    <link href="/css/component.css" rel="stylesheet">
    <!--svg-icon.css start-->
    <!--<link href="svg-icon.css" rel="stylesheet">-->
    <!--css/font-awesome.css start-->
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/component.css" rel="stylesheet">
    <!--css/typography.css start-->
    <link href="/css/typography2.css" rel="stylesheet">
    <!--css/jquery.bxslider.css start-->
    <link href="/css/jquery.bxslider.css" rel="stylesheet">
    <!--css/color.css start-->
    <link href="/css/color.css" rel="stylesheet">
    <!--css/widget.css start-->
    <link href="/css/widget.css" rel="stylesheet">
    <!--css/responsive.css start-->
    <link href="/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="/priceCalculator/styles.css">
    <link href="/bootstrap-social.css" rel="stylesheet" type="text/css"  />
    <!----------------------------------------------------------------------------------------------------->
    <script src="/priceCalculator/calculator.js"></script>
    <script src="/priceCalculator/main.js"></script>
    <!----------------------------------------------------------------------------------------------------->
<!--    <style type="text/css">-->
<!--        .calculated-sums {-->
<!--            display: inline-block;-->
<!--            border: 1px solid #666;-->
<!--            padding: 5px;-->
<!--        }-->
<!---->
<!--        .calculated-sums span{-->
<!--            display: inline-block;-->
<!--            min-width: 40px;-->
<!--            text-align: center;-->
<!--        }-->
<!---->
<!--        .total-sums {-->
<!--            display: inline-block;-->
<!--            margin-left: 20%;-->
<!--        }-->
<!---->
<!--        .total-sums hr {-->
<!--            border: none;-->
<!--            height: 1px;-->
<!--            background-color: #666;-->
<!--            color: #666;-->
<!--        }-->
<!---->
<!--        .total-sums hr:first-of-type {-->
<!--            margin-bottom: 0;-->
<!--        }-->
<!---->
<!--        .total-sums hr:last-of-type {-->
<!--            margin-top: 4px;-->
<!--            margin-bottom: 6px;-->
<!--        }-->
<!--        #calcModal label {-->
<!--            color: #4a4a4a;-->
<!--            display: block;-->
<!--            font-weight: 400;-->
<!--            margin-bottom: 10px;-->
<!--        }-->
<!--    </style>-->
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
                        <a class="kode-button-style-1 kode-theme-color-bg-color" href="index.html#">как получить скидку -13%</a>
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
                        </li>
                        <li><a href="index.html#about">О нас</a>
                        </li>
                        <li><a href="production.html">Продукция</a>
                        </li>
                        <li><a href="../nomenclature%20.php">Цена</a>
                            <ul>
                                <li><a href="<?=$_SERVER['PHP_SELF']?>?page=costproducts">Продсчитать стоимость</a></li>
                                <li><a href="sale.html">Как получить скидку</a></li>
                            </ul>
                        </li>
                        <li><a href="delivery.html">Доставка и оплата</a>
                        </li>
                        <li><a href="<?=$_SERVER['PHP_SELF']?>?page=blogarticles">Блог</a>
                        </li>
                        <li><a href="index.html#map-canvas">Контакты</a></li>
                    </ul>
                    <!--DL Menu Start-->
                    <div id="kode-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Меню</button>
                        <ul class="dl-menu">
                            <li><a class="active" href="index.html#">Главная</a>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="index.html#about">О нас</a>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="index.html#">Проду</a>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="index.html#">Цена</a>
                                <ul class="dl-submenu">
                                    <li><a href="out-team.html">Продсчитать стоимость</a></li>
                                    <li><a href="our-team-detail.html">Получить скидку</a></li>
                                </ul>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="advice.html">Доставка и оплата</a>
                            </li>
                            <li class="menu-item kode-parent-menu"><a href="index.html#">Контакты</a>
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