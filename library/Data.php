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