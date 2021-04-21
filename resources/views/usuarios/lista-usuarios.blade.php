<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Usuarios</title>
</head>
<body>
<h1>lista</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>

                <td>
                    @if (Auth::user()->rol == 'Super')
                        @auth
                            <form action="{{ route('auth.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>

                        @endauth
                    @else


                    @endif


                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<button><a href="{{route('coins.index')}}">Menu</a></button>
<button><a href="{{route('dashboard')}}">Dashboard</a></button>

</body>
</html>
