<?php

namespace App\Controllers;

class SitemapController extends Controller
{
    protected string $layout = 'no-layout';

    public function __invoke()
    {
        return $this->render('pages/sitemap');
    }
}
