<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;

class EventoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$evento = Evento::all();
		return view('site.evento', compact('evento'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function busca(Request $request)
	{
		$validatedData = $request->validate([
			'nome_evento' => 'required',
			'cidade' => 'required',
		]);
		$evento = Evento::where('cidade', $request->cidade)
										->where('nome_evento', 'like', '%'.$request->nome_evento.'%')->get();
		$e = $evento->count();
		if($e) {
			return view('site.evento', compact('evento'));
		}
		return redirect()->back()
							->with(['msg_danger' => 'Nenhum evento encontrado!']);
	}
}