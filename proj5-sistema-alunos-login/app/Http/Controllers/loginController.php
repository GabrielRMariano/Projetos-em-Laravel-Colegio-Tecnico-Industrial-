<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function index() { // a visão que pede usuário e senha
        return view('index');
        }
        public function entrar(Request $req) {
        $dados = $req->all();
        If ( Auth::attempt( [ 'email' => $dados['email'], 'password' => $dados['senha'] ] ) ) {
        return redirect()->route('welcome'); // redireciona para a home, mas agora, logado !
        
        } else { // pede usuario e senha novamente
        return redirect()->route('login');
        }
        }
        public function sair() {
        Auth::logout();
        return redirect()->route('welcome');
        }
}