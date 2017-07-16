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
        $to = 's7eell@gmail.com';
        $subject = 'Вопрос с заглавной страницы сайта';
        $subject = '=?utf-8?B?'.base64_encode($subject).'?=';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
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

}