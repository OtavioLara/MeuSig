<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="{{URL::asset('js/angular.min.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    <script>
        var app = angular.module('app', []).config(function ($interpolateProvider) {
            $interpolateProvider.startSymbol('@{').endSymbol('}');
        });
        app.controller('controller', ['$scope', function ($scope) {
            
         }]);
    </script>
</head>
<body>
    @if(Illuminate\Support\Facades\Auth::user() !== null)
        {{Illuminate\Support\Facades\Auth::User()}}
    @endif
    <div class="principal">
        <div class="login" ng-app="app"o ng-controller="controller">
            @if(session('loginfail'))
                Usuario ou senha incorretos
            @endif
            
            Login
            <form  action="{{action('ControllerLogin@logar')}}" method="post">
                {{ csrf_field() }}
                <input type="text" name="usuario" placeholder="Usuário" id="username" ng-model="username">
                <input type="password" name="senha" placeholder="Senha" id="pwd" ng-model="senha">
                <input type="submit" value="Logar">
            </form>
                <form method="get" action="{{action('ControllerAluno@create')}}">
                    {{ csrf_field() }}
                    <button type="submit">Cadastrar</button>
                </form>
        </div>
    </div>
</body>
</html>
