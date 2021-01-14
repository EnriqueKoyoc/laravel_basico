@extends('layout')

@section('title', 'Contact')

@section('content')
<center>
    <h1>{{ __('Contact')}}</h1>
</center>
<div class="col-md-6 mx-auto">
    <form action="{{ route('contact') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"
                placeholder="Nombre...">
            {!! $errors->first('name', '<small>:message</small>') !!}
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"
                placeholder="Email...">
            {!! $errors->first('email', '<small>:message</small>') !!}
        </div>
        <div class="form-group">
            <label>Asunto</label>
            <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}"
                placeholder="Asunto...">
            {!! $errors->first('subject', '<small>:message</small>') !!}
        </div>
        <div class="form-group">
            <label>Mensaje</label>
            <textarea class="form-control" name="content" id="content"
                placeholder="Mensaje...">{{ old('content') }}</textarea>
            {!! $errors->first('content', '<small>:message</small>') !!}

        </div>
        <br>
        <button class="btn btn-primary">Enviar</button>
    </form>
</div>

@endsection