<?php

/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 17.07.17
 * Time: 21:56
 */
class Users extends MainStorage
{
    public function addUserToDB($name, $phone, $city, $email, $message)
    {
        $message = $this->db->real_escape_string($message);
        $query = "INSERT INTO users (name, city, phone , email, message) VALUES ('$name', '$city', '$phone', '$email', '$message')";
        if($result = parent::saveDB($query)){
            return TRUE;
        }
        return FALSE;
    }
}