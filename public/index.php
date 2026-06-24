<?php

use Engine\Router;

require_once __DIR__ . '/../vendor/autoload.php';

include BASE_PATH . '/routes.php';

echo Router::handle();
