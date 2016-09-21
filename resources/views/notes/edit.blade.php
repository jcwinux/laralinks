@extends('templates.template')

@section('title')
	{{ $title or 'No hay título'}}
@stop

@section('content')
	<h1>Edit the note<h1>
	<form method="POST" action="/notes/{{ $note->id }}">
		{{ method_field('PATCH') }}
		<div class="form-group">
			<textarea class="form-control" name="body">{{ $note->body }}</textarea>
			{{ csrf_field() }}
		</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Update Note</button>
		</div>
	</form>
@stop