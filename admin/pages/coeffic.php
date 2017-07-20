ВНИМАНИЕ!!! ВСЕ ДРОБНЫЕ КОЭФФИЦИЕНТЫ ВВОДИТЬ С ИСПОЛЬЗОВАНИЕМ ТОЧКИ, А НЕ ЗАПЯТОЙ!!!
<form method="POST">
    <!---------------------------------------------------------------------------------------------------------------->
        Коэффициент 'Снятие фаски по периметру'<input type="text" name="chamferRemovingPrice" placeholder="<?=$arr[0]['chamferRemovingPrice']?>"><br>
       <input type="hidden" name="chamferRemovingPrice_hidden" value="<?=$arr[0]['chamferRemovingPrice']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Криволинейное форматирование<input type="text" name="complexRadiusPrice" placeholder="<?=$arr[0]['complexRadiusPrice']?>"><br>
        <input type="hidden" name="complexRadiusPrice_hidden" value="<?=$arr[0]['complexRadiusPrice']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Подготовка к покрытию<input type="text" name="coveringPreparationPrice" placeholder="<?=$arr[0]['coveringPreparationPrice']?>"><br>
        <input type="hidden" name="coveringPreparationPrice_hidden" value="<?=$arr[0]['coveringPreparationPrice']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Клей влагостойкий<input type="text" name="waterproof" placeholder="<?=$arr[0]['waterproof']?>"><br>
        <input type="hidden" name="waterproof_hidden" value="<?=$arr[0]['waterproof']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Клей невлагостойкий<input type="text" name="notWaterproof" placeholder="<?=$arr[0]['notWaterproof']?>"><br>
        <input type="hidden" name="notWaterproof_hidden" value="<?=$arr[0]['notWaterproof']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Покрытие: Лак<input type="text" name="polish" placeholder="<?=$arr[0]['polish']?>"><br>
        <input type="hidden" name="polish_hidden" value="<?=$arr[0]['polish']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Покрытие: Лак+Тон<input type="text" name="polishWithColor" placeholder="<?=$arr[0]['polishWithColor']?>"><br>
        <input type="hidden" name="polishWithColor_hidden" value="<?=$arr[0]['polishWithColor']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Покрытие: Без Покрытия<input type="text" name="noCovering" placeholder="<?=$arr[0]['noCovering']?>"><br>
        <input type="hidden" name="noCovering_hidden" value="<?=$arr[0]['noCovering']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Упаковка<input type="text" name="packagingPrice" placeholder="<?=$arr[0]['packagingPrice']?>"><br>
        <input type="hidden" name="packagingPrice_hidden" value="<?=$arr[0]['packagingPrice']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Ясень<input type="text" name="ash" placeholder="<?=$arr[0]['ash']?>"><br>
        <input type="hidden" name="ash_hidden" value="<?=$arr[0]['ash']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Дуб<input type="text" name="oak" placeholder="<?=$arr[0]['oak']?>"><br>
        <input type="hidden" name="oak_hidden" value="<?=$arr[0]['oak']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Клееный массив<input type="text" name="glued" placeholder="<?=$arr[0]['glued']?>"><br>
        <input type="hidden" name="glued_hidden" value="<?=$arr[0]['glued']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Срощенный массив<input type="text" name="spliced" placeholder="<?=$arr[0]['spliced']?>"><br>
        <input type="hidden" name="spliced_hidden" value="<?=$arr[0]['spliced']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Толщина 20мм<input type="text" name="gauge20" placeholder="<?=$arr[0]['gauge20']?>"><br>
        <input type="hidden" name="gauge20_hidden" value="<?=$arr[0]['gauge20']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Толщина 30мм<input type="text" name="gauge30" placeholder="<?=$arr[0]['gauge30']?>"><br>
        <input type="hidden" name="gauge30_hidden" value="<?=$arr[0]['gauge30']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Толщина 40мм<input type="text" name="gauge40" placeholder="<?=$arr[0]['gauge40']?>"><br>
        <input type="hidden" name="gauge40_hidden" value="<?=$arr[0]['gauge40']?>">
    <!---------------------------------------------------------------------------------------------------------------->
        Скидка<input type="text" name="discount" placeholder="<?=$arr[0]['discount']?>"><br>
        <input type="hidden" name="discount_hidden" value="<?=$arr[0]['discount']?>">
    <!---------------------------------------------------------------------------------------------------------------->
    <input type="submit" value="Save" formaction="<?=$_SERVER['PHP_SELF']?>?page=savedata">
</form>