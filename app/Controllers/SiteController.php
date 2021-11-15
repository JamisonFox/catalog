<?php

namespace App\Controllers;

class SiteController
{
public function index() {
    echo "SITEINDEX";
    include __DIR__.'/../../views/main.php';
}
public function notFound() {
    echo "Pizda 404";
    include __DIR__.'/../../views/404.php';
}
}