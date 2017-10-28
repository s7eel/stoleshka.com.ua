<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
ini_set('display_errors','1');
/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 16.07.17
 * Time: 12:48
 */
include_once $_SERVER['DOCUMENT_ROOT'].'/'.'config/config.php';
//include_once $_SERVER['DOCUMENT_ROOT'].'/'.'config/configClasses.php';
$action_object = new AdminAction($db, $admintemplate);

if (isset($_POST['submit'])) {
    $dataPost = $_POST['submit'];
}else{
    $dataPost = NULL;
}
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}else{
    $user=NULL;
}

if($dataPost!=NULL && $user==NULL){
    $action = 'authUserByNameAndLogin';
    $action_object->$action();
}

if($user==NULL){
    $action = 'authuser';
}else {
    $action = filter_input(INPUT_GET, 'page');
    if (!$action) {
        $action = 'mainpage';
    }
}

if(!method_exists($action_object, $action)){
    $action='errorPage';
}
$action_object->$action();
