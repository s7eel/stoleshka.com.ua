<?php

/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 20.07.17
 * Time: 13:05
 */
class AdminAction extends Action
{
//    protected $data;
//    protected $template;
//    protected $blog;
//    protected $user;
//    protected $dataCoefficient;

//    function __construct($db, $template)
//    {
//        $this->data = new MainStorage($db);
//        $this->template = $template;
//        $this->blog = new Blog($db);
//        $this->user = new Users($db);
//        $this->dataCoefficient = new Data($db);
//    }
        protected  $arr;
    function __construct($db, $template)
    {
        parent::__construct($db, $template);
        $this->arr = $this->dataCoefficient->getDataCoefficients();
    }

    /**
     * Output main page admin panel
     */
    public function mainpage()
    {
        $title = 'Главная страница';
        $header = 'pages/parts/adminheader.php';
        $main = 'pages/adminmain.php';
        $arr = $this->arr;
        $footer = 'pages/parts/adminfooter.php';
        $blog = $this->blog;
        include_once $this->template;
    }
    public function coefficients()
    {
        $title = 'Изменение коэфициентов';
        $header = 'pages/parts/adminheader.php';
        $main = 'pages/coeffic.php';
        $arr = $this->arr;
        $footer = 'pages/parts/adminfooter.php';
        $blog = $this->blog;
        include_once $this->template;
    }

}