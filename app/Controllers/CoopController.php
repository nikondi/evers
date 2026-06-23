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
}