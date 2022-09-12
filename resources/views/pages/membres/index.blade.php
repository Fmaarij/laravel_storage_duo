@extends('layouts.index')
@section('content')
    <div class="container my-5">
            <table class="table table-striped table-bordered table-hover table-responsiveness tablespoons">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Age</th>
                        <th>Image</th>
                        <th>Genre</th>
                        <th>Show</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($membres as $membre)
                    <tr>
                        <td>{{$membre->id}}</td>
                        <td>{{$membre->nom}}</td>
                        <td>{{$membre->age}}</td>
                        <td width="10%">
                            <img width="100%" class="rounded-pill" src="{{asset('storage/img/' .$membre->img)}}" alt="picture">
                        </td>
                        <td>{{$membre->genre->genre}}</td>
                        <td>
                            <a href="/showmembre/{{$membre->id}}">
                                <button class="btn btn-outline-success">Show</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
