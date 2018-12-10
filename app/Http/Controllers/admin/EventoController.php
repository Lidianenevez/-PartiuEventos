<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Evento;
use App\DateTime;
use App\Categoria;
use Auth;

class EventoController extends Controller
{
	/**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$eventos = Evento::where('fk_user_id',Auth::id())->get();
		return view('admin.evento',compact('eventos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$categoria = Categoria::all();
		return view('admin.novo_evento', compact('categoria'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$validatedData = $request->validate([
			'descricao' => 'required',
			'nome_evento' => 'required|max:191',
			'categoria' => 'required',
			'cidade' => 'required',
			'data' => 'required',
			'hora' => 'required',
			'imagem' => 'image|dimensions:max_width=1000,max_height=1000',
		]);
		$e = new Evento;
		$e->fk_user_id = Auth::id();
		$e->descricao = $request->descricao;
		$e->nome_evento = $request->nome_evento;
		$e->fk_categoria_id = $request->categoria;
		$e->preco = $request->preco;
		$e->cidade = $request->cidade;
		if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
			$extention = $request->file('imagem')->extension();
			$nameImage = Auth::id().'_'.date("Ymd_His").'.'.$extention;
			$e->imagem = $nameImage;
			$upload = $request->file('imagem')->storeAs('posts/'.Auth::id(), $nameImage);
			if (!$upload)
				return redirect()
								->back()
									->with('msg_danger','Falha ao fazer o upload da imagem!');
		}
		$dt = new DateTime;
		$dt->data_inicio = $request->data;
		$dt->data_final = $request->data_final;
		$dt->hora_inicio = $request->hora;
		$dt->hora_final = $request->hora_final;
		$dt->carga_horaria = $request->carga_horaria;
		$dt->save();
		$e->fk_datetime_id = $dt->id;
		$e->save();
		return redirect()
					->route('evento.index')
						->with('msg_success','Você criou um evento com sucesso!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$e = Evento::find($id);
		$categoria = Categoria::all();
		return view('admin.editar_evento', compact('e', 'categoria'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$validatedData = $request->validate([
			'descricao' => 'required',
			'nome_evento' => 'required|max:191',
			'categoria' => 'required',
			'cidade' => 'required',
			'data' => 'required',
			'hora' => 'required',
		]);
		$e = Evento::find($id);
		$e->nome_evento = $request->nome_evento;
		$e->descricao = $request->descricao;
		if($request->imagem){
			$extention = $request->file('imagem')->extension();
			$nomeantigo = explode('.',$e->imagem);
			$nameImage = $nomeantigo[0].'.'.$extention;
			$request->file('imagem')->storeAs('posts/'.Auth::id(), $nameImage);
			$e->imagem = $nameImage;
		}
		$e->cidade = $request->cidade;
		$e->preco = $request->preco;
		$e->fk_categoria_id = $request->categoria;
		if($e->fk_user_id == Auth::id()){
			$dt = DateTime::find($e->fk_datetime_id);
			$dt->data_inicio = $request->data;
			$dt->data_final = $request->data_final;
			$dt->hora_inicio = $request->hora;
			$dt->hora_final = $request->hora_final;
			$dt->carga_horaria = $request->carga_horaria;
			$dt->save();
			$e->save();
			return redirect()->route('evento.index')
							->with('msg_success','Você atualizou o seu evento!');	
		}
		return redirect()->route('evento.index')
							->with('msg_danger','Você não tem permissão para atualizar este evento!');	
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$e = Evento::find($id);
		if($e->fk_user_id == Auth::id()){
			$e->delete();
			return redirect()->route('evento.index')
							->with('msg_success','Você excluiu o seu evento!');	
		}
		return redirect()->route('evento.index')
					->with('msg_danger','Você não tem permissão para excluir este evento! Denucie o evento para a admininstração do sistema.');
	}
}