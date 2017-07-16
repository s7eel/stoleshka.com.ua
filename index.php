<?php
/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 16.07.17
 * Time: 12:48
 */
ini_set('display_errors','1');
include_once $_SERVER['DOCUMENT_ROOT'].'/'.'config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/'.'config/configClasses.php';

$action = filter_input(INPUT_GET, 'page');
if(!$action){
    $action = 'mainpage';
}
if(!method_exists($action_object, $action)){
    $action='errorPage';
}
$action_object->$action();
