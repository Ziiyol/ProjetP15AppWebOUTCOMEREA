<?php
// config/routes.php
    use App\Controller\SimpleRouteController;
    use App\Controller\SelectGroupeController;
    use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

    return function (RoutingConfigurator $routes){
        $routes -> add('first_page', '/base/selection')->controller([SimpleRouteController::class ,'index'])->methods(['POST']);
        $routes -> add('initData_page', '/init/data')->controller([SimpleRouteController::class ,'index'])->methods(['POST']);
        $routes -> add('evoData_page', '/evo/data')->controller([SimpleRouteController::class ,'index'])->methods(['POST']);
        $routes -> add('initGraph_page', '/init/graph')->controller([SimpleRouteController::class ,'index'])->methods(['POST']);
        $routes -> add('evoPage_page', '/evo/graph')->controller([SimpleRouteController::class ,'index'])->methods(['POST']);
    };

