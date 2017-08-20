<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <meta name="keywords"  content="ступени, столешницы, подоконники, прямые фасады, мебельный щит, изделия из натурального дерева, дуб, ясень">
    <meta name="description" content="Производим изделия из натурального дерева (дуб, ясень) - ступени, столешницы, подоконники, прямые фасады, мебельный щит. Кратчайшие сроки. Цены от производителя!">
    <!--css/bootstrap.min.css start-->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
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

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104664076-1', 'auto');
  ga('send', 'pageview');

</script>
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
                            <a href="<?=$_SERVER['PHP_SELF']?>?page=mainpage"><img src="images/logo11.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="kode_top_info2_list">
                            <div class="kode_top_info2">
                                <span><i class="glyphicon glyphicon-home"></i></span>
                                <div class="kode_top_info_text">
                                    <a href="<?=$_SERVER['PHP_SELF']?>?page=mainpage#map" >Днепр, АНД район</a>
                                    <a href="<?=$_SERVER['PHP_SELF']?>?page=mainpage#map" >ул. Саранская 91Д   </a>
                                </div>
                            </div>

                            <div class="kode_top_info2">
                                <span><i class="glyphicon glyphicon-earphone"></i></span>
                                <div class="kode_top_info_text">
                                    <a href="<?=$_SERVER['PHP_SELF']?>?page=mainpage#map">+38 (067)1-493-493</a>
                                    <a href="<?=$_SERVER['PHP_SELF']?>?page=mainpage#map">+38 (095)0-069-049</a>
                                </div>
                            </div>
                            <div class="kode_top_info2">
                                <span><i class="glyphicon glyphicon-envelope"></i></span>
                                <div class="kode_top_info_text">
                                    <a href="<?=$_SERVER['PHP_SELF']?>?page=mainpage#map">info@stoleshka.com.ua</a>
                                    <a href="<?=$_SERVER['PHP_SELF']?>?page=mainpage#map">zakaz@stoleshka.com.ua</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a class="kode-button-style-1 kode-theme-color-bg-color" href="" data-toggle="modal" data-target="#basketModal" id="basket">корзина</a>

                         <!-- Modal -->
  <div class="modal fade" id="basketModal" role="dialog" data-backdrop="static">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ваш Заказ</h4>
        </div>
        <div class="modal-body" id="basketList">
            <table class="table">

           <tbody id="productsList"></tbody>
           </table>
           <form id="orderForm" class="quote_form_list" action="" hidden>
                       <div class="col-md-6 col-sm-6" >
                           <div class="kode_quote_commet_field" >
                               <input placeholder="Ваше Имя" name="name" id="name" type="text" data-default="Name*" size="30">
                           </div>
                       </div>
                       <div class="col-md-6 col-sm-6">
                           <div class="kode_quote_commet_field">
                               <input id="mask_phone" placeholder="Ваш телефон" name="phone" id="phone" type="text">
                           </div>
                       </div>
                       <div class="col-md-6 col-sm-6">
                           <div class="kode_quote_commet_field">
                               <input id="e-mail" placeholder="Mail" name="email" type="email">
                           </div>
                       </div>
                       <div class="col-md-6 col-sm-6">
                           <div class="kode_quote_commet_field">
                               <select name="city" onmousedown="if(this.options.length>5){this.size=5;}"
                                       onchange="this.blur()" onblur="this.size=0;">
                                   <option value="Днепр">Днепр</option>
                                   <option value="Винница">Винница</option>
                                   <option value="Киев">Киев</option>
                                   <option value="Житомир">Житомир</option>
                                   <option value="Запорожье">Запорожье</option>
                                   <option value="Кропивницкий">Кропивницкий</option>
                                   <option value="Ивано-Франковск">Ивано-Франковск</option>
                                   <option value="Луганск">Луганск</option>
                                   <option value="Луцк">Луцк</option>
                                   <option value="Львов">Львов</option>
                                   <option value="Николаев">Николаев</option>
                                   <option value="Одесса">Одесса</option>
                                   <option value="Полтава">Полтава</option>
                                   <option value="Ровно">Ровно</option>
                                   <option value="Суммы">Суммы</option>
                                   <option value="Тернополь">Тернополь</option>
                                   <option value="Ужгород">Ужгород</option>
                                   <option value="Харьков">Харьков</option>
                                   <option value="Херсон">Херсон</option>
                                   <option value="Хмельницкий">Хмельницкий</option>
                                   <option value="Черкассы">Черкассы</option>
                                   <option value="Чернигов">Чернигов</option>
                                   <option value="Черновцы">Черновцы</option>
                                   <option value="Донецк">Донецк</option>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-12">
                           <div class="kode_quote_textarea">
                               <textarea placeholder="Примечания/Пожелания" name="message" style="border: 1px solid #d4d4d4;"></textarea>
                           </div>
                       </div>
                       <div class="col-md-12"><button type="submit" class="btn btn-warning" id="makeOrder">Заказать</button></div>
                   </form>
        </div>
</div>

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
                        <li><a class="active" href="<?=$_SERVER['PHP_SELF']?>?page=mainpage">Главная</a> </li>
                        <li><a href="<?=$_SERVER['PHP_SELF']?>?page=mainpage#about">О нас</a>  </li>
                        <li><a href="<?=$_SERVER['PHP_SELF']?>?page=productions">Продукция</a>  </li>
                        <li><a href="<?=$_SERVER['PHP_SELF']?>?page=costproducts">Цена</a>    </li>
                        <li><a href="<?= $_SERVER['PHP_SELF']?>?page=delivery">Доставка и оплата</a>  </li>
                        <li><a href="<?=$_SERVER['PHP_SELF']?>?page=blogarticles">Блог</a>    </li>
                        <li><a href="<?=$_SERVER['PHP_SELF']?>?page=mainpage#map">Контакты</a></li>
                    </ul>
                    <!--DL Menu Start-->
                    <div id="kode-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Меню</button>
                        <ul class="dl-menu">
                            <li><a class="active" href="<?=$_SERVER['PHP_SELF']?>?page=mainpage">Главная</a></li>
                            <li class="menu-item kode-parent-menu"><a href="<?=$_SERVER['PHP_SELF']?>?page=mainpage#about">О нас</a>  </li>
                            <li class="menu-item kode-parent-menu"><a href="<?=$_SERVER['PHP_SELF']?>?page=productions">Продукция</a></li>
                            <li class="menu-item kode-parent-menu"><a href="<?=$_SERVER['PHP_SELF']?>?page=costproducts">Цена</a> </li>
                            <li class="menu-item kode-parent-menu"><a href="<?= $_SERVER['PHP_SELF']?>?page=delivery">Доставка и оплата</a> </li>
                            <li class="menu-item kode-parent-menu"><a href="<?=$_SERVER['PHP_SELF']?>?page=mainpage#map">Контакты</a></li>
                            <li><a href="">Связаться с нами</a></li>
                        </ul>
                    </div>
                    <!--DL Menu END-->
                </div>
            </div>
        </div>
        <!--KODE TOP NAVI WRAPER END-->
    </div>
    <!-- TRYING TO DO CALCULATOR-->
    <div class="modal fade" tabindex="-1" role="dialog" id="calcModal" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="border-radius: 0px; background: #545454; padding-top: 0px;     padding-bottom: 0px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <form id="calculator">
                                <div id="basicRequirements">

                                         <div class="kode_quote_commet_field">
                                            <label class="control-label" for="itemName">Наименование товара</label>
                                            <select id="itemName" name="itemName" class=" itemName">
                                               <option class="bbb" value="tabletop">столешница</option>
                                               <option class="bbb" value="steps">ступени</option>
                                               <option class="bbb" value="windowsill">подоконник</option>
                                               <option class="bbb" value="frontFacade">фасад прямой</option>
                                               <option class="bbb" value="furnitureBoard">мебельный щит</option>
                                            </select>
                                        </div>

                                    <div class="form-group">
                                        <label class="control-label">Порода дерева</label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="woodBreed" value="ash">
                                                Ясень
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="woodBreed" value="oak">
                                                Дуб
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Тип склейки</label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="bondingType" value="glued">
                                                Клеенный массив
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="bondingType" value="spliced">
                                                Сращённый
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Толщина</label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="gauge" value="20">
                                                20 мм
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="gauge" value="30">
                                                30 мм
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="gauge" value="40">
                                                40 мм
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Вид клея</label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="glueType" value="waterproof">
                                                Влагостойкий
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="glueType" value="notWaterproof">
                                                Не влагостойкий
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="detailsNumber">Количество деталей, шт</label>
                                        <input name="detailsNumber" id="detailsNumber" type="number" min="0" step="1"
                                               class="form-control detailsNumber" required>
<!--                                        <span>шт.</span>-->
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Габаритные размеры, мм</label>
                                        <input name="length" type="number" placeholder="длина"
                                               class="form-control size" required>
                                        <input name="width" type="number" placeholder="ширина"
                                               class="form-control size" required>
<!--                                        <div>мм</div>-->
                                    </div>
                                    <button id="showAdditionalRequirements" class="btn btn-info" >
                                      дополнительные услуги
                                    </button>
                                </div>

                                <div id="additionalRequirements" hidden>
                                    <div class="form-group">
                                        <label class="control-label">Снятие фаски по периметру</label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="chamferRemoving" value="1">
                                                Да
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="chamferRemoving" value="0">
                                                Нет
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Криволинейное форматирование / сложный
                                            радиус</label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="complexRadius" value="1">
                                                Да
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="complexRadius" value="0">
                                                Нет
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Подготовка к покрытию</label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="coveringPreparation" value="1">
                                                Да
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="coveringPreparation" value="0">
                                                Нет
                                            </label>
                                        </div>
                                    </div>

                                    <fieldset class="form-group covering">
                                        <label class="control-label">Покрытие</label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="covering" value="polish">
                                                лак
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="covering" value="polishWithColor">
                                                лак + тон
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="covering" value="noCovering">
                                                без покрытия
                                            </label>
                                        </div>
                                    </fieldset>

                                    <fieldset class="form-group toningColor">
                                        <label class="control-label">Выбор цвета тонирования</label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="toningColor" value="white">
                                                белый
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="toningColor" value="light">
                                                светлый
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="toningColor" value="dark">
                                                темный
                                            </label>
                                        </div>
                                    </fieldset>

                                    <div class="form-group">
                                        <label class="control-label">Упаковка изделия / деталей</label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="packaging" value="1">
                                                Да
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="packaging" value="0">
                                                Нет
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-7 col-sm-offset-1 total_culc_bord" >

                            <div id="calculatedSums" class="calculated-sums modal-fixed" style="">
                                <div id="images">
                                    <img src="/images/tabletop.jpg"
                                         alt="">
                                </div>
                                <p id="productInformation" style="margin: 10px; text-transform: uppercase;color: #545454;">
                                    <b><span id="productName">столешница</span>
                                    <span id="productMaterial"></span>:	&nbsp
                                    <span id="productNumber">0</span>шт,&nbsp
                                    <span id="productSize">0</span>&nbsp м<sup><small>2</small></sup></b>
                                </p>
                                <table class="table">
                                <tbody>
                                <tr>
                                    <td>Изготовление</td>
                                    <td><span id="productionCost">0</span>
                                        грн</td>
                                </tr>
                                <tr><td>Форматировние, снятие фаски по периметру</td>
                                    <td><span id="chamferRemovingCost">0</span> грн</td>
                                </tr>
                                <tr><td>Криволинейное форматирование</td>
                                    <td><span id="complexRadiusCost">0</span> грн</td>
                                </tr>
                                <tr><td>Подготовка к покраске</td>
                                    <td><span id="coveringPreparationCost">0</span>  грн</td>
                                </tr>
                                <tr><td>Покрытие</td>
                                    <td><span id="coveringCost">0</span>  грн</td>
                                </tr>
                                <tr><td>Упаковка</td>
                                    <td> <span id="">0</span> грн</td>
                                </tr>

<!--                                <div class="total-sums">-->
                                    <tr> <td><b>Итого:</b></td> <td><span id="total">0</span> грн</td>
                                    <tr> <td><b>Скидка:</b></td>  <td><span id="discount">0</span> грн</td>
                                    <tr> <td><b>Итого со скидкой:</b></td>  <td><span id="totalWithDiscount">0</span> грн</td>
                                    <tr style="margin: 10px; text-transform: uppercase;color: #fff; background-color:  #ffd322"> <td>Сумма заказа:</td> <td> <span id="finalSum"></span> грн</td>
<!--                                </div>-->

                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                            <div class="col-sm-4">
                                <div class="discount">* При заказе полного комплекса услуг <br> предоставляется скидка в размере - 7 %</div>
                            </div>
                            <div class="col-sm-8">
                                <div class="calc_button_panel">
                                 <button type="button" id="refresh" class="btn btn-default">Очистить</button>
                                <button type="button" id="submit" class="btn btn btn-success" data-dismiss="modal">Оформить</button>
                                <button type="button" id="continue" class="btn btn-success" disabled>Заказать еще</button>
                                </div>
                     </div>

                    </div>

                    </div>
            </div>
        </div>
    </div>