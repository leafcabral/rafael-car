<?php

namespace App\Controllers;

class RotaLegal extends BaseController
{
    public function index(): string
    {
        return view('legal');
    }
}
