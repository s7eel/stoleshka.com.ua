<?php
/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 16.07.17
 * Time: 11:41
 */
function __autoload($class){
    $filename=$_SERVER['DOCUMENT_ROOT'].'/'."library/{$class}.php";
    if(file_exists($filename)){
        include_once $filename;
    }
}
$db = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'stoleshka',
);
$template = $_SERVER['DOCUMENT_ROOT'].'/'.'templates/maintemplate.php';
$admintemplate = $_SERVER['DOCUMENT_ROOT'].'/'.'admin/templates/admintemplate.php';