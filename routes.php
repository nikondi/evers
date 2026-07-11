<?php

use App\Controllers\AboutController;
use App\Controllers\CatalogController;
use App\Controllers\CoopController;
use App\Controllers\SitemapController;
use App\Controllers\SpecialistsController;
use App\Controllers\WelcomeController;
use Engine\Router;

Router::get('/', WelcomeController::class);
Router::get('/sitemap', SitemapController::class);

Router::get('/about', AboutController::class);
Router::get('/about/manufacture', [AboutController::class, 'manufacture']);
Router::get('/about/develop', [AboutController::class, 'develop']);
Router::get('/about/sellers', [AboutController::class, 'sellers']);

Router::get('/catalog/trademarks', [CatalogController::class, 'trademarks']);

Router::get('/coop/education', [CoopController::class, 'education']);
Router::get('/coop/contract', [CoopController::class, 'contract']);
Router::get('/coop/brandbook', [CoopController::class, 'brandbook']);

Router::get('/specialists/partners', [SpecialistsController::class, 'partners']);
