<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\Curso;
class ControllerCurso extends Controller{
    public function store(Request $request){
        $feedback = new Feedback();
        $object = json_decode($request->get("cursoJson"));
        $curso = new Curso();
        $curso->Codigo = $request->get("codigo");
        $curso->Nomee = $request->get("nome");
        $curso->Instituicao = $request->get("instituicao");
        $curso->forma = $request->get("forma");
        $curso->Sigla = $request->get("sigla");
        $feedback->success = $aluno->Nome." foi cadastrado no curso ".$object->Curso->Nome;
        return redirect(action('ControllerCurso@index'))->with('feedback', $feedback);
    }
}
