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

    public function smi(): string
    {
        return $this->render("pages/about/smi", [
            'title' => 'СМИ о нас'
        ]);
    }

    public function requisites(): string
    {
        return $this->render("pages/about/requisites", [
            'title' => 'Реквизиты'
        ]);
    }

    public function career(): string
    {
        return $this->render("pages/about/career", [
            'title' => 'Карьера'
        ]);
    }
}