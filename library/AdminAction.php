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
        $footer = 'pages/parts/adminfooter.php';
        $blog = $this->blog;
        include_once $this->template;
    }

    public function savedata()
    {
        if ($chamferRemovingPrice = filter_input(INPUT_POST, 'chamferRemovingPrice') === '') {
            $chamferRemovingPrice = filter_input(INPUT_POST, 'chamferRemovingPrice_hidden');
        }else{
            $chamferRemovingPrice = filter_input(INPUT_POST, 'chamferRemovingPrice');
        }

        //----------------------------------------------------------------------//
        if ($complexRadiusPrice = filter_input(INPUT_POST, 'complexRadiusPrice') === '') {
            $complexRadiusPrice = filter_input(INPUT_POST, 'complexRadiusPrice_hidden');
        }else{
            $complexRadiusPrice = filter_input(INPUT_POST, 'complexRadiusPrice');
        }

        //----------------------------------------------------------------------//
        if ($coveringPreparationPrice = filter_input(INPUT_POST, 'coveringPreparationPrice') === '') {
            $coveringPreparationPrice = filter_input(INPUT_POST, 'coveringPreparationPrice_hidden');
        }else{
            $coveringPreparationPrice = filter_input(INPUT_POST, 'coveringPreparationPrice');
        }

        //----------------------------------------------------------------------//
        if ($waterproof = filter_input(INPUT_POST, 'waterproof') === '') {
            $waterproof = filter_input(INPUT_POST, 'waterproof_hidden');
        }else{
            $waterproof = filter_input(INPUT_POST, 'waterproof');
        }

        //----------------------------------------------------------------------//
        if ($notWaterproof = filter_input(INPUT_POST, 'notWaterproof') === '') {
            $notWaterproof = filter_input(INPUT_POST, 'notWaterproof_hidden');
        }else{
            $notWaterproof = filter_input(INPUT_POST, 'notWaterproof');
        }

        //----------------------------------------------------------------------//
        if ($polish = filter_input(INPUT_POST, 'polish') === '') {
            $polish = filter_input(INPUT_POST, 'polish_hidden');
        }else{
            $polish = filter_input(INPUT_POST, 'polish');
        }

        //----------------------------------------------------------------------//
        if ($polishWithColor = filter_input(INPUT_POST, 'polishWithColor') === '') {
            $polishWithColor = filter_input(INPUT_POST, 'polishWithColor_hidden');
        }else{
            $polishWithColor = filter_input(INPUT_POST, 'polishWithColor');
        }

        //----------------------------------------------------------------------//
        if ($noCovering = filter_input(INPUT_POST, 'noCovering') === '') {
            $noCovering = filter_input(INPUT_POST, 'noCovering_hidden');
        }else{
            $noCovering = filter_input(INPUT_POST, 'noCovering');
        }

        //----------------------------------------------------------------------//
        if ($packagingPrice = filter_input(INPUT_POST, 'packagingPrice') === '') {
            $packagingPrice = filter_input(INPUT_POST, 'packagingPrice_hidden');
        }else{
            $packagingPrice = filter_input(INPUT_POST, 'packagingPrice');
        }

        //----------------------------------------------------------------------//
        if ($ash = filter_input(INPUT_POST, 'ash') === '') {
            $ash = filter_input(INPUT_POST, 'ash_hidden');
        }else{
            $ash = filter_input(INPUT_POST, 'ash');
        }

        //----------------------------------------------------------------------//
        if ($oak = filter_input(INPUT_POST, 'oak') === '') {
            $oak = filter_input(INPUT_POST, 'oak_hidden');
        }else{
            $oak = filter_input(INPUT_POST, 'oak');
        }

        //----------------------------------------------------------------------//
        if ($glued = filter_input(INPUT_POST, 'glued') === '') {
            $glued = filter_input(INPUT_POST, 'glued_hidden');
        }else{
            $glued = filter_input(INPUT_POST, 'glued');
        }

        //----------------------------------------------------------------------//
        if ($spliced = filter_input(INPUT_POST, 'spliced') === '') {
            $spliced = filter_input(INPUT_POST, 'spliced_hidden');
        }else{
            $spliced = filter_input(INPUT_POST, 'spliced');
        }

        //----------------------------------------------------------------------//
        if ($gauge20 = filter_input(INPUT_POST, 'gauge20') === '') {
            $gauge20 = filter_input(INPUT_POST, 'gauge20_hidden');
        }else{
            $gauge20 = filter_input(INPUT_POST, 'gauge20');
        }

        //----------------------------------------------------------------------//
        if ($gauge30 = filter_input(INPUT_POST, 'gauge30') === '') {
            $gauge30 = filter_input(INPUT_POST, 'gauge30_hidden');
        }else{
            $gauge30 = filter_input(INPUT_POST, 'gauge30');
        }

        //----------------------------------------------------------------------//
        if ($gauge40 = filter_input(INPUT_POST, 'gauge40') === '') {
            $gauge40 = filter_input(INPUT_POST, 'gauge40_hidden');
        }else{
            $gauge40 = filter_input(INPUT_POST, 'gauge40');
        }

        //----------------------------------------------------------------------//
        if ($discount = filter_input(INPUT_POST, 'discount') === '') {
            $discount = filter_input(INPUT_POST, 'discount_hidden');
        }else{
            $discount = filter_input(INPUT_POST, 'discount');
        }

        //----------------------------------------------------------------------//
        $result_array = array($chamferRemovingPrice, $complexRadiusPrice, $coveringPreparationPrice, $packagingPrice, $discount,
            $waterproof, $notWaterproof, $polish, $polishWithColor, $noCovering, $ash, $oak, $glued, $spliced, $gauge20, $gauge30, $gauge40);
        $result_array = $this->dataCoefficient->changeComaToDot($result_array);
        if($this->dataCoefficient->updateDataCoefficients($result_array)){
            $this->redirect('?page=coefficients');
        }else{
            die(__LINE__);
        }
    }


}