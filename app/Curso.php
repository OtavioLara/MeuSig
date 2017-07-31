<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "CURSO";
    public $timestamps = false;
    public static function getCurso($matricula){
        Aluno::find($matricula);
    }
}
