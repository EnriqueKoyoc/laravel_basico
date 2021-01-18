@extends('layout')

@section('title', 'Portfolio')


@section('content')
<h1>Portfolio</h1><br>
<button type="button" class="btn btn-primary"><a style="color: white" href="{{route('projects.create')}}">Agregar
        nuevo</a></button><br><br>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Descripción</th>
            <th scope="col">Fecha de registro</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($projects as $project)
        <tr class="table-success">
            <th scope="row">{{ $project->id }}</th>
            <td>{{ $project->title }}</td>
            <td>{{ $project->description }}</td>
            <th>{{ $project->created_at->diffForHumans() }}</th>
            <td>
                <a class="btn btn-success fas fa-eye" href="{{ route('projects.show', $project) }}"></a>
                <a class="btn btn-primary fas fa-edit" href="{{ route('projects.edit', $project) }}"></a>
                <form method="POST" action="{{ route('projects.destroy', $project) }}">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger fas fa-trash-alt"></button>
                </form>
            </td>
        </tr>
        @empty
        <p>No hay datos para mostrar</p>
        @endforelse

    </tbody>
</table>
{{$projects->links()}}
@endsection