@extends('layouts.main')

@section('content')

<h1> List of Coins</h1>

<p>
    @auth
        {{ auth()->user()->email }}
        <a href="{{route('coins.create')}}">Create Coins</a>
        <a href="{{route('auth.logout')}}">Logout</a>
    @endauth
</p>

<ul>
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
                    <td><a href="{{route('coins.edit', $item->id)}}">Edit</a></td>
                    <td>    
                        <form action="{{route('coins.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                        
                </tr>
            @endforeach
        </tbody>
    </table>
    
    
</ul>

@endsection