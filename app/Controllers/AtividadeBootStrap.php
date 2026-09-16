<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AtividadeBootStrap extends BaseController
{
	public function login() { return view('login'); }
	public function profile() { return view('profile'); }
	public function product() { return view('product'); }
}
