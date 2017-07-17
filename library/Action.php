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
    protected $user;

    function __construct($db, $template)
    {
        $this->data = new MainStorage($db);
        $this->template = $template;
        $this->blog = new Blog($db);
        $this->user = new Users($db);
    }

    /**
     * @param null $id
     * inner function redirect to page
     * according to $id;
     */
    public function redirect($id=NULL)
    {
        if (!$id) {
            header('Location:' . $_SERVER['PHP_SELF']);
        }
        header('Location:' . $_SERVER['PHP_SELF'] . $id);
    }

    /**
     * Output mainpage according to request;
     */
    public function mainpage()
    {
        $title = 'Главная страница';
        $header = 'pages/parts/header.php';
        $main = 'pages/main.php';
        $footer = 'pages/parts/footer.php';
        $blog = $this->blog;
        include_once $this->template;
    }

    /**
     * Output one article from blog
     */
    public function article()
    {
        $id = filter_input(INPUT_GET,'id');
        $title = 'Новости';
        $header = 'pages/parts/header.php';
        $main = 'pages/article.php';
        $footer = 'pages/parts/footer.php';
        $blogItem = $this->blog->getItemByID($id);
        include_once $this->template;
    }
    /**
     * Output all the blog items
     */
    public function blogarticles()
    {
        $title = 'Блог';
        $header = 'pages/parts/header.php';
        $main = 'pages/blog.php';
        $footer = 'pages/parts/footer.php';
        $blog = $this->blog->getItems();
        include_once $this->template;
    }

    /**
     * The page shows different types of products
     * which they figure out;
     */
    public function costproducts()
    {
        $title = 'Подсчет стоимости';
        $header = 'pages/parts/headercalc.php';
        $main = 'pages/calculator.php';
        $footer = 'pages/parts/footercalc.php';
        include_once $this->template;
    }

    /**
     * Error page via FALSE get request
     */
    public function errorPage()
    {

    }

    /**
     * Определяем данные из формы со стартовой страницы
     */
    public function callform()
    {
        if($data = $this->getDataFromForm()){
            if(Mail::sendMail($data)){
                if($this->user->addUserToDB( $data['name'], $data['city'], $data['phone'], $data['email'], $data['message'])){
                    $this->redirect();
                }else{
                    die('Не удалось добавить пользователя в базу данных');
                }
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
     * Getting data from ajax request;
     */
    public function getDataCalc()
    {
        header('Content-type:application/json');
        $arr = file_get_contents('php://input');
        $arr = json_decode($arr);
//        $arr = array(
//            'q'=>$_POST['itemName'],
//            'w'=>$_POST['woodBreed'],
//            'e'=>$_POST['bondingType'],
//            'r'=>$_POST['gauge'],
//            't'=>$_POST['glueType'],
//            'y'=>$_POST['detailsNumber'],
//            'u'=>$_POST['length'],
//            'i'=>$_POST['width'],
//            'o'=>$_POST['chamferRemoving'],
//            'p'=>$_POST['complexRadius'],
//            'a'=>$_POST['coveringPreparation'],
//            's'=>$_POST['covering'],
//            'd'=>$_POST['toningColor'],
//            'f'=>$_POST['discount'],
//            'g'=>$_POST['packaging'],
//            'h'=>$_POST['totalWithDiscount'],
//        );
//        $arr = json_decode($_REQUEST);
        echo json_encode($arr);
    }
}

















