<?php

namespace App\Controllers;

class CatalogController
{
    public function index() {
        echo "INDEX";
        include __DIR__.'/../../views/main.php';
    }
    public function notFound() {
        echo "Pizda 404";
        include __DIR__.'/../../views/404.php';;
    }
}