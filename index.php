<?php
include_once 'Controllers/EditorialesController.php';
include_once 'Controllers/IndexController.php';

$url= $_SERVER['REQUEST_URI'];
$slices=explode('/',$url);
$controller=empty($slices[4])?"IndexController":$slices[4]."Controller";
$method=empty($slices[5])?"index":$slices[5];
$params=empty($slices[6])?[]:array_slice($slices,6);

$cont= new $controller;
$cont->$method($params);