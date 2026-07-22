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

    public function success()
    {
        return $this->render("pages/cart_success", [
            'title' => 'Спасибо за заказ!'
        ]);
    }
}