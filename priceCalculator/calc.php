<?php
header('Content-type:application/json');
/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 17.07.17
 * Time: 14:58
 */
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

//$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
echo json_encode($arr);

//itemName:windowsill
//woodBreed:ash
//bondingType:glued
//gauge:20
//glueType:waterproof
//detailsNumber:111
//length:111
//width:111
//chamferRemoving:1
//complexRadius:1
//coveringPreparation:1
//covering:polish
//toningColor:wenge
//discount:on
//packaging:1