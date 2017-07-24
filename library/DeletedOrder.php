<?php
/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 24.07.17
 * Time: 13:48
 */

class DeletedOrder extends MainStorage
{
    public function saveValues(array $array)
    {
        $query = "INSERT INTO deletedorder (bondingTypeRU, chamferRemoving, complexRadius, coveringPreparation, coveringRu, dataOrder, detailsNumber, gauge, glueTypeRu, itemNameRu, length, width, packaging, toningColorRu, woodBreedRu) VALUES ('".$array['bondingTypeRU']."',  '".$array['chamferRemoving']."', '".$array['complexRadius']."', '".$array['coveringPreparation']."', '".$array['coveringRu']."', '".$array['dataOrder']."', '".$array['detailsNumber']."', '".$array['gauge']."', '".$array['glueTypeRu']."', '".$array['itemNameRu']."', '".$array['length']."', '".$array['width']."', '".$array['packaging']."', '".$array['toningColorRu']."', '".$array['woodBreedRu']."')";
        if($result = parent::saveDB($query)){
            return TRUE;
        }
        die('Не удалось добавить в базу данных'.__CLASS__.__LINE__);
    }
    public function getData($x, $y)
    {
        $query = "SELECT * FROM deletedorder WHERE dataOrder >= '$x' AND dataOrder <= '$y'";
        if($result = parent::arrayRes($query)){
            return $result;
        }
//        die('Не удалось сделать выборку из базы данных'.__CLASS__.__LINE__);
        return FALSE;
    }
}