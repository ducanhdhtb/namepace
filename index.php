<?php
namespace index;
require_once('autoload.php');
use App\Controller as MyController;
$controller = new MyController\IndexController();
$controller->create();