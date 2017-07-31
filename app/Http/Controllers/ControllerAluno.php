<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Curso;
use Illuminate\Http\Request;
use App\Feedback;
class ControllerAluno extends Controller{
    
    public function create(){
        return view('Aluno', ['cursosJson' => json_encode(Curso::all())]);
    }
    public function store(Request $request){
        $feedback = new Feedback();
        $object = json_decode($request->get("alunoJson"));
        $aluno = new Aluno();
        $aluno->Matricula = $object->Matricula;
        $aluno->Nome = $object->Nome;
        $aluno->Cidade = $object->Cidade;
        $aluno->UF = $object->UF;
        $aluno->Curso = $object->Curso->Codigo;
        $aluno->username = $object->username;
        $aluno->password = $object->password;
        $aluno->save();
        $feedback->success = $aluno->Nome." foi cadastrado no curso ".$object->Curso->Nome;
        return redirect('/')->with('feedback', $feedback);
    }
}

