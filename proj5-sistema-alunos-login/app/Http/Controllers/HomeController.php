<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $rows = Curso::where('publicado','sim')->get();
        return view('welcome', compact('rows'));
    }
}