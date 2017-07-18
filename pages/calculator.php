<div class="content-wraper">
    <!--// KODE BANNER START//-->
    <div class="kode_banner">
        <div class="container">
            <div class="kode_banner_titile">
                <h2>Рассчёт стоимости</h2>
            </div>
        </div>
    </div>
    <!--// KODE BANNER END//-->

    <!--// KODE PRATICES AREA START //-->
    <div class="kode_pratices_area">
        <div class="container">
            <div class="kode_section_heading">
                <h6>Рады предложить Вам изделия из натурального дерева</h6>
                <h3>Выбирите продукцию</h3>
                <span><i class="fa fa-cogs"></i></span>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="kode_pratices_content">
                        <figure>
                            <img src="images/area.jpg" alt="">
                            <figcaption>
                                <h4>Столешницы</h4>
                                <p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoq ue
                                    penatius </p>
                                <a class="kode-button-style-2 kode-white-color-bg kode-theme-color-text-color" href=""
                                   data-toggle="modal" data-target="#calcModal">Рассчитать</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kode_pratices_content">
                        <figure>
                            <img src="images/area1.jpg" alt="">
                            <figcaption>
                                <h4>Ступени
                                </h4>
                                <p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoq ue
                                    penatius </p>
                                <a class="kode-button-style-2 kode-white-color-bg kode-theme-color-text-color" href=""
                                   data-toggle="modal" data-target="#calcModal">Рассчитать</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kode_pratices_content">
                        <figure>
                            <img src="images/area2.jpg" alt="">
                            <figcaption>
                                <h4>
                                    Подоконники
                                </h4>
                                <p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoq ue
                                    penatius </p>
                                <a class="kode-button-style-2 kode-white-color-bg kode-theme-color-text-color" href=""
                                   data-toggle="modal" data-target="#calcModal">Рассчитать</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kode_pratices_content">
                        <figure>
                            <img src="images/area3.jpg" alt="">
                            <figcaption>
                                <h4>Прямые фасады</h4>
                                <p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoq ue
                                    penatius </p>
                                <a class="kode-button-style-2 kode-white-color-bg kode-theme-color-text-color" href=""
                                   data-toggle="modal" data-target="#calcModal">Рассчитать</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kode_pratices_content">
                        <figure>
                            <img src="images/area4.jpg" alt="">
                            <figcaption>
                                <h4>Мебельный щит</h4>
                                <p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoq ue
                                    penatius </p>
                                <a class="kode-button-style-2 kode-white-color-bg kode-theme-color-text-color" href=""
                                   data-toggle="modal" data-target="#calcModal">Рассчитать</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="kode_pratices_content">
                        <figure>
                            <img src="images/area5.jpg" alt="">
                            <figcaption>
                                <h4>Подробнее о продукции</h4>
                                <p>Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoq ue
                                    penatius </p>
                                <a class="kode-button-style-2 kode-white-color-bg kode-theme-color-text-color" href=""
                                   data-toggle="modal" data-target="#calcModal">Подробнее</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// KODE PRATICES AREA END //-->


    <div class="modal fade" tabindex="-1" role="dialog" id="calcModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body row">
                    <div class="col-md-6">
                        <form id="calculator">

                            <!--Basic requirements-->

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
                                       class="form-control input-md" required>
                                <span>шт.</span>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Габаритные размеры</label>
                                <div class="input-group">
                                    <input name="length" type="number" placeholder="длина"
                                           class="form-control" required>
                                    <input name="width" type="number" placeholder="ширина"
                                           class="form-control" required>
                                </div>
                            </div>

                            <!--Additional requirements-->

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

                            <div class="form-group">
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
                            </div>

                            <div class="form-group">
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
                            </div>

                            <div class="form-group">
                                <label class="control-label">
                                    Заказать весь комплекс услуг и получить скидку - 7 %
                                </label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="discount">
                                        Да
                                    </label>
                                </div>
                            </div>

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
                        </form>
                    </div>
                    <div class="col-md-3">
                        <img src="">
                        <img src="">
                    </div>
                    <div class="col-md-3">
                        <div id="calculatedSums" class="calculated-sums">
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
                <div class="modal-footer">
                    <button type="button" id="refresh" class="btn btn-default">Очистить</button>
                    <button type="button" id="submit" class="btn btn btn-success" data-dismiss="modal">Оформить</button>
                </div>
            </div>
        </div>
    </div>


</div>
<!--kode_wraper end-->
<!--js/jquery.js start-->