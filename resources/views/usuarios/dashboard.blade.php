<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>DASHBOARD</h1>
    @if (Auth::check())
        @auth
            <h4>
                <a href="{{route('auth.show')}}">{{ auth()->user()->name}}</a>
                <button><a href="{{route('auth.logout')}}">Logout</a></button>
                </br>
                <button><a href="{{route('coins.index')}}">Menu</a></button>
                <button><a href="{{route('auth.show')}}">Lista de usuarios</a></button>
            </h4>


        @endauth
    @else
        <button><a href="{{route('auth.login')}}">Login</a></button>
        <button><a href="{{route('auth.register')}}">Registro</a></button>

    @endif

    
</body>
</html>
