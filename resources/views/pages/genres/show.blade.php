@extends('layouts.index')
@section('content')
<div class="container my-5">
    <table class="table table-striped table-bordered table-hover" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Genre</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($genre as $item) --}}
            <tr>
                <td>{{$genre->id}}</td>
                <td>{{$genre->genre}}</td>
                <td>
                    <a href="/edit/{{$genre->id}}">
                    <button class="btn btn-outline-warning">Edit</button>
                    </a>
                </td>
            </tr>
            {{-- @endforeach --}}
        </tbody>

    </table>

</div>
@endsection
