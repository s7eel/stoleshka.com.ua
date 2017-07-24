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
    protected $calculator;
    protected $deletedOrder;

    function __construct($db, $template)
    {
        $this->data = new MainStorage($db);
        $this->template = $template;
        $this->blog = new Blog($db);
        $this->user = new Users($db);
        $this->dataCoefficient = new Data($db);
        $this->arr = $this->dataCoefficient->getDataCoefficients();
        $this->fotoclass = new Foto();
        $this->calculator = new Calculator($db);
        $this->deletedOrder = new DeletedOrder($db);
    }

    /**
     * @param null $id
     * inner function redirect to page
     * according to $id;
     */
    public function redirect($id = NULL)
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
        $id = filter_input(INPUT_GET, 'id');
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
        $this->template = 'priceCalculator/calculator.php';
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
        if ($data = $this->getDataFromForm()) {
            if (Mail::sendMail($data)) {
                if ($this->user->addUserToDB($data['name'], $data['city'], $data['phone'], $data['email'], $data['message'])) {
                    $this->redirect();
                } else {
                    die('Не удалось добавить пользователя в базу данных');
                }
            } else {
                die('Не удалось отправить сообщение');
            }
        } else {
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

        //Получаем коэффициенты из БД $coefficients[0]['искомый коэффициент']
        //--Переводим в простой ассоциативный массив $res_coeff['искомый коэффициент']
        $coefficients = $this->dataCoefficient->getDataCoefficients();
        $res_coeff = array();
        foreach ($coefficients as $key => $value) {
            foreach ($value as $item => $value2) {
                $res_coeff[$item] = $value2;
            }
        }
        //-----------Получаем русскую транслитерацию для каждого заказа-----------------//
        $itemProperty_ru = $this->calculator->getRussianTransliteration($arr['products']);
        //---------Получаем необходимые коэффициенты согласно заказа--------//
        $order_coeff = $this->calculator->getCoefficientsForProducts($arr['products'], $res_coeff);
        //-----------------Подсчет основных математических единиц-------------
        $itemProperty_ru = $this->calculator->getSummFullPrice($order_coeff, $itemProperty_ru);
        //---------------------Получаем данные о клиенте-----------------------------------
        $clientData = $this->calculator->getClientProperty($arr['client']);
        $totalPriceForAllProducts = $itemProperty_ru['totalPriceForAllProducts'];
        $discountForAllProducts = $itemProperty_ru['discountForAllProducts'];
        unset($itemProperty_ru['totalPriceForAllProducts']);
        unset($itemProperty_ru['discountForAllProducts']);

        Mail::sendMailProductOrder($itemProperty_ru, $clientData, $discountForAllProducts, $totalPriceForAllProducts);
        echo json_encode($itemProperty_ru, JSON_UNESCAPED_UNICODE);
    }

    /**
     * Функция по обработке неотправленных данных из калькулятора
     */
    public function getDataCalcEmpty()
    {
        header('Content-type:application/json');
        $arr = file_get_contents('php://input');
        $arr = json_decode($arr, true);
        $itemProperty_ru = $this->calculator->getRussianTranslitEmpty($arr);
        $this->deletedOrder->saveValues($itemProperty_ru);

        echo json_encode($itemProperty_ru);
    }
}














