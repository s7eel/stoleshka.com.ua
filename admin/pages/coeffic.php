<div class="container">
<form method="POST" style="margin-bottom: 20px">
    <div class="row">

    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
        <p>Коэффициент 'Снятие фаски по периметру'</p><input type="text" name="chamferRemovingPrice" placeholder="<?=$arr[0]['chamferRemovingPrice']?>"><br>
       <input type="hidden" name="chamferRemovingPrice_hidden" value="<?=$arr[0]['chamferRemovingPrice']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
      <p>  Криволинейное форматирование</p><input type="text" name="complexRadiusPrice" placeholder="<?=$arr[0]['complexRadiusPrice']?>"><br>
            <input type="hidden" name="complexRadiusPrice_hidden" value="<?=$arr[0]['complexRadiusPrice']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p>Подготовка к покрытию</p><input type="text" name="coveringPreparationPrice" placeholder="<?=$arr[0]['coveringPreparationPrice']?>"><br>
            <input type="hidden" name="coveringPreparationPrice_hidden" value="<?=$arr[0]['coveringPreparationPrice']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p>  Клей влагостойкий</p><input type="text" name="waterproof" placeholder="<?=$arr[0]['waterproof']?>"><br>
            <input type="hidden" name="waterproof_hidden" value="<?=$arr[0]['waterproof']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p>  Клей невлагостойкий</p><input type="text" name="notWaterproof" placeholder="<?=$arr[0]['notWaterproof']?>"><br>
            <input type="hidden" name="notWaterproof_hidden" value="<?=$arr[0]['notWaterproof']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p> Покрытие: Лак</p><input type="text" name="polish" placeholder="<?=$arr[0]['polish']?>"><br>
            <input type="hidden" name="polish_hidden" value="<?=$arr[0]['polish']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p>   Покрытие: Лак+Тон</p><input type="text" name="polishWithColor" placeholder="<?=$arr[0]['polishWithColor']?>"><br>
            <input type="hidden" name="polishWithColor_hidden" value="<?=$arr[0]['polishWithColor']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p>   Покрытие: Без Покрытия</p><input type="text" name="noCovering" placeholder="<?=$arr[0]['noCovering']?>"><br>
            <input type="hidden" name="noCovering_hidden" value="<?=$arr[0]['noCovering']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p>  Упаковка</p><input type="text" name="packagingPrice" placeholder="<?=$arr[0]['packagingPrice']?>"><br>
            <input type="hidden" name="packagingPrice_hidden" value="<?=$arr[0]['packagingPrice']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p>  Ясень</p><input type="text" name="ash" placeholder="<?=$arr[0]['ash']?>"><br>
            <input type="hidden" name="ash_hidden" value="<?=$arr[0]['ash']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p>  Дуб</p><input type="text" name="oak" placeholder="<?=$arr[0]['oak']?>"><br>
            <input type="hidden" name="oak_hidden" value="<?=$arr[0]['oak']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p>  Клееный массив</p><input type="text" name="glued" placeholder="<?=$arr[0]['glued']?>"><br>
            <input type="hidden" name="glued_hidden" value="<?=$arr[0]['glued']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p>   Срощенный массив</p><input type="text" name="spliced" placeholder="<?=$arr[0]['spliced']?>"><br>
            <input type="hidden" name="spliced_hidden" value="<?=$arr[0]['spliced']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p> Толщина 20мм</p><input type="text" name="gauge20" placeholder="<?=$arr[0]['gauge20']?>"><br>
            <input type="hidden" name="gauge20_hidden" value="<?=$arr[0]['gauge20']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p>  Толщина 30мм</p><input type="text" name="gauge30" placeholder="<?=$arr[0]['gauge30']?>"><br>
            <input type="hidden" name="gauge30_hidden" value="<?=$arr[0]['gauge30']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p>  Толщина 40мм</p><input type="text" name="gauge40" placeholder="<?=$arr[0]['gauge40']?>"><br>
            <input type="hidden" name="gauge40_hidden" value="<?=$arr[0]['gauge40']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
        <div class="col-sm-4" style=" margin-top: 20px;">
    <p>   Скидка</p><input type="text" name="discount" placeholder="<?=$arr[0]['discount']?>"><br>
            <input type="hidden" name="discount_hidden" value="<?=$arr[0]['discount']?>"></div>
    <!---------------------------------------------------------------------------------------------------------------->
    <input  class="btn btn-warning" style="margin-left: 10px; margin-top: 20px;" type="submit" value="Save" formaction="<?=$_SERVER['PHP_SELF']?>?page=savedata">
</form>
</div>
</div>