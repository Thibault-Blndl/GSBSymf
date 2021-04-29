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
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'logged', '_controller' => 'App\\Controller\\AccueilController::logged'], null, null, null, false, false, null]],
        '/fichefrais' => [[['_route' => 'fiche_frais_index', '_controller' => 'App\\Controller\\FicheFraisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/fichefrais/new' => [[['_route' => 'fiche_frais_new', '_controller' => 'App\\Controller\\FicheFraisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/frais/forfait' => [[['_route' => 'frais_forfait_index', '_controller' => 'App\\Controller\\FraisForfaitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/frais/forfait/new' => [[['_route' => 'frais_forfait_new', '_controller' => 'App\\Controller\\FraisForfaitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lignefrais/new' => [[['_route' => 'ligne_frais_new', '_controller' => 'App\\Controller\\LigneFraisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reseau' => [[['_route' => 'reseau', '_controller' => 'App\\Controller\\ReseauController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/si' => [[['_route' => 'si', '_controller' => 'App\\Controller\\SiController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/f(?'
                    .'|ichefrais/([^/]++)(?'
                        .'|(*:195)'
                        .'|/edit(*:208)'
                        .'|(*:216)'
                    .')'
                    .'|rais/forfait/(?'
                        .'|([^/]++)(?'
                            .'|(*:252)'
                            .'|/edit(*:265)'
                        .')'
                        .'|edit/([^/]++)(*:287)'
                        .'|([^/]++)(*:303)'
                    .')'
                .')'
                .'|/lignefrais/edit/([^/]++)(*:338)'
                .'|/user/([^/]++)(?'
                    .'|(*:363)'
                    .'|/edit(?:/([^/]++))?(*:390)'
                    .'|(*:398)'
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
        195 => [[['_route' => 'fiche_frais_show', '_controller' => 'App\\Controller\\FicheFraisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        208 => [[['_route' => 'fiche_frais_edit', '_controller' => 'App\\Controller\\FicheFraisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        216 => [[['_route' => 'fiche_frais_delete', '_controller' => 'App\\Controller\\FicheFraisController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        252 => [[['_route' => 'frais_forfait_show', '_controller' => 'App\\Controller\\FraisForfaitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        265 => [[['_route' => 'frais_forfait_edit', '_controller' => 'App\\Controller\\FraisForfaitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        287 => [[['_route' => 'ligne_frais_forfait_edit', '_controller' => 'App\\Controller\\FraisForfaitController::editAll'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        303 => [[['_route' => 'frais_forfait_delete', '_controller' => 'App\\Controller\\FraisForfaitController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        338 => [[['_route' => 'ligne_frais_edit', '_controller' => 'App\\Controller\\LigneFraisController::editAll'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        363 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        390 => [[['_route' => 'user_edit', 'pwd' => null, '_controller' => 'App\\Controller\\UserController::edit'], ['id', 'pwd'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        398 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
