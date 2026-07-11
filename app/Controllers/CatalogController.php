<?php

namespace App\Controllers;

class CatalogController extends Controller
{
    public function trademarks(): string
    {
        return $this->render("pages/catalog/trademarks", [
            'title' => 'Наши торговые марки'
        ]);
    }
    public function product(): string
    {
        return $this->render("pages/catalog/product", [
            'title' => 'Хитокол®-ДА'
        ]);
    }
}