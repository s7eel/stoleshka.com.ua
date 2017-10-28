<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <!--css/bootstrap.min.css start-->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.6.2/full-all/ckeditor.js"></script>
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
    <link href="/bootstrap-social.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/priceCalculator/styles.css">
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
                            <a href=""><img src="/images/logo11.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--KODE TOP NAVI WRAPER START-->
<div class="kode_top_navi_wraper">
    <div class="navigation">
        <div class="container">
            <ul>
                <li><a class="<?=$class[0]?>" href="<?= $_SERVER['PHP_SELF'] ?>?page=mainpage">Главная</a>
                </li>
                <li><a class="<?=$class[1]?>" href="<?= $_SERVER['PHP_SELF'] ?>?page=coefficients">Коэфициенты</a>
                </li>
                <li><a class="<?=$class[2]?>" href="<?= $_SERVER['PHP_SELF'] ?>?page=blogarticles">Блог</a>
                </li>
                <li><a class="<?=$class[3]?>" href="<?= $_SERVER['PHP_SELF'] ?>?page=calcEmpty">Удаленные запросы</a>
                </li>
                <li><a href="<?= $_SERVER['PHP_SELF'] ?>?page=destroy">Выйти</a></li>
            </ul>
            <!--DL Menu Start-->

            <!--DL Menu END-->
        </div>
    </div>
</div>
<!--KODE TOP NAVI WRAPER END-->
