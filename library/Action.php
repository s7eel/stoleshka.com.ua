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
    public function mainpage2()
    {
        echo $this->data->printWord().'hihihi';
    }
    public function errorPage()
    {
        echo '404';
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
}