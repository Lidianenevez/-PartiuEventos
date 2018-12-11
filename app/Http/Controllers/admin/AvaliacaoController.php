<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AvaliacaoController extends Controller
{
    public function avaliar(Request $request, $id)
    {
        dd($id);
    }
}