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
    protected $dataCoefficient;
    protected $arr;
    protected $fotoclass;

    function __construct($db, $template)
    {
        $this->data = new MainStorage($db);
        $this->template = $template;
        $this->blog = new Blog($db);
        $this->user = new Users($db);
        $this->dataCoefficient = new Data($db);
        $this->arr = $this->dataCoefficient->getDataCoefficients();
        $this->fotoclass = new Foto();
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
        $arr = $this->arr;
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
        $arr = $this->arr;
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
        $arr = $this->arr;
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
        $header = 'pages/parts/header.php';
        $arr = $this->arr;
        $main = 'pages/nomenclature.php';
        $footer = 'pages/parts/footer.php';
        include_once $this->template;
    }

    /**
     * Output page with products
     */
    public function productions()
    {
        $title = 'Продукция';
        $header = 'pages/parts/header.php';
        $arr = $this->arr;
        $main = 'pages/production.php';
        $footer = 'pages/parts/footer.php';
        include_once $this->template;

    }
    public function calculatorView()
    {
        $arr = $this->arr;
        $this->template='priceCalculator/calculator.php';
        include_once $this->template;
    }
    /**
     * Error page via FALSE get request
     */
    public function errorPage()
    {
        echo 'ERRORPAGE';
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
        $arr = json_decode($arr, true);

        $products = $arr['products'];
        $finalSum = $arr['finalSum'];
        $client = array();

        $client[] = $arr['client']['name'];
        $client[] = $arr['client']['phone'];
        $client[] = $arr['client']['email'];
        $client[] = $arr['client']['city'];
        $client[] = $arr['client']['message'];
        $res_arr = array(
          'x'=>$client[0],
          'y'=>$client[1],
          'z'=>$client[2],
          'q'=>$client[3],
          'w'=>$client[4],
        );



        echo json_encode($res_arr, JSON_UNESCAPED_UNICODE);
    }

    /**
     * Функция по обработке неотправленных данных из калькулятора
     */
    public function getDataCalcEmpty()
    {
        header('Content-type:application/json');
        $arr = file_get_contents('php://input');
        $arr = json_decode($arr, true);
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
//{"itemName":"frontFacade","woodBreed":"ash","bondingType":"glued","gauge":"30","glueType":"waterproof","detailsNumber":"1","length":"1000","width":"1000","chamferRemoving":"1","complexRadius":"1","coveringPreparation":"1","covering":"polishWithColor","toningColor":"wenge","discount":"on","packaging":"1","totalWithDiscount":"3639"}
}

















