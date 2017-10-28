<?php if (isset($error)){
    echo $error;
} ?>

<div class="container" style="padding: 30px;     overflow: hidden;">
<form method="POST">
    <p style="margin-top: 20px;">Введите начальную дату</p>
    <input type="date" name="first"><br>

    <p style="margin-top: 20px;">Введите крнечную дату</p>
    <input type="date" name="second"><br>
    <input style="margin-top: 20px;" name="submit" type="submit" value="Фильтровать" formaction="<?= $_SERVER['PHP_SELF'] ?>?page=calcEmpty">
</form>

<?php if ($datas != NULL) {?>
    <table class="table">
        <tr>
            <th>itemNameRu</th>
            <th>woodBreedRu</th>
            <th>bondingTypeRU</th>
            <th>glueTypeRu</th>
            <th>gauge</th>
            <th>detailsNumber</th>
            <th>length</th>
            <th>width</th>
            <th>chamferRemoving</th>
            <th>complexRadius</th>
            <th>coveringPreparation</th>
            <th>coveringRu</th>
            <th>toningColorRu</th>
            <th>packaging</th>
            <th>dataOrder</th>
        </tr>
    <?php foreach ($datas as $key => $item) {
        ?>
<tr>
    <td><?=$item['itemNameRu']?></td>
    <td><?=$item['woodBreedRu']?></td>
    <td><?=$item['bondingTypeRU']?></td>
    <td><?=$item['glueTypeRu']?></td>
    <td><?=$item['gauge']?></td>
    <td><?=$item['detailsNumber']?></td>
    <td><?=$item['length']?></td>
    <td><?=$item['width']?></td>
    <td><?=$item['chamferRemoving']?></td>
    <td><?=$item['complexRadius']?></td>
    <td><?=$item['coveringPreparation']?></td>
    <td><?=$item['coveringRu']?></td>
    <td><?=$item['toningColorRu']?></td>
    <td><?=$item['packaging']?></td>
    <td><?=$item['dataOrder']?></td>
</tr>

    <?php } ?>
    </table>
<?php } ?>
</div>