<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Avaliacao;

class AvaliacaoController extends Controller
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
	public function avaliar(Request $request, $id)
	{
		$av = Avaliacao::where('fk_evento_id',$id)
											->where('fk_user_id',Auth::id())
												->get();
		if (count($av) < 1) {
			$a = new Avaliacao;
			$a->fk_user_id = Auth::id();
			$a->fk_evento_id = $id;
			$a->feedback;
			$a->estrela = $request->estrela;
			$a->save();
			return redirect()->back()
												->with('msg_success','Obrigado por avaliar o evento!');
		}
		return redirect()->back()
											->with('msg_success','Voce ja avaliou antes este evento!');
	}
}