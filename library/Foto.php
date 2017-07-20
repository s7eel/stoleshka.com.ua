<?php

/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 20.07.17
 * Time: 20:42
 */
class Foto
{
    public function validate($foto)
    {
        if ($foto['error'] === 4) {
            return FALSE;
        }
        return TRUE;
    }
    public function addFotoToDir($foto, $path_save)
    {
        $types = array("image/jpeg",);
        if ($foto['error'] == UPLOAD_ERR_OK) {
            if (in_array($foto['type'], $types)) {
                if ($foto['size'] <= 3 * 1024 * 1024) {//Не более 3 мб
                    $file_name_parts = explode('.', $foto['name']);
                    $file_extension = array_pop($file_name_parts);
                    $file_base_name = implode('', $file_name_parts);
                    $file_name = md5($file_base_name . rand(1, getrandmax()));
                    $file_name .= '.' . $file_extension;
                    $path = $_SERVER['DOCUMENT_ROOT'] . $path_save . $file_name;
                    if (move_uploaded_file($foto['tmp_name'], $path)) {
                        return $file_name;
                    } else {
                        die("problem with moving");
                    }
                } else {
                    die("file is too large");
                }
            } else {
                die("invalid type of file".__LINE__);
            }
        }else{
            die('Не удалось загрузить фото'.__LINE__);
        }
    }
}