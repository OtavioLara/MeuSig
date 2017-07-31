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
</head>
<body>
    <h1>Bem Vindo {{Illuminate\Support\Facades\Auth::user()->Nome}}</h1>
    <form method="post" action="{{action('ControllerLogin@deslogar')}}">
        {{ csrf_field() }}
        <button type="submit">Deslogar</button>
    </form>
</body>
</html>
