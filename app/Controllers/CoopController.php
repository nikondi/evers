<?php

namespace App\Controllers;

class CoopController extends Controller
{
    public function education(): string
    {
        return $this->render("pages/coop/education", [
            'title' => 'Обучение для оптовых партнеров'
        ]);
    }

    public function contract(): string
    {
        return $this->render("pages/coop/contract", [
            'title' => 'Контрактное производство'
        ]);
    }

    public function brandbook()
    {
        return $this->render("pages/coop/brandbook", [
            'title' => 'Брендбук'
        ]);
    }
}