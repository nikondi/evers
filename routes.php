<?php

use App\Controllers\AboutController;
use App\Controllers\CatalogController;
use App\Controllers\WelcomeController;
use App\Router;

Router::get('/', WelcomeController::class);

Router::get('/about/manufacture', [AboutController::class, 'manufacture']);

Router::get('/catalog/trademarks', [CatalogController::class, 'trademarks']);