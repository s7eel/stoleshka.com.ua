<?php

/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 19.07.17
 * Time: 19:28
 */
class Data extends MainStorage
{
    public function getDataCoefficients()
    {
        $query = "SELECT * FROM data";
        if ($result = parent::arrayRes($query)) {
            return $result;
        } else {
            return false;
        }
    }
}