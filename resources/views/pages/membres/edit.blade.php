@extends('layouts.index')
@section('content')
    <div class="container my-5">

        <form action="/{{ $membres->id }}/updatemembre" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="">Nom</label>
            <input type="text" name="nom" value="{{ $membres->nom }}">

            <label for="">Age</label>
            <input type="number" name="age" value="{{ $membres->age }}">

            <label for="">Image</label>
            <input type="file" name="img">
            <img width="15%" class="rounded-pill" src="{{ asset('storage/img/' . $membres->img) }}" alt="picture">

            <label for="">Genre</label>

            <select for="" name="genre_id">
                <option  value='{{ $membres->genre->id }}'>{{ $membres->genre->genre }}</option>
                @foreach ($genres as $genre)
                    @if ($genre->id != $membres->genre_id)
                        {

                        <option value='{{ $genre->id }}'>{{ $genre->genre }}</option>
                        }
                    @endif
                @endforeach
            </select>
            <button class="btn btn-outline-primary" type="submit">Update</button>

        </form>

    </div>
@endsection
