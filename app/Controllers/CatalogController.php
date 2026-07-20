<?php

namespace App\Controllers;

class CatalogController extends Controller
{
    public function index(): string
    {
        return $this->render("pages/catalog/index", [
            'title' => 'Страница каталога'
        ]);
    }

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