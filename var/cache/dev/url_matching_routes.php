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
        '/adresse/livraison' => [[['_route' => 'adresse_livraison_index', '_controller' => 'App\\Controller\\AdresseLivraisonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/adresse/livraison/new' => [[['_route' => 'adresse_livraison_new', '_controller' => 'App\\Controller\\AdresseLivraisonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client' => [[['_route' => 'client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/new' => [[['_route' => 'client_new', '_controller' => 'App\\Controller\\ClientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'landing_page', '_controller' => 'App\\Controller\\LandingPageController::index'], null, null, null, false, false, null]],
        '/confirmation' => [[['_route' => 'confirmation', '_controller' => 'App\\Controller\\LandingPageController::confirmation'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/new' => [[['_route' => 'produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/adresse/livraison/([^/]++)(?'
                    .'|(*:198)'
                    .'|/edit(*:211)'
                    .'|(*:219)'
                .')'
                .'|/client/([^/]++)(?'
                    .'|(*:247)'
                    .'|/edit(*:260)'
                    .'|(*:268)'
                .')'
                .'|/stripe/([^/]++)(*:293)'
                .'|/p(?'
                    .'|aypal/([^/]++)(*:320)'
                    .'|roduit/([^/]++)(?'
                        .'|(*:346)'
                        .'|/edit(*:359)'
                        .'|(*:367)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        198 => [[['_route' => 'adresse_livraison_show', '_controller' => 'App\\Controller\\AdresseLivraisonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        211 => [[['_route' => 'adresse_livraison_edit', '_controller' => 'App\\Controller\\AdresseLivraisonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        219 => [[['_route' => 'adresse_livraison_delete', '_controller' => 'App\\Controller\\AdresseLivraisonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        247 => [[['_route' => 'client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        260 => [[['_route' => 'client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        268 => [[['_route' => 'client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        293 => [[['_route' => 'stripe', '_controller' => 'App\\Controller\\LandingPageController::stripe'], ['id'], null, null, false, true, null]],
        320 => [[['_route' => 'paypal', '_controller' => 'App\\Controller\\LandingPageController::paypal'], ['id'], null, null, false, true, null]],
        346 => [[['_route' => 'produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        359 => [[['_route' => 'produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        367 => [
            [['_route' => 'produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
