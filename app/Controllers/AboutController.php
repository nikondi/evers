<?php

namespace App\Controllers;

class AboutController extends Controller
{
    public function __invoke()
    {
        return $this->render("pages/about", [
            'title' => 'О компании'
        ]);
    }

    public function manufacture(): string
    {
        return $this->render("pages/about/manufacture", [
            'title' => 'Производство'
        ]);
    }

    public function develop(): string
    {
        return $this->render("pages/about/develop", [
            'title' => 'Отдел исследований и разработок (R&D)'
        ]);
    }

    public function sellers(): string
    {
        return $this->render("pages/about/sellers", [
            'title' => 'Где купить'
        ]);
    }

    public function news(): string
    {
        return $this->render("pages/about/news", [
            'title' => 'Новости и мероприятия'
        ]);
    }
}