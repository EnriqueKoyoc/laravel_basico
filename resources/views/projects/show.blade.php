@extends('layout')

@section('title', 'Portafolio | ' . $project->title)


@section('content')

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Descripción</th>
            <th scope="col">Fecha de registro</th>
        </tr>
    </thead>
    <tbody>
        <tr class="table-primary">
            <th scope="row">{{ $project->id }}</th>
            <td>{{ $project->title }}</td>
            <td>{{ $project->description }}</td>
            <th>{{ $project->created_at->diffForHumans() }}</th>

        </tr>
    </tbody>
</table>

@endsection