<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

class LibroController extends Controller
{
    public function index(){
        $libri = Libro::all();
        dd($libri);
        return view('home');
    }
}
