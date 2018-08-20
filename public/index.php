<?php
namespace PHPMVC;
use PHPMVC\LIB\FrontController;

require_once '..'.DIRECTORY_SEPARATOR. 'app'. DIRECTORY_SEPARATOR . 'config.php';
require_once '..'.DIRECTORY_SEPARATOR. 'app'. DIRECTORY_SEPARATOR .'lib'. DIRECTORY_SEPARATOR.'autoload.php';
//require_once '..'.DIRECTORY_SEPARATOR. 'app'. DIRECTORY_SEPARATOR .'controllers'. DIRECTORY_SEPARATOR.'indexcontroller.php';

//require_once '..'.DIRECTORY_SEPARATOR. 'app'. DIRECTORY_SEPARATOR .'lib'. DIRECTORY_SEPARATOR.'frontcontroller.php';
session_start();
$frontcontroller = new FrontController();
$frontcontroller->dispatch();