<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="priceCalculator/styles.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="priceCalculator/calculator.js"></script>
    <script src="priceCalculator/main.js"></script>
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
<body>

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#calcModal"
        data-item-name="steps">
    Launch demo modal
</button>

<div class="modal fade" tabindex="-1" role="dialog" id="calcModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-5">
                        <form id="calculator">
                            <div id="basicRequirements">
                                <div class="form-group">
                                    <label class="control-label" for="itemName">Наименование товара</label>
                                    <select id="itemName" name="itemName" class="form-control itemName">
                                        <option value="tabletop">столешница</option>
                                        <option value="steps">ступени</option>
                                        <option value="windowsill">подоконник</option>
                                        <option value="frontFacade">фасад прямой</option>
                                        <option value="furnitureBoard">мебельный щит</option>
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
                                            Срощенный
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
                                    <label class="control-label" for="detailsNumber">Количество деталей</label>
                                    <input name="detailsNumber" id="detailsNumber" type="number" min="0" step="1"
                                           class="form-control detailsNumber" required>
                                    <span>шт.</span>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Габаритные размеры</label>
                                    <input name="length" type="number" placeholder="длина"
                                           class="form-control size" required>
                                    <input name="width" type="number" placeholder="ширина"
                                           class="form-control size" required> <div>мм</div>
                                </div>
                                <button id="showAdditionalRequirements" class="btn btn-info">
                                    Показать дополнительные услуги
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
                                        <input type="checkbox" name="toningColor" value="wenge">
                                        венге
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="toningColor" value="bleached">
                                        выбеленный
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
                    <div class="col-sm-5 col-sm-offset-2">
                        <div id="images">
                            <img src="http://thecatapi.com/api/images/get?size=small&format=src&type=jpg&results_per_page=2"
                                 alt="">
                            <img src="http://thecatapi.com/api/images/get?size=small&format=src&type=gif&results_per_page=2"
                                 alt="">
                        </div>
                        <div id="calculatedSums" class="calculated-sums modal-fixed">
                            <p>Изготовление
                                <span id="productionCost">0</span>
                                грн
                            </p>
                            <p>Снятие фаски
                                <span id="chamferRemovingCost">0</span>
                                грн
                            </p>
                            <p>Криволинейное форматирование
                                <span id="complexRadiusCost">0</span>
                                грн
                            </p>
                            <p>Подготовка к покраске
                                <span id="coveringPreparationCost">0</span>
                                грн
                            </p>
                            <p>Покрытие
                                <span id="coveringCost">0</span>
                                грн
                            </p>
                            <div class="total-sums">
                                <hr>
                                <hr>
                                <p>Итого: <span id="total">0</span> грн</p>
                                <p>Скидка: <span id="discount">0</span> грн</p>
                                <p>Итого со скидкой: <span id="totalWithDiscount">0</span> грн</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="discount">* При заказе всего комплекса услуг скидка - 7 %</div>
                <button type="button" id="refresh" class="btn btn-default">Очистить</button>
                <button type="button" id="submit" class="btn btn btn-success" data-dismiss="modal" disabled>Оформить</button>
                <button type="button" id="continue" class="btn btn-success" disabled>Заказать еще</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>