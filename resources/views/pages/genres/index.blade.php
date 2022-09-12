@extends('layouts.index')
@section('content')
<div class="container my-5">

    <table class="table table-striped table-bordered table-hover" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Genre</th>
                <th>Show</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genre as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->genre}}</td>
                <td>
                    <a href="/show/{{$item->id}}">
                    <button class="btn btn-outline-success">Show</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection
