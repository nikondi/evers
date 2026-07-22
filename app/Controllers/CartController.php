<?php

namespace App\Controllers;

class CartController extends Controller
{
    public function __invoke()
    {
        return $this->render("pages/cart", [
            'title' => 'Корзина'
        ]);
    }
}