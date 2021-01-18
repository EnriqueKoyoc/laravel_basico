@extends('layout')

@section('title', 'Editar Proyecto')


@section('content')

<center>
    <h1>Editar proyecto</h1>
</center>

@include('partials.validation-errors')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="{{ route('projects.update', $project) }}" method="post">
            @method('PATCH')
            @include('projects._form', ['btnText'=>'Actualizar'])


        </form>
    </div>
    <div class="col-md-2"></div>
</div>


@if ($errors->any())

@foreach ($errors as $error)
<div class="alert alert-danger">{{ $error }}</div>
@endforeach

@endif
@endsection