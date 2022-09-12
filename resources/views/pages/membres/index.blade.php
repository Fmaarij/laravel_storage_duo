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
                    </tr>
                </thead>

                <tbody>
                    @foreach ($membres as $membre)
                    <tr>
                        <td>{{$membre->id}}</td>
                        <td>{{$membre->nom}}</td>
                        <td>{{$membre->age}}</td>
                        <td>
                            <img width="10%" class="rounded-pill" src="{{asset('storage/img/' .$membre->img)}}" alt="picture">
                        </td>
                        <td>{{$membre->genre->genre}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
