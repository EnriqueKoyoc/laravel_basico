@csrf
<div class="row">
    <div class="form-group">
        <label for="title">Título del proyecto</label>
        <input id="title" name="title" class="form-control" type="text" value="{{ old('title') }}">
    </div>
</div>

<div class="row">
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea name="description" id="description"
            class="form-control">{{ old('description', $project->description) }}</textarea>
    </div>
</div>
<br>
<div class=" row">
    <button class="btn btn-success">{{$btnText}}</button>
</div>