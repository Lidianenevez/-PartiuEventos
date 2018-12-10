<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;
use App\Categoria;

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
		$categoria = Categoria::all();
		return view('site.evento', compact('evento', 'categoria'));
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
			
		]);
		if ($request->data) {
			$evento = Evento::orWhere('cidade', $request->cidade)
			->join('datetime_eventos', function ($join) {
				$join->on('datetime_eventos.id', '=', 'evento.fk_datetime_id')
				->orWhere('data_inicio', $request->data);
			})
			->orWhere('fk_categoria_id', $request->categoria)
			->orWhere('nome_evento', 'like', '%'.$request->nome_evento.'%')->get();
		}
		elseif ($request->hora) {
			$evento = Evento::orWhere('cidade', $request->cidade)
			->join('datetime_eventos', function ($join) {
				$join->on('datetime_eventos.id', '=', 'evento.fk_datetime_id')
				->orWhere('hora_inicio', $request->hora);
			})
			->orWhere('fk_categoria_id', $request->categoria)
			->orWhere('nome_evento', 'like', '%'.$request->nome_evento.'%')->get();
		}
		elseif ($request->nome_evento) {
			$evento = Evento::where('nome_evento', 'like', '%'.$request->nome_evento.'%')->get();
		}
		else {
			$evento = Evento::orWhere('cidade', $request->cidade)
			->orWhere('fk_categoria_id', $request->categoria)->get();
		}
		$e = $evento->count();
		if($e) {
			$categoria = Categoria::all();
			return view('site.evento', compact('evento', 'categoria'));
		}
		return redirect()->route('evento')
											->withInput()
											->with(['msg_danger' => 'Nenhum evento encontrado!']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$e = Evento::find($id);
		return view('site.mostrar_evento', compact('e'));
	}
}