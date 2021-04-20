@extends('layouts.main')

@section('content')
<h1>Create your coin</h1>


<form action="{{route('coins.store')}}" method = "POST">
    @csrf
    <div>
        <label for="">Short Name</label>
        <input type="text" name='short_name'>
    </div>
    <input type = 'submit' value = 'Submit'>
</form>

@endsection