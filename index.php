<?php
require_once("Controller/livres.controller.php");

$bookController = new BookController;

$page = $_SERVER['REQUEST_URI'];

if(empty($page)){
    require "View/accueil.view.php";
} else {
    switch($page){
        case "/accueil" : require "View/accueil.view.php";
        break;
        case "/livres" : $bookController->showBooks();
        break;
    }
}

