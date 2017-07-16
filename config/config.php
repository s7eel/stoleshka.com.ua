<?php
/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 16.07.17
 * Time: 11:41
 */
function __autoload($class){
    $filename="library/{$class}.php";
    if(file_exists($filename)){
        include_once $filename;
    }
}
$db = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => 'root',
    'name' => 'stoleshka',
);