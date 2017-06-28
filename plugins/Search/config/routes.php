<?php
use Cake\Routing\Router;

Router::plugin(
    'Search',
    ['path' => '/search'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);
