@extends('layouts.index')
@section('content')
<div class="container my-5">

    <form action="/storemembre" method="post" enctype="multipart/form-data">
        @csrf

        <label for="">Nom</label>
        <input type="text" name="nom">

        <label for="">Age</label>
        <input type="number" name="age">

        <label for="">Image</label>
        <input type="file" name="img">

        <label for="">Genre</label>
        <select for="" name="genre_id">
            @foreach ($genres as $genre )
            <option value='{{$genre->id}}'>{{$genre->genre}}</option>
            @endforeach
        </select>

        <button type="submit">Ajouter</button>

    </form>

</div>
@endsection
