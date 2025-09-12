<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/doc.json' => [[['_route' => 'app.swagger', '_controller' => 'nelmio_api_doc.controller.swagger'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_accueil_home', '_controller' => 'App\\Controller\\AccueilController::home'], null, null, null, false, false, null]],
        '/api/booking' => [[['_route' => 'app_booking', '_controller' => 'App\\Controller\\BookingController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/booking/customer' => [[['_route' => 'app_booking_customer', '_controller' => 'App\\Controller\\BookingController::showByCustomer'], null, ['GET' => 0], null, false, false, null]],
        '/category/home' => [[['_route' => 'app_category_home', '_controller' => 'App\\Controller\\CategoryController::homeCategorie'], null, ['GET' => 0], null, false, false, null]],
        '/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['POST' => 0], null, false, false, null]],
        '/dessert' => [[['_route' => 'app_dessert', '_controller' => 'App\\Controller\\DessertController::index'], null, ['GET' => 0], null, false, false, null]],
        '/entree' => [[['_route' => 'app_entree', '_controller' => 'App\\Controller\\EntreeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/food' => [[['_route' => 'app_food_index', '_controller' => 'App\\Controller\\FoodController::index'], null, ['GET' => 0], null, true, false, null]],
        '/food/new' => [[['_route' => 'app_food_new', '_controller' => 'App\\Controller\\FoodController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/plat' => [[['_route' => 'app_plat', '_controller' => 'App\\Controller\\PlatController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/restaurant/list' => [[['_route' => 'app_api_restaurant_all', '_controller' => 'App\\Controller\\RestaurantController::allRestaurant'], null, ['GET' => 0], null, false, false, null]],
        '/api/restaurant' => [[['_route' => 'app_api_restaurant_new', '_controller' => 'App\\Controller\\RestaurantController::new'], null, ['POST' => 0], null, false, false, null]],
        '/api/account/me' => [[['_route' => 'app_api_mon_profile', '_controller' => 'App\\Controller\\SecurityController::me'], null, ['GET' => 0], null, false, false, null]],
        '/api/account/edit' => [[['_route' => 'app_api_edition', '_controller' => 'App\\Controller\\SecurityController::edition'], null, ['PUT' => 0], null, false, false, null]],
        '/api/registration' => [[['_route' => 'app_api_registration', '_controller' => 'App\\Controller\\SecurityController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'app_api_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|booking/(?'
                        .'|new/([^/]++)(*:73)'
                        .'|find/([^/]++)(*:93)'
                        .'|edit/([^/]++)(*:113)'
                        .'|delete/([^/]++)(*:136)'
                    .')'
                    .'|restaurant/([^/]++)(?'
                        .'|(*:167)'
                    .')'
                .')'
                .'|/category/([^/]++)(?'
                    .'|(*:198)'
                .')'
                .'|/dessert/(?'
                    .'|new/([^/]++)(*:231)'
                    .'|find/([^/]++)(*:252)'
                    .'|edit/([^/]++)(*:273)'
                    .'|delete/([^/]++)(*:296)'
                .')'
                .'|/entree/(?'
                    .'|new/([^/]++)(*:328)'
                    .'|show/([^/]++)(*:349)'
                    .'|edit/([^/]++)(*:370)'
                    .'|delete/([^/]++)(*:393)'
                .')'
                .'|/food/([^/]++)(?'
                    .'|(*:419)'
                    .'|/edit(*:432)'
                    .'|(*:440)'
                .')'
                .'|/plat/(?'
                    .'|new/([^/]++)(*:470)'
                    .'|find/([^/]++)(*:491)'
                    .'|edit/([^/]++)(*:512)'
                    .'|delete/([^/]++)(*:535)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        73 => [[['_route' => 'app_booking_new', '_controller' => 'App\\Controller\\BookingController::new'], ['id'], ['POST' => 0], null, false, true, null]],
        93 => [[['_route' => 'app_booking_find', '_controller' => 'App\\Controller\\BookingController::schow'], ['id'], ['GET' => 0], null, false, true, null]],
        113 => [[['_route' => 'app_booking_edit', '_controller' => 'App\\Controller\\BookingController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        136 => [[['_route' => 'app_booking_delete', '_controller' => 'App\\Controller\\BookingController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        167 => [
            [['_route' => 'app_api_restaurant_show', '_controller' => 'App\\Controller\\RestaurantController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_api_restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_api_restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        198 => [
            [['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        231 => [[['_route' => 'app_dessert_new', '_controller' => 'App\\Controller\\DessertController::new'], ['id'], ['POST' => 0], null, false, true, null]],
        252 => [[['_route' => 'app_dessert_show', '_controller' => 'App\\Controller\\DessertController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        273 => [[['_route' => 'app_dessert_edit', '_controller' => 'App\\Controller\\DessertController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        296 => [[['_route' => 'app_dessert_delete', '_controller' => 'App\\Controller\\DessertController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        328 => [[['_route' => 'app_entree_ajouter', '_controller' => 'App\\Controller\\EntreeController::ajouter'], ['id'], ['POST' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_entree_find', '_controller' => 'App\\Controller\\EntreeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        370 => [[['_route' => 'app_entree_edit', '_controller' => 'App\\Controller\\EntreeController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        393 => [[['_route' => 'app_entree_delete', '_controller' => 'App\\Controller\\EntreeController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        419 => [[['_route' => 'app_food_show', '_controller' => 'App\\Controller\\FoodController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        432 => [[['_route' => 'app_food_edit', '_controller' => 'App\\Controller\\FoodController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        440 => [[['_route' => 'app_food_delete', '_controller' => 'App\\Controller\\FoodController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        470 => [[['_route' => 'app_plat_new', '_controller' => 'App\\Controller\\PlatController::new'], ['id'], ['POST' => 0], null, false, true, null]],
        491 => [[['_route' => 'app_plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        512 => [[['_route' => 'app_plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['id'], ['PUT' => 0], null, false, true, null]],
        535 => [
            [['_route' => 'app_plat_show_delete', '_controller' => 'App\\Controller\\PlatController::Delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
