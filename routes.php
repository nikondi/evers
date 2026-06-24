<?php

use App\Controllers\AboutController;
use App\Controllers\CatalogController;
use App\Controllers\CoopController;
use App\Controllers\WelcomeController;
use Engine\Router;

Router::get('/', WelcomeController::class);

Router::get('/about/manufacture', [AboutController::class, 'manufacture']);

Router::get('/catalog/trademarks', [CatalogController::class, 'trademarks']);

Router::get('/coop/education', [CoopController::class, 'education']);
Router::get('/coop/contract', [CoopController::class, 'contract']);
