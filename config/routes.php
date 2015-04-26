<?php
use Cake\Routing\Router;

Router::plugin('RefactoredControllerTheme', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
