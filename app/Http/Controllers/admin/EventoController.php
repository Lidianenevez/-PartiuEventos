<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;
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
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.novo_evento');
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
			'preco' => 'required|numeric',
			'cidade' => 'required',
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
		$e->save();
		return redirect()
					->route('home')
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
		//
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
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
