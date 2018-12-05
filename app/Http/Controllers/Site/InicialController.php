<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;

class InicialController extends Controller
{
	public function index()
	{
		$evento = Evento::all();
		return view('site.home', compact('evento'));
	}
}
