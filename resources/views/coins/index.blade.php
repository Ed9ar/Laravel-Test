@extends('layouts.main')

@section('content')
<h1>List of coins</h1>

</br>
<button><a href="{{ route('auth.login') }}">Login</a></button>
</br>
<button><a href="{{ route('auth.register') }}">Registro</a></button>
</br>

<p>
    @auth
        {{ auth()->user()->email }}
        <a href="{{ route('coins.create') }}">Create a coin</a>
        <a href="{{ route('auth.logout') }}">Logout</a>
        </br>
        <button><a href="{{route('dashboard')}}">Dashboard</a></button>
        </br>

        <button><a href="{{route('auth.show')}}">Lista de usuarios</a></button>    
    @endauth
</p>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Short name</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($coins as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->short_name }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="{{ route('coins.show', ['coin' => $item]) }}">
                        Show
                    </a> |
                    <a href="{{ route('coins.edit', ['coin' => $item]) }}">
                        Update
                    </a>
                    <form action="{{ route('coins.destroy', ['coin' => $item]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
