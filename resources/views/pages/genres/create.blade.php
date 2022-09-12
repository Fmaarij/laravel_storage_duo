@extends('layouts.index')
@section('content')
<div class="container my-5">
    <form action="/storegenre" method="post" enctype="multipart/form-data">
        @csrf

        <label for="">Genre</label>
        <input type="text" name="genre">

        <button type="submit">Ajouter</button>
    </form>
</div>
@endsection
