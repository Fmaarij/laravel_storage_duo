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
                        <th>Delete Image</th>
                        <th>Delete All</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($membres as $membre) --}}
                    <tr>
                        <td>{{$membres->id}}</td>
                        <td>{{$membres->nom}}</td>
                        <td>{{$membres->age}}</td>
                        <td width="10%">
                            <img width="100%" class="rounded-pill" src="{{asset('storage/img/' .$membres->img)}}" alt="picture">
                        </td>
                        <td>{{$membres->genre->genre}}</td>
                        <td>
                            <a href="/editmembre/{{$membres->id}}">
                                <button class="btn btn-outline-warning">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="/{{$membres->id}}/delete" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger">Delete Image</button>
                            </form>
                        </td>
                        <td>
                            <form action="/{{$membres->id}}/deleteall" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger">Delete all</button>
                            </form>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
    </div>
@endsection
