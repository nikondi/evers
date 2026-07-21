<?php

use App\Controllers\AboutController;
use App\Controllers\CatalogController;
use App\Controllers\ContactsController;
use App\Controllers\CoopController;
use App\Controllers\SitemapController;
use App\Controllers\SpecialistsController;
use App\Controllers\WelcomeController;
use Engine\Router;

Router::get('/', WelcomeController::class);
Router::get('/contacts', ContactsController::class);
Router::get('/sitemap', SitemapController::class);

Router::get('/about', AboutController::class);
Router::get('/about/manufacture', [AboutController::class, 'manufacture']);
Router::get('/about/develop', [AboutController::class, 'develop']);
Router::get('/about/sellers', [AboutController::class, 'sellers']);
Router::get('/about/news', [AboutController::class, 'news']);
Router::get('/about/smi', [AboutController::class, 'smi']);
Router::get('/about/requisites', [AboutController::class, 'requisites']);
Router::get('/about/career', [AboutController::class, 'career']);

Router::get('/catalog/', [CatalogController::class, 'index']);
Router::get('/catalog/trademarks', [CatalogController::class, 'trademarks']);
Router::get('/catalog/product', [CatalogController::class, 'product']);
Router::get('/catalog/favorites', [CatalogController::class, 'favorites']);

Router::get('/coop/education', [CoopController::class, 'education']);
Router::get('/coop/contract', [CoopController::class, 'contract']);
Router::get('/coop/brandbook', [CoopController::class, 'brandbook']);
Router::get('/coop/wholesale', [CoopController::class, 'wholesale']);
Router::get('/coop/reviews', [CoopController::class, 'reviews']);
Router::get('/coop/request', [CoopController::class, 'request']);

Router::get('/specialists/partners', [SpecialistsController::class, 'partners']);
Router::get('/specialists/articles', [SpecialistsController::class, 'articles']);
Router::get('/specialists/publications', [SpecialistsController::class, 'publications']);
