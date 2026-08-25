<?php

namespace App\Controllers;

class Balls extends BaseController
{
    public function index(): string
    {
        return view('good_ball');
    }
}
