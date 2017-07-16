<?php
/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 16.07.17
 * Time: 12:47
 */
class Action
{
    protected $data;

    function __construct($db)
    {
        $this->data = new MainStorage($db);
    }

    public function mainpage()
    {
        echo $this->data->printWord();
    }
    public function mainpage2()
    {
        echo $this->data->printWord().'hihihi';
    }
}