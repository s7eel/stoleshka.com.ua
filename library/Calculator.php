<?php
/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 23.07.17
 * Time: 12:38
 */

class Calculator extends MainStorage
{

    public function switchItemName($name)
    {
        switch ($name) {
            case'tabletop':
                return 'Столешница';
            case'steps':
                return 'Ступени';
            case'windowsill':
                return 'Подоконник';
            case'frontFacade':
                return 'Фасад прямой';
            case'furnitureBoard':
                return 'Мебельный щит';
            default:
                return 'Неопознанный объект';
        }
    }

    public function switchWoodBreed($name)
    {
        switch ($name) {
            case'ash':
                return 'Ясень';
            case'oak':
                return 'Дуб';
            default:
                return 'Неопознанное дерево';
        }
    }

    public function switchBondingType($name)
    {
        switch ($name) {
            case'glued':
                return 'Клеенный массив';
            case'spliced':
                return 'Срощенный массив';
            default:
                return 'Неопознанный вид массива';
        }
    }

    public function switchGlueType($name)
    {
        switch ($name) {
            case'waterproof':
                return 'Влагостойкий';
            case'notWaterproof':
                return 'Не влагостойкий';
            default:
                return 'Неопознанный вид клея';
        }
    }

    public function switchCoveringType($name)
    {
        switch ($name) {
            case'polish':
                return 'Лак';
            case'polishWithColor':
                return 'Лак + Тон';
            case'noCovering':
                return 'Без покрытия';
            default:
                return 'Неопознанный вид покрытия';
        }
    }

    public function switchPackaging()
    {
        return 'Упаковка';
    }

    public function switchToningColor($name)
    {
        switch ($name) {
            case'white':
                return 'Белый';
            case'light':
                return 'Светлый';
            case'dark':
                return 'Темный';
            default:
                return 'Неопознанный тон';
        }
    }

    /**
     * @param array $array
     * @return array
     * Переводим чать с английского на русский
     * Вносим в массив основные неизменные составляющие заказа
     * такие как длина, ширина, кол-во деталей
     */
    public function getRussianTransliteration(array $array)
    {
        $itemProperty_ru = array();
        foreach ($array as $key => $value) {
            $itemProperty_ru[$key]['itemNameRu'] = $this->switchItemName($array[$key]['itemName']);
            $itemProperty_ru[$key]['woodBreedRu'] = $this->switchWoodBreed($array[$key]['woodBreed']);
            $itemProperty_ru[$key]['bondingTypeRU'] = $this->switchBondingType($array[$key]['bondingType']);
            $itemProperty_ru[$key]['glueTypeRu'] = $this->switchGlueType($array[$key]['glueType']);
            $itemProperty_ru[$key]['coveringRu'] = $this->switchCoveringType($array[$key]['covering']);
            $itemProperty_ru[$key]['toningColorRu'] = $this->switchToningColor($array[$key]['toningColor']);
            $itemProperty_ru[$key]['packagingRu'] = $this->switchPackaging();
            $itemProperty_ru[$key]['width'] = $array[$key]['width'];
            $itemProperty_ru[$key]['length'] = $array[$key]['length'];
            $itemProperty_ru[$key]['gauge'] = $array[$key]['gauge'];
            $itemProperty_ru[$key]['detailsNumber'] = $array[$key]['detailsNumber'];
            $itemProperty_ru[$key]['dataOrder'] = date('y-m-j');
        }
        return $itemProperty_ru;
    }
    public function getRussianTranslitEmpty(array $array)
    {
        $itemProperty_ru = array();
        foreach ($array as $key => $value) {
            $itemProperty_ru['itemNameRu'] = $this->switchItemName($array['itemName']);
            $itemProperty_ru['woodBreedRu'] = $this->switchWoodBreed($array['woodBreed']);
            $itemProperty_ru['bondingTypeRU'] = $this->switchBondingType($array['bondingType']);
            $itemProperty_ru['glueTypeRu'] = $this->switchGlueType($array['glueType']);
            $itemProperty_ru['coveringRu'] = $this->switchCoveringType($array['covering']);
            $itemProperty_ru['toningColorRu'] = $this->switchToningColor($array['toningColor']);
            $itemProperty_ru['packagingRu'] = $this->switchPackaging();
            $itemProperty_ru['width'] = $array['width'];
            $itemProperty_ru['length'] = $array['length'];
            $itemProperty_ru['gauge'] = $array['gauge'];
            $itemProperty_ru['detailsNumber'] = $array['detailsNumber'];

            $itemProperty_ru['chamferRemoving'] = $array['chamferRemoving'];
            $itemProperty_ru['complexRadius'] = $array['complexRadius'];
            $itemProperty_ru['coveringPreparation'] = $array['coveringPreparation'];

            $itemProperty_ru['packaging'] = $array['packaging'];
            $itemProperty_ru['dataOrder'] = date('y-m-j');
        }
        return $itemProperty_ru;
    }

    /**
     * @param $array
     * @param $array2
     * @return array
     * Получаем из заказа основные характеристики товара и получаем
     * к ним основные коэффициенты характерные на сегодняшний день согласно
     * выборке из базы данных
     */
    public function getCoefficientsForProducts($array, $array2)
    {
        $order_coeff = array();
        foreach ($array as $key => $value) {
            //----------------------------------------------------------------------
            if ($array[$key]['woodBreed'] == 'ash') {
                $order_coeff[$key]['woodBreed'] = $array2['ash'];
            } elseif ($array[$key]['woodBreed'] == 'oak') {
                $order_coeff[$key]['woodBreed'] = $array2['oak'];
            } else {
                die('Не введен тип дерева!' . __LINE__);
            }
            //-------------------------------------------------------------------------
            if ($array[$key]['bondingType'] == 'glued') {
                $order_coeff[$key]['bondingType'] = $array2['glued'];
            } elseif ($array[$key]['bondingType'] == 'spliced') {
                $order_coeff[$key]['bondingType'] = $array2['spliced'];
            } else {
                die('Не введен тип массива!' . __LINE__);
            }
            //--------------------------------------------------------------------------
            if ($array[$key]['gauge'] == 20) {
                $order_coeff[$key]['gauge'] = $array2['gauge20'];
            } elseif ($array[$key]['gauge'] == 30) {
                $order_coeff[$key]['gauge'] = $array2['gauge30'];
            } elseif ($array[$key]['gauge'] == 40) {
                $order_coeff[$key]['gauge'] = $array2['gauge40'];
            } else {
                die('Не введена толщина изделия!' . __LINE__);
            }
            //---------------------------------------------------------------------------
            if ($array[$key]['glueType'] == 'waterproof') {
                $order_coeff[$key]['glueType'] = $array2['waterproof'];
            } elseif($array[$key]['glueType'] == 'notWaterproof') {
                $order_coeff[$key]['glueType'] = $array2['notWaterproof'];
            } else {
                die('Не введен тип клея для изделия!' . __LINE__);
            }
            //----------------------------------------------------------------------------
            if ($array[$key]['detailsNumber'] == '' || $array[$key]['detailsNumber'] == NULL) {
                die('Не введено количество деталей!'.__LINE__);
            } else {
                $order_coeff[$key]['detailsNumber'] = $array[$key]['detailsNumber'];
            }
            //-------------------------------------------------------------------------------
            if ($array[$key]['length'] == 0 || $array[$key]['length'] == '' || $array[$key]['length'] == NULL) {
                die('Не введена длина изделия!'.__LINE__);
            } else {
                $order_coeff[$key]['length'] = $array[$key]['length'];
            }
            if ($array[$key]['width'] == 0 || $array[$key]['width'] == '' || $array[$key]['width'] == NULL) {
                die('Не введена ширина изделия!'.__LINE__);
            } else {
                $order_coeff[$key]['width'] = $array[$key]['width'];
            }
            //--------------------------------------------------------------------------------
            if ($array[$key]['chamferRemoving'] == 1) {
                $order_coeff[$key]['chamferRemovingPrice'] = $array2['chamferRemovingPrice'];
            } else {
                $order_coeff[$key]['chamferRemovingPrice'] = 0;
            }
            //----------------------------------------------------------------------------------
            if ($array[$key]['complexRadius'] == 1) {
                $order_coeff[$key]['complexRadius'] = $array2['complexRadiusPrice'];
            } else {
                $order_coeff[$key]['complexRadius'] = 0;
            }
            //----------------------------------------------------------------------------------
            if ($array[$key]['coveringPreparation'] == 1) {
                $order_coeff[$key]['coveringPreparation'] = $array2['coveringPreparationPrice'];
            } else {
                $order_coeff[$key]['coveringPreparation'] = 0;
            }
            //----------------------------------------------------------------------------------
            if ($array[$key]['covering'] == 'polish') {
                $order_coeff[$key]['polish'] = $array2['polish'];
            } elseif ($array[$key]['covering'] == 'polishWithColor') {
                $order_coeff[$key]['polish'] = $array2['polishWithColor'];
            } elseif ($array[$key]['covering'] == 'noCovering') {
                $order_coeff[$key]['polish'] = $array2['noCovering'];
            }
            //----------------------------------------------------------------------------------
            if ($array[$key]['packaging'] == '1') {
                $order_coeff[$key]['packaging'] = $array2['packagingPrice'];
            } else {
                $order_coeff[$key]['packaging'] = 0;
            }
            $order_coeff[$key]['discount'] = $array2['discount'];
        }
        return $order_coeff;
    }

    /**
     * @param array $order_coeff
     * @param array $itemProperty_ru
     * @return array
     * Подсчет итоговой суммы за каждый товар в зависимости от кол-ва деталей
     * и составляющих, занесение в суммирующий массив основных частей
     */
    public function getSummFullPrice(array $order_coeff, array $itemProperty_ru)
    {
        $totalSummForAllProducts = 0;
        $discountForAllProducts = 0;
        foreach ($order_coeff as $key => $value){
            $details = $order_coeff[$key]['detailsNumber'];
            //Площадь
            $E = $order_coeff[$key]['length'] * $order_coeff[$key]['width'] / 1000000;
            //Первичная обязательная сумма
            $summ1 = round($order_coeff[$key]['woodBreed'] * $order_coeff[$key]['bondingType'] * $order_coeff[$key]['gauge'] * $order_coeff[$key]['glueType'] * $details * $E);
            //Снятие фаски по периметру
            $summ2 = round(((2 *($order_coeff[$key]['length'] + $order_coeff[$key]['width'])*$order_coeff[$key]['chamferRemovingPrice'])/1000) * $details);
            $summ1 = $summ1 + $summ2;
            $itemProperty_ru[$key]['chamferRemovingPrice'] = $summ2;
            //Криволинейное форматирование
            $summ3 = round($order_coeff[$key]['complexRadius']*1*$details);
            $summ1 = $summ1 + $summ3;
            $itemProperty_ru[$key]['complexRadiusPrice'] = $summ3;
            //Подготовка к покрытию
            $summ4 = round((2 * $E * $order_coeff[$key]['coveringPreparation'])*$details);
            $summ1 = $summ1 + $summ4;
            $itemProperty_ru[$key]['coveringPreparation'] = $summ4;
            //Покрытие
            $summ5 = round((2 * $E * $order_coeff[$key]['polish'])*$details);
            $summ1 = $summ1 + $summ5;
            $itemProperty_ru[$key]['polish'] = $summ5;
            //Упаковка
            $summ6 = round(($E * $order_coeff[$key]['packaging'])*$details);
            $summ1 = $summ1 + $summ6;
            $itemProperty_ru[$key]['Packaging'] = $summ6;
            $itemProperty_ru[$key]['totalPrice'] = $summ1;
            $itemProperty_ru[$key]['totalPriceForOneDetail'] = round($summ1/$details);
            //Скидка
            if($summ2!=0&&$summ4!=0&&$summ5!=0){
                $summ7_coeff_disc = $order_coeff[$key]['discount'];
                $disc = round($summ1 * $summ7_coeff_disc);
                $discountForAllProducts += $disc;
                $summ1 = $summ1 - $disc;
                $itemProperty_ru[$key]['discount'] = $disc;
            }else{
                $itemProperty_ru[$key]['discount'] = 0;
            }

            $itemProperty_ru[$key]['totalPriceWithDiscount'] = $summ1;
            $totalSummForAllProducts += $itemProperty_ru[$key]['totalPriceWithDiscount'];
        }
        $itemProperty_ru['totalPriceForAllProducts'] = $totalSummForAllProducts;
        $itemProperty_ru['discountForAllProducts'] = $discountForAllProducts;
        return $itemProperty_ru;
    }
    public function getClientProperty(array $array)
    {
        $clientData = array();
        $clientData['clientName'] = $array['name'];
        $clientData['clientPhone'] = $array['phone'];
        $clientData['clientEmail'] = $array['email'];
        $clientData['clientCity'] = $array['city'];
        $clientData['clientMessage'] = $array['message'];
        return $clientData;
    }
    
}




















