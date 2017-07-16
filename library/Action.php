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
    protected $template;

    function __construct($db, $template)
    {
        $this->data = new MainStorage($db);
        $this->template = $template;
    }

    public function mainpage()
    {

    }
    public function mainpage2()
    {
        echo $this->data->printWord().'hihihi';
    }
    public function errorPage()
    {
        echo '404';
    }
}