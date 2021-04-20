@extends('layouts.main')

@section('content')

<h1>Edit your coin</h1>

<form action="{{route('coins.update', $coin -> id)}}" method = "POST">
    @csrf
    @method('PUT')
    <div>
        <label for="">Short Name</label>
        <input type="text" name='short_name'>
    </div>
    <input type = 'submit' value = 'Submit'>
</form>

@endsection