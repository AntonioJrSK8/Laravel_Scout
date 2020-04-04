<?php

namespace App\Http\Controllers;

use App\Cursos;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(Request $request)
    {
        $str = $request->get('str', "");
        if ($str) {
            $cursos = Cursos::where('name', 'like', `%$str%`)->get();
        } else {
            $cursos = Cursos::all();
        }
        return view('cursos.index', compact('cursos', 'str'));
    }
}
