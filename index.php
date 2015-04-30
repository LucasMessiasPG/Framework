<?php

error_reporting(E_ALL);

ini_set('display_erross', 1);

session_start();

require 'config/constantes.php';
require_once 'system/controller.php';
require_once 'system/dispatcher.php';

$dispatcher = new Dispatcher();
$dispatcher->route();
