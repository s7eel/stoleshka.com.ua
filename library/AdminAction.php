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
        $class=array('active','','');
        $footer = 'pages/parts/adminfooter.php';
        $blog = $this->blog;
        include_once $this->template;
    }

    /**
     * Output coefficients change page
     */
    public function coefficients()
    {
        $title = 'Изменение коэфициентов';
        $header = 'pages/parts/adminheader.php';
        $main = 'pages/coeffic.php';
        $class = array('','active','');
        $arr = $this->arr;
        //Переводим в простые числа
        foreach ($arr as $key => $value){
            foreach ($value as $item => $item2){
                $arr[$key][$item] *= 1;
            }
        }
        $footer = 'pages/parts/adminfooter.php';
        $blog = $this->blog;
        include_once $this->template;
    }
    /**
     * Output blog change page
     */
    public function blogarticles()
    {
        $title = 'Изменение коэфициентов';
        $header = 'pages/parts/adminheader.php';
        $main = 'pages/adminblog.php';
        $footer = 'pages/parts/adminfooter.php';
        $blog = $this->blog->getItems();
        $class = array('','','active');
        include_once $this->template;
    }
    /**
     * function to save new coefficients for site
     */
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
    /**
     *function for saving new blog item
     */
    public function newblogitem()
    {
        $request = $_REQUEST;
        $path = '/images/blog/';
        $res_arr = $this->blog->getSaveFormData($request);
            $this->fotoclass->validate($res_arr['foto']);
            $file_name = $this->fotoclass->addFotoToDir($res_arr['foto'], $path);
            $this->blog->saveBlogItem($res_arr['title'], $res_arr['short_descr'], $file_name, $res_arr['full_descr'], $res_arr['date']);
            $this->redirect('?page=blogarticles');
    }

    /**
     * function to delete article from blog
     */
    public function deletearticle()
    {
        $id = filter_input(INPUT_GET, 'id');
        $this->blog->deleteBlogItemByID($id);
        $this->redirect('?page=blogarticles');

    }

    /**
     * function to save changed article from blog
     */
    public function saveBlogItemByID()
    {
        $request = $_REQUEST;
        $path = '/images/blog/';
        $res_arr = $this->blog->getSaveFormData($request);
        if ($res_arr['date'] == '') {
            $res_arr['date'] = $res_arr['date_main'];
        }
//        var_dump($res_arr);PHP_EOL; die();
        if ($res_arr['foto'] === NULL) {
            $file_name = $res_arr['fotomain'];
        } else {
            $this->fotoclass->validate($res_arr['foto']);
            $file_name = $this->fotoclass->addFotoToDir($res_arr['foto'], $path);
//            var_dump($res_arr);PHP_EOL;echo $file_name; die();
        }
            $this->blog->updateBlogItemByID($res_arr['title'], $res_arr['short_descr'], $file_name, $res_arr['full_descr'], $res_arr['date'], $res_arr['id_article']);
            $this->redirect('?page=blogarticles');
    }
    /**
     * Система аутентификации
     */
    public function authuser(){
        $title = 'Authentificate';
        $header = 'pages/parts/authheader.php';
        $main = 'pages/authentification.php';
        $footer = 'pages/parts/authfooter.php';
        $login = User::$login;
        $password = User::$password;
        include_once $this->template;
    }

    /**
     * destroy session user
     */
    public function destroy(){
        $_SESSION['user']=NULL;
        session_unset();
        $this->redirect();

    }
    /**
     * authenticate user by name and password
     */
    public function authUserByNameAndLogin()
    {
        $authlogin = filter_input(INPUT_POST, 'login');
        $authpassword = filter_input(INPUT_POST, 'password');
        if ($authlogin === User::$login && $authpassword === User::$password) {
            $_SESSION['user'] = 'admin';
        }
        else{
            session_unset();
        }
        return $this->redirect();
    }
}