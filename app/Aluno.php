<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Aluno extends Model implements Authenticatable{
    protected $table = "ALUNO";
    public $timestamps = false;
    public static function getAluno($matricula){
        Aluno::find($matricula);
    }
    
    
    //interface methods
    public function getAuthIdentifier() {
        return $this->username;
    }
    public function getAuthIdentifierName() {
        return "username";
    }
    public function getAuthPassword() {
        return $this->password;
    }
    
    public function getRememberToken() {
        
    }
    public function getRememberTokenName() {
        
    }
    public function setRememberToken($value) {
        
    }
}
