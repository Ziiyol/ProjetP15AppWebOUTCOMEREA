<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/base/selection' => [
            [['_route' => 'base_selection', '_controller' => 'App\\Controller\\BaseSelectionController::index'], null, null, null, false, false, null],
            [['_route' => 'first_page', '_controller' => ['App\\Controller\\SimpleRouteController', 'index']], null, ['POST' => 0], null, false, false, null],
        ],
        '/evo/data' => [
            [['_route' => 'evo_data', '_controller' => 'App\\Controller\\EvoDataController::index'], null, null, null, false, false, null],
            [['_route' => 'evoData_page', '_controller' => ['App\\Controller\\SimpleRouteController', 'index']], null, ['POST' => 0], null, false, false, null],
        ],
        '/init/data' => [
            [['_route' => 'init_data', '_controller' => 'App\\Controller\\InitDataController::index'], null, null, null, false, false, null],
            [['_route' => 'initData_page', '_controller' => ['App\\Controller\\SimpleRouteController', 'index']], null, ['POST' => 0], null, false, false, null],
        ],
        '/init/graph' => [
            [['_route' => 'init_graph', '_controller' => 'App\\Controller\\InitGraphController::index'], null, null, null, false, false, null],
            [['_route' => 'initGraph_page', '_controller' => ['App\\Controller\\SimpleRouteController', 'index']], null, ['POST' => 0], null, false, false, null],
        ],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/administrateur' => [[['_route' => 'security_account', '_controller' => 'App\\Controller\\SecurityController::ajouterCompte'], null, null, null, false, false, null]],
        '/modifier-motdepasse' => [[['_route' => 'app_remove_password', '_controller' => 'App\\Controller\\SecurityController::reinitaliserMotdepasse'], null, null, null, false, false, null]],
        '/administrateur/utilisateurs' => [[['_route' => 'listeUsers', '_controller' => 'App\\Controller\\SecurityController::usersList'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/evo/graph' => [[['_route' => 'evoPage_page', '_controller' => ['App\\Controller\\SimpleRouteController', 'index']], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/evo/graph/([^/]++)(*:188)'
                .'|/password\\-account/([^/]++)(*:223)'
                .'|/reset\\-pass/([^/]++)(*:252)'
                .'|/administrateur/utilisateurs/(?'
                    .'|modifier/([^/]++)(*:309)'
                    .'|supprimer/([^/]++)(*:335)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        188 => [[['_route' => 'evo_graph', '_controller' => 'App\\Controller\\EvoGraphController::index'], ['idPat'], null, null, false, true, null]],
        223 => [[['_route' => 'app_choose_password', '_controller' => 'App\\Controller\\SecurityController::choosePassword'], ['token'], null, null, false, true, null]],
        252 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        309 => [[['_route' => 'listUsers', '_controller' => 'App\\Controller\\SecurityController::editUser'], ['id'], null, null, false, true, null]],
        335 => [
            [['_route' => 'deleteusers', '_controller' => 'App\\Controller\\SecurityController::deleteUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
