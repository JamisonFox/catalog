<?php
include '../vendor/autoload.php';

//print_r($_SERVER['REQUEST_URI']);
$routes = [
    '/' => 'App\\Controllers\\SiteController@notFound',
    '/catalog' => 'App\\Controllers\\CatalogController@index',
    '/catalog/12' => 'App\\Controllers\\CatalogController@ShowProduct',
];
$runAction = 'App\\Controllers\\CatalogController@notFound';
foreach ($routes as $route => $action) {
    if ($_SERVER['REQUEST_URI'] == $route) {
        $runAction = $action;
        print_r($runAction);
        break;
    }
}

print_r($runAction);
$runAction = explode('@', $runAction);
$controller = new $runAction[0];
$controller->{$runAction[1]}();