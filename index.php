<?php

use Core\Router\Router;
session_start();
require_once __DIR__ . "/vendor/autoload.php";

$router = new Router("http://localhost/sistema_de_votos");
$router->namespace('App\Controllers');
$router->group(null);

$router->get("/", "Home:index");
$router->post("/home", "Home:create");
$router->get("/result", "Home:listResult");


$router->dispatch();
