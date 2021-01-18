@extends('layout')

@section('title', 'Crear Proyecto')


@section('content')

<center>
    <h1>Crear proyecto nuevo</h1>
</center>

@include('partials.validation-errors')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form action="{{ route('projects.store') }}" method="post">
            @include('projects._form', ['btnText'=>'Guardar'])

        </form>
    </div>
    <div class="col-md-2"></div>
</div>



@endsection