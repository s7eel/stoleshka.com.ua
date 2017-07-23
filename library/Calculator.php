<?php
/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 23.07.17
 * Time: 12:38
 */

class Calculator extends MainStorage
{

    public function switchItemName($name)
    {
        switch ($name) {
            case'tabletop':
                return 'Столешница';
            case'steps':
                return 'Ступени';
            case'windowsill':
                return 'Подоконник';
            case'frontFacade':
                return 'Фасад прямой';
            case'furnitureBoard':
                return 'Мебельный щит';
            default:
                return 'Неопознанный объект';
        }
    }

    public function switchWoodBreed($name)
    {
        switch ($name) {
            case'ash':
                return 'Ясень';
            case'oak':
                return 'Дуб';
            default:
                return 'Неопознанное дерево';
        }
    }

    public function switchBondingType($name)
    {
        switch ($name) {
            case'glued':
                return 'Клеенный массив';
            case'spliced':
                return 'Срощенный массив';
            default:
                return 'Неопознанный вид массива';
        }
    }

    public function switchGlueType($name)
    {
        switch ($name) {
            case'waterproof':
                return 'Влагостойкий';
            case'notWaterproof':
                return 'Не влагостойкий';
            default:
                return 'Неопознанный вид клея';
        }
    }

    public function switchCoveringType($name)
    {
        switch ($name) {
            case'polish':
                return 'Лак';
            case'polishWithColor':
                return 'Лак + Тон';
            case'noCovering':
                return 'Без покрытия';
            default:
                return 'Неопознанный вид покрытия';
        }
    }
    public function switchPackaging()
    {
        return 'Упаковка';
    }
    public function switchToningColor($name)
    {
        switch ($name) {
            case'white':
                return 'Белый';
            case'light':
                return 'Светлый';
            case'dark':
                return 'Темный';
            default:
                return 'Неопознанный тон';
        }
    }
}





















