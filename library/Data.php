<?php

/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 19.07.17
 * Time: 19:28
 */
class Data extends MainStorage
{
    public function getDataCoefficients()
    {
        $query = "SELECT * FROM data";
        if ($result = parent::arrayRes($query)) {
            return $result;
        } else {
            return false;
        }
    }
    public function getDataFromForm($request)
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
        $result_array = array($chamferRemovingPrice, $complexRadiusPrice, $coveringPreparationPrice, $packagingPrice, $discount,
            $waterproof, $notWaterproof, $polish, $polishWithColor, $noCovering, $ash, $oak, $glued, $spliced, $gauge20, $gauge30, $gauge40);
        return $result_array;
    }
    public function updateDataCoefficients(array $arr)
    {
        $query = "UPDATE data SET 
chamferRemovingPrice='$arr[0]',
 complexRadiusPrice='$arr[1]',
  coveringPreparationPrice='$arr[2]',
   packagingPrice='$arr[3]',
    discount='$arr[4]',
     waterproof='$arr[5]',
      notWaterproof='$arr[6]',
       polish='$arr[7]',
        polishWithColor='$arr[8]',
         noCovering='$arr[9]',
          ash='$arr[10]',
           oak='$arr[11]',
            glued='$arr[12]',
             spliced='$arr[13]',
              gauge20='$arr[14]',
               gauge30='$arr[15]',
                gauge40='$arr[16]'";
        if($result = parent::saveDB($query)){
            return TRUE;
        }
        return FALSE;
    }
    public function changeComaToDot($data)
    {
        $data = str_replace(',','.',$data);
            return $data;
    }

}