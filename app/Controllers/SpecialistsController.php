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
}
