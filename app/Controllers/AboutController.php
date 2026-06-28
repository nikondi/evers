<?php

namespace App\Controllers;

class AboutController extends Controller
{
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
}