<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 11/04/19
 * Time: 09:51
 */
include_once "ArrayList.php";

$arrList = new ArrayList();
$arrList->add(1);
$arrList->add(2);
$arrList->add(3);

echo $arrList->get(-1);