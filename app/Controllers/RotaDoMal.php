<?php

namespace App\Controllers;

class RodaDoMal extends BaseController
{
    public function index(): string
    {
        return view('maldade');
    }
}
