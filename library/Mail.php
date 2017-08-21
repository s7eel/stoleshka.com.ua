<?php

/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 16.07.17
 * Time: 15:31
 */
class Mail
{
    public static function sendMail(array $data)
    {
        $to = 'stoleshka.com.ua@gmail.com';
        $subject = 'Вопрос с заглавной страницы сайта';
        $subject = '=?utf-8?B?'.base64_encode($subject).'?=';
        $headers = 'From: zakaz@stoleshka.com.ua' . "\r\n";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= "Content-type: text/html; charset=\"UTF-8\"; format=flowed \r\n";
        if($data['name']==NULL){
            $data['name']='Клиент не представился';
        }
        if($data['city']==NULL){
            $data['city']='Клиент не указал город';
        }
        $message = 'Вам задал вопрос:' . $data['name'] . '<br>'
            . 'Из города: ' . $data['city'] . '<br>'
            . 'Контактный телефон: ' . $data['phone'] . '<br>'
            . 'Контактный email: ' . $data['email'] . '<br>'
            . 'Дата вопроса: ' . $data['date'] . '<br>'
            . 'Написал следующее: ' . $data['message'];

        mail($to, $subject, $message, $headers);

        return TRUE;
    }
    public static function sendMailProductOrder(array $data, array $clientData, $discountForAllProducts, $totalPriceForAllProducts)
    {
        $to = 'stoleshka.com.ua@gmail.com';
        $subject = 'Заказ продукции';
        $subject = '=?utf-8?B?'.base64_encode($subject).'?=';
        $headers = 'From: zakaz@stoleshka.com.ua' . "\r\n";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= "Content-type: text/html; charset=\"UTF-8\"; format=flowed \r\n";

        $message = 'Имя клиента:' . $clientData['clientName'] . '<br>'
            . 'Из города: ' . $clientData['clientCity'] . '<br>'
            . 'Контактный телефон: ' . $clientData['clientPhone'] . '<br>'
            . 'Контактный email: ' . $clientData['clientEmail'] . '<br>'
            . 'Написал следующее: ' . $clientData['clientMessage'];
        $message.= '<h3>'.'Основной Заказ'.'</h3>'.'<hr>';
        foreach ($data as $key => $value){
            $message .= '<h3>'.'Название детали:'.$data[$key]['itemNameRu'].'</h3>'
                .'<h4>'.'Вид дерева:'.$data[$key]['woodBreedRu'].'</h4>'
                .'<h4>'.'Вид массива:'.$data[$key]['bondingTypeRU'].'</h4>'

                .'<h4>'.'Толщина изделия:'.$data[$key]['gauge'].'</h4>'
                .'<h4>'.'Ширина:'.$data[$key]['width'].'</h4>'
                .'<h4>'.'Длина:'.$data[$key]['length'].'</h4>'
                .'<h4>'.'Количество деталей:'.$data[$key]['detailsNumber'].'</h4>'
                .'<h4>'.'Вид клея:'.$data[$key]['glueTypeRu'].'</h4>'

                .'<h4>'.'Снятие фаски по периметру:'.$data[$key]['chamferRemovingPrice'].'</h4>'
                .'<h4>'.'Криволинейное форматирование:'.$data[$key]['complexRadiusPrice'].'</h4>'
                .'<h4>'.'Вид клея:'.$data[$key]['glueTypeRu'].'</h4>'
                .'<h4>'.'Вид покрытия:'.$data[$key]['coveringRu'].'</h4>'
                .'<h4>'.'Вид тонировки:'.$data[$key]['toningColorRu'].'</h4>'
                .'<h4>'.'Стоимость подготовки к покрытию:'.$data[$key]['coveringPreparation'].'</h4>'
                .'<h4>'.'Стоимость покрытия:'.$data[$key]['polish'].'</h4>'
                .'<h4>'.'Упаковка:'.$data[$key]['Packaging'].'</h4>'

                .'<h4>'.'Итого:'.$data[$key]['totalPrice'].'</h4>'
                .'<h4>'.'Скидка:'.$data[$key]['discount'].'</h4>'
                .'<h4>'.'Итого со скидкой:'.$data[$key]['totalPriceWithDiscount'].'</h4>'
                .'<h4>'.'Дата заказа: ' . $data[$key]['dataOrder'] . '</h4>'
                .'<hr>';
        }

        $message .= '<h3>'.'Скидка общего заказа:'.$discountForAllProducts.'</h3>';
        $message .= '<h3>'.'Сумма общего заказа:'.$totalPriceForAllProducts.'</h3>';
        mail($to, $subject, $message, $headers);

        return TRUE;
    }


}