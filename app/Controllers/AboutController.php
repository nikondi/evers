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
}