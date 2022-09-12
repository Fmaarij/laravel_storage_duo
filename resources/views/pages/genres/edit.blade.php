@extends('layouts.index')
@section('content')
    <div class="container my-5">

        <form action="/{{$genre->id}}/update" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="">Genre</label>
            <input type="text" name="genre" value="{{$genre->genre}}">

            <button type="submit">Update</button>
        </form>

    </div>
@endsection
