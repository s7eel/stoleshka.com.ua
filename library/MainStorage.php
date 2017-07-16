<?php
/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 16.07.17
 * Time: 12:47
 */
class MainStorage
{

    protected $db;

    function __construct($db)
    {
        $this->db = new mysqli(
            $db['host'],
            $db['user'],
            $db['pass'],
            $db['name']
        );
        if($this->db->query('SET NAMES UTF8')){
            if($this->db->query('set character_set_server=UTF8')){
                return TRUE;
            }
        }
        return FALSE;
    }
    public function printWord()
    {
        return 'hiho';
    }

}