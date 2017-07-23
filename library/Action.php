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
        //------------------------------------------------------------------//
        //-----------Получаем русскую транслитерацию для каждого заказа-----------------//
        $itemProperty_ru = array();
        foreach ($arr['products'] as $key => $value) {
            $itemProperty_ru[$key]['itemNameRu'] = $this->calculator->switchItemName($arr['products'][$key]['itemName']);
            $itemProperty_ru[$key]['woodBreedRu'] = $this->calculator->switchWoodBreed($arr['products'][$key]['woodBreed']);
            $itemProperty_ru[$key]['bondingTypeRU'] = $this->calculator->switchBondingType($arr['products'][$key]['bondingType']);
            $itemProperty_ru[$key]['glueTypeRu'] = $this->calculator->switchGlueType($arr['products'][$key]['glueType']);
            $itemProperty_ru[$key]['coveringRu'] = $this->calculator->switchCoveringType($arr['products'][$key]['covering']);
            $itemProperty_ru[$key]['toningColorRu'] = $this->calculator->switchToningColor($arr['products'][$key]['toningColor']);
            $itemProperty_ru[$key]['packagingRu'] = $this->calculator->switchPackaging();
        }
        //------------------------------------------------------------------------------//
        //---------Получаем необходимые коэффициенты согласно заказа--------//
        $order_coeff = array();
        foreach ($arr['products'] as $key => $value) {
            //----------------------------------------------------------------------
            if ($arr['products'][$key]['woodBreed'] == 'ash') {
                $order_coeff[$key]['woodBreed'] = $res_coeff['ash'];
            } elseif ($arr['products'][$key]['woodBreed'] == 'oak') {
                $order_coeff[$key]['woodBreed'] = $res_coeff['oak'];
            } else {
                die('Не введен тип дерева!' . __LINE__);
            }
            //-------------------------------------------------------------------------
            if ($arr['products'][$key]['bondingType'] == 'glued') {
                $order_coeff[$key]['bondingType'] = $res_coeff['glued'];
            } elseif ($arr['products'][$key]['bondingType'] == 'spliced') {
                $order_coeff[$key]['bondingType'] = $res_coeff['spliced'];
            } else {
                die('Не введен тип массива!' . __LINE__);
            }
            //--------------------------------------------------------------------------
            if ($arr['products'][$key]['gauge'] == 20) {
                $order_coeff[$key]['gauge'] = $res_coeff['gauge20'];
            } elseif ($arr['products'][$key]['gauge'] == 30) {
                $order_coeff[$key]['gauge'] = $res_coeff['gauge30'];
            } elseif ($arr['products'][$key]['gauge'] == 40) {
                $order_coeff[$key]['gauge'] = $res_coeff['gauge40'];
            } else {
                die('Не введена толщина изделия!' . __LINE__);
            }
            //---------------------------------------------------------------------------
            if ($arr['products'][$key]['glueType'] == 'waterproof') {
                $order_coeff[$key]['glueType'] = $res_coeff['waterproof'];
            } elseif($arr['products'][$key]['glueType'] == 'notWaterproof') {
                $order_coeff[$key]['glueType'] = $res_coeff['notWaterproof'];
            } else {
                die('Не введен тип клея для изделия!' . __LINE__);
            }
            //----------------------------------------------------------------------------
            if ($arr['products'][$key]['detailsNumber'] == '' || $arr['products'][$key]['detailsNumber'] == NULL) {
                die('Не введено количество деталей!'.__LINE__);
            } else {
                $order_coeff[$key]['detailsNumber'] = $arr['products'][$key]['detailsNumber'];
            }
            //-------------------------------------------------------------------------------
            if ($arr['products'][$key]['length'] == 0 || $arr['products'][$key]['length'] == '' || $arr['products'][$key]['length'] == NULL) {
                die('Не введена длина изделия!'.__LINE__);
            } else {
                $order_coeff[$key]['length'] = $arr['products'][$key]['length'];
            }
            if ($arr['products'][$key]['width'] == 0 || $arr['products'][$key]['width'] == '' || $arr['products'][$key]['width'] == NULL) {
                die('Не введена ширина изделия!'.__LINE__);
            } else {
                $order_coeff[$key]['width'] = $arr['products'][$key]['width'];
            }
            //--------------------------------------------------------------------------------
            if ($arr['products'][$key]['chamferRemoving'] == 1) {
                $order_coeff[$key]['chamferRemovingPrice'] = $res_coeff['chamferRemovingPrice'];
            } else {
                $order_coeff[$key]['chamferRemovingPrice'] = 0;
            }
            //----------------------------------------------------------------------------------
            if ($arr['products'][$key]['complexRadius'] == 1) {
                $order_coeff[$key]['complexRadius'] = $res_coeff['complexRadiusPrice'];
            } else {
                $order_coeff[$key]['complexRadius'] = 0;
            }
            //----------------------------------------------------------------------------------
            if ($arr['products'][$key]['coveringPreparation'] == 1) {
                $order_coeff[$key]['coveringPreparation'] = $res_coeff['coveringPreparationPrice'];
            } else {
                $order_coeff[$key]['coveringPreparation'] = 0;
            }
            //----------------------------------------------------------------------------------
            if ($arr['products'][$key]['covering'] == 'polish') {
                $order_coeff[$key]['polish'] = $res_coeff['polish'];
            } elseif ($arr['products'][$key]['covering'] == 'polishWithColor') {
                $order_coeff[$key]['polish'] = $res_coeff['polishWithColor'];
            } elseif ($arr['products'][$key]['covering'] == 'noCovering') {
                $order_coeff[$key]['polish'] = $res_coeff['noCovering'];
            }
            //----------------------------------------------------------------------------------
            if ($arr['products'][$key]['packaging'] == '1') {
                $order_coeff[$key]['packaging'] = $res_coeff['packagingPrice'];
            } else {
                $order_coeff[$key]['packaging'] = 0;
            }
            $order_coeff[$key]['discount'] = $res_coeff['discount'];
        }
        //------------------------------------------------------------------//
        //-----------------Подсчет основных математических единиц-------------
        $totalSummForAllProducts = 0;
        $discountForAllProducts = 0;
        foreach ($order_coeff as $key => $value){
            $details = $order_coeff[$key]['detailsNumber'];
            //Площадь
            $E = $order_coeff[$key]['length'] * $order_coeff[$key]['width'] / 1000000;
            //Первичная обязательная сумма
            $summ1 = round($order_coeff[$key]['woodBreed'] * $order_coeff[$key]['bondingType'] * $order_coeff[$key]['gauge'] * $order_coeff[$key]['glueType'] * $details * $E);
            //Снятие фаски по периметру
            $summ2 = round(((2 *($order_coeff[$key]['length'] + $order_coeff[$key]['width'])*$order_coeff[$key]['chamferRemovingPrice'])/1000) * $details);
            $summ1 = $summ1 + $summ2;
            $itemProperty_ru[$key]['chamferRemovingPrice'] = $summ2;
            //Криволинейное форматирование
            $summ3 = round($order_coeff[$key]['complexRadius']*1*$details);
            $summ1 = $summ1 + $summ3;
            $itemProperty_ru[$key]['complexRadiusPrice'] = $summ3;
            //Подготовка к покрытию
            $summ4 = round((2 * $E * $order_coeff[$key]['coveringPreparation'])*$details);
            $summ1 = $summ1 + $summ4;
            $itemProperty_ru[$key]['coveringPreparation'] = $summ4;
            //Покрытие
            $summ5 = round((2 * $E * $order_coeff[$key]['polish'])*$details);
            $summ1 = $summ1 + $summ5;
            $itemProperty_ru[$key]['polish'] = $summ5;
            //Упаковка
            $summ6 = round(($E * $order_coeff[$key]['packaging'])*$details);
            $summ1 = $summ1 + $summ6;
            $itemProperty_ru[$key]['Packaging'] = $summ6;
            $itemProperty_ru[$key]['totalPrice'] = $summ1;
            $itemProperty_ru[$key]['totalPriceForOneDetail'] = round($summ1/$details);
            //Скидка
            if($summ2!=0&&$summ4!=0&&$summ5!=0){
                $summ7_coeff_disc = $order_coeff[$key]['discount'];
                $disc = round($summ1 * $summ7_coeff_disc);
                $discountForAllProducts += $disc;
                $summ1 = $summ1 - $disc;
                $itemProperty_ru[$key]['discount'] = $disc;
            }else{
                $itemProperty_ru[$key]['discount'] = 0;
            }

            $itemProperty_ru[$key]['totalPriceWithDiscount'] = $summ1;
            $totalSummForAllProducts += $itemProperty_ru[$key]['totalPriceWithDiscount'];
        }
        $itemProperty_ru['totalPriceForAllProducts'] = $totalSummForAllProducts;
        $itemProperty_ru['discountForAllProducts'] = $discountForAllProducts;

        //--------------------------------------------------------------------
        $array = array(
            'count' => $summ1,
        );

//        $count = count($arr);


//        $products = $arr['products'][0];
//        $finalSum = $arr['finalSum'];
//        $client = array();
//
//        $client['name'] = $arr['client']['name'];
//        $client['phone'] = $arr['client']['phone'];
//        $client['email'] = $arr['client']['email'];
//        $client['city'] = $arr['client']['city'];
//        $client['message'] = $arr['client']['message'];
//        $res_arr = array(
//            'x' => $client[0],
//            'y' => $client[1],
//            'z' => $client[2],
//            'q' => $client[3],
//            'w' => $client[4],
//        );
//        $length = $arr['products'][0]['length'];
//        $width = $arr['products'][0]['width'];
//        $arr_res = array('l' => $length, 'w' => $width);
//        Mail::sendMail($client);
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














