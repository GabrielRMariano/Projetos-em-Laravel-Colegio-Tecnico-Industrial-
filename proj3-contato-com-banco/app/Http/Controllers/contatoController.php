<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class contatoController extends Controller
{
    //
    public function index(Request $req)
    {
        $dados = $req->all();

        Contato::create($dados);

        $contatos = Contato::all();

        return view('contatos.index', compact('contatos'));
    }
}