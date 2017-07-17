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
    protected $blog;

    function __construct($db, $template)
    {
        $this->data = new MainStorage($db);
        $this->template = $template;
        $this->blog = new Blog($db);
    }
    public function redirect($id=NULL)
    {
        if (!$id) {
            header('Location:' . $_SERVER['PHP_SELF']);
        }
        header('Location:' . $_SERVER['PHP_SELF'] . $id);
    }

    public function mainpage()
    {
        $title = 'Главная страница';
        $header = 'pages/header.php';
        $main = 'pages/main.php';
        $footer = 'pages/footer.php';
        $blog = $this->blog;
        include_once $this->template;
    }
    public function article()
    {
        $id = filter_input(INPUT_GET,'id');
        $title = 'Новости';
        $header = 'pages/header.php';
        $main = 'pages/article.php';
        $footer = 'pages/footer.php';
        $blogItem = $this->blog->getItemByID($id);
        include_once $this->template;
    }
    public function errorPage()
    {
        header('Content-type:application/json');
        $arr = array(
            'q'=>$_POST['itemName'],
            'w'=>$_POST['woodBreed'],
            'e'=>$_POST['bondingType'],
            'r'=>$_POST['gauge'],
            't'=>$_POST['glueType'],
            'y'=>$_POST['detailsNumber'],
            'u'=>$_POST['length'],
            'i'=>$_POST['width'],
            'o'=>$_POST['chamferRemoving'],
            'p'=>$_POST['complexRadius'],
            'a'=>$_POST['coveringPreparation'],
            's'=>$_POST['covering'],
            'd'=>$_POST['toningColor'],
            'f'=>$_POST['discount'],
            'g'=>$_POST['packaging'],
        );
        echo json_encode($arr);
    }

    /**
     * Определяем данные из формы со стартовой страницы
     */
    public function callform()
    {
        if($data = $this->getDataFromForm()){
            if(Mail::sendMail($data)){
                $this->redirect();
            }else{
                die('Не удалось отправить сообщение');
            }
        }else{
            $this->redirect('errorPage');
        }

    }

    /**
     * @return array
     * getting data from the form from 1st page
     */
    public function getDataFromForm()
    {
        return array(
            'name' => filter_input(INPUT_POST, 'name'),
            'phone' => filter_input(INPUT_POST, 'phone'),
            'email' => filter_input(INPUT_POST, 'email'),
            'message' => filter_input(INPUT_POST, 'message'),
            'city' => filter_input(INPUT_POST, 'city'),
            'date' => date('j-m-y'),
        );
    }

    /**
     * return array with data to JS
     */
    public function getDataFromSession()
    {
        $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
        echo json_encode($arr);
    }

    /**
     * Output all the blog items
     */
    public function blogarticles()
    {
        $title = 'Блог';
        $header = 'pages/header.php';
        $main = 'pages/blog.php';
        $footer = 'pages/footer.php';
        $blog = $this->blog->getItems();
        include_once $this->template;
    }
}

















