<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CarroModel;

class CarroController extends BaseController
{
	protected CarroModel $carro;

	public function __construct()
	{
		$this->carro = new CarroModel();
	}

	public function index()
	{
		$data['listaDeCarros'] = $this->carro->findAll();

		return view('vitrine', $data);
	}

}
