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
            /* instrução de busca sem utilizar o Scout */
            //$cursos = Cursos::where('nome', 'like', '%'.$str.'%')->
            //                  orwhere('descricao', 'like', '%'.$str.'%')->
            //                  orwhere('author', 'like', '%'.$str.'%')->get();

            /* instrução de busca utilizando o Scout */
            $cursos = Cursos::search($str)->get();

        } else {
            $cursos = Cursos::all();
        }

        return view('cursos.index', compact('cursos', 'str'));
    }
}
