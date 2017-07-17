<?php

/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 16.07.17
 * Time: 17:54
 */
class Blog extends MainStorage
{
    /**
     * @param $data
     * @return array
     * getting value 'data' from blog and
     * decoding it to the string with russian
     * translation
     */
    public function getDataFromDB($data)
    {
        $data_blog1 = explode("-", $data);
        switch ($data_blog1[1]) {
            case '01':
                $data_blog1[1] = "Янв";
                break;
            case '02':
                $data_blog1[1] = "Фв";
                break;
            case '03':
                $data_blog1[1] = "Мрт";
                break;
            case '04':
                $data_blog1[1] = "Апр";
                break;
            case '05':
                $data_blog1[1] = "Май";
                break;
            case '06':
                $data_blog1[1] = "Июн";
                break;
            case '07':
                $data_blog1[1] = "Июл";
                break;
            case '08':
                $data_blog1[1] = "Авг";
                break;
            case '09':
                $data_blog1[1] = "Сен";
                break;
            case '10':
                $data_blog1[1] = "Окт";
                break;
            case '11':
                $data_blog1[1] = "Нбр";
                break;
            case '12':
                $data_blog1[1] = "Дек";
                break;
            default:
                $data_blog1[1] = "";
        }
        //return $data_blog1[2] . " " . $data_blog1[1] . " " . $data_blog1[0];
        return array($data_blog1[2], $data_blog1[1]);
    }

    /**
     * @return array|bool
     * Get all the items from database
     */
    public function getItems()
    {
        $query =
            "SELECT b.id, b.title, b.short_descr, b.img_link, b.full_descr, b.created_at FROM blog as b ORDER BY created_at DESC";
        if ($result = parent::arrayRes($query)) {
            return $result;
        } else {
            return false;
        }
    }

    /**
     * @param $id
     * @return array|bool
     * Get the item from database by ID
     */
    public function getItemByID($id)
    {
        $query =
            "SELECT b.title, b.short_descr, b.img_link, b.full_descr, b.created_at FROM blog as b WHERE b.id='$id'";
        if ($result = parent::arrayRes($query)) {
            return $result;
        } else {
            return false;
        }
    }

}


















