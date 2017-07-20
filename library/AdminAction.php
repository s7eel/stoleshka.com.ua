<?php

/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 20.07.17
 * Time: 13:05
 */
class AdminAction extends Action
{
    protected $arr;

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
        foreach ($arr as $key => $value){
            foreach ($value as $item => $item2){
                $arr[$key][$item] *= 1;
            }
        }
        $footer = 'pages/parts/adminfooter.php';
        $blog = $this->blog;
        include_once $this->template;
    }

    public function savedata()
    {
        $request = $_REQUEST;
        $result_array =$this->dataCoefficient->getDataFromForm($request);
        $result_array = $this->dataCoefficient->changeComaToDot($result_array);
        if($this->dataCoefficient->updateDataCoefficients($result_array)){
            $this->redirect('?page=coefficients');
        }else{
            die(__LINE__);
        }
    }
    public function blogarticles()
    {
        $title = 'Изменение коэфициентов';
        $header = 'pages/parts/adminheader.php';
        $main = 'pages/adminblog.php';
        $footer = 'pages/parts/adminfooter.php';
        $blog = $this->blog->getItems();
        include_once $this->template;
    }
    public function newblogitem()
    {
        $request = $_REQUEST;
        $path = '/images/blog/';
        $res_arr = $this->blog->getSaveFormData($request);
        if($this->fotoclass->validate($res_arr['foto'])){
            $file_name = $this->fotoclass->addFotoToDir($res_arr['foto'], $path);
            $this->blog->saveBlogItem($res_arr['title'], $res_arr['short_descr'], $file_name, $res_arr['full_descr'], $res_arr['date']);
            $this->redirect('?page=blogarticles');
        }else{
            die('Фото не загружено'.__LINE__);
        }
    }
    public function deletearticle()
    {
        $id = filter_input(INPUT_GET, 'id');

    }


}