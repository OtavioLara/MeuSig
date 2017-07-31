<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cadastrar Aluno</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{URL::asset('js/angular.min.js')}}"></script>
    <script>
        var app = angular.module('myApp', []).config(function ($interpolateProvider) {
            $interpolateProvider.startSymbol('@{').endSymbol('}');
        });
        app.controller('myCtrl', ['$scope', function ($scope) {
                $scope.cursos = JSON.parse('{!!$cursosJson!!}');
                $scope.aluno = {};
                $scope.valida = "";
                $scope.val = function(){
                    if($scope.aluno.password != $scope.vSenha2){
                       $scope.valida = "Senhas devem ser iguais";
                    }
                    else{
                        $scope.valida = "";
                    }
                }
                
            }]);
        
    </script>
</head>
<body>
    <h2>Cadastrar Aluno</h2>
    <div ng-app="myApp" ng-controller="myCtrl">
        @if(session('feedback'))
            @if(session('feedback')->success != null)
                {{session('feedback')->success}}
            @endif
            @if(session('feedback')->alert != null)
                {{session('feedback')->alert}}
            @endif
            @if(session('feedback')->error != null)
                {{session('feedback')->error}}
            @endif
        @endif
        <form action="{{action('ControllerAluno@store')}}" method="post">
            {{ csrf_field() }}
            @{aluno}
            <div>
                <input type="hidden" name="alunoJson" value="@{aluno}" />
                Matricula: <input type="text" ng-model="aluno.Matricula">
                Nome: <input type="text" ng-model="aluno.Nome">
                Cidade: <input type="text" ng-model="aluno.Cidade">
                UF: <input type="text" ng-model="aluno.UF">
                Curso: 
                <hr>
                Nome de usuário: <input type="text" placeholder="Ex: fulanosilva" ng-model="aluno.username">
                @{valida}
                Senha: <input type="password" placeholder="Senha" ng-model="aluno.password">
                Senha: <input type="password" placeholder="Repita a senha" ng-change="val()" ng-model="vSenha2">
                <select ng-model="aluno.Curso">
                    <option ng-repeat = "curso in cursos" ng-value="curso"> @{curso.Nome} - @{curso.Instituicao}</option>
                </select>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>

</body>
</html>
