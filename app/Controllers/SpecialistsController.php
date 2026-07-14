<?php

namespace App\Controllers;

class SpecialistsController extends Controller
{
    public function partners()
    {
        return $this->render('pages/specialists/partners', [
            'title' => 'Наши партнерские организации'
        ]);
    }

    public function articles()
    {
        return $this->render('pages/specialists/articles', [
            'title' => 'Полезные материалы и статьи'
        ]);
    }

    public function publications()
    {
        return $this->render('pages/specialists/publications', [
            'title' => 'Полезные материалы и статьи'
        ]);
    }
}
