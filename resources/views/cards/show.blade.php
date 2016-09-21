@extends('templates.template')

@section('title')
	{{$title}}
@stop

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>{{ $card->title }}</h1>
			<ul class="list-group">
			@foreach ($card->notes as $note)
				<li class="list-group-item">
					{{ $note->body}}
					<a href="/notes/{{ $note->id }}/edit" style="float:right">{{ $note->user->username }}</a>
				</li>
			@endforeach
			</ul>
			<hr>
			<h3>Add a new note </h3>
			<form method="POST" action="/cards/{{ $card->id }}/notes">
				<div class="form-group">
					<textarea class="form-control" name="body"></textarea>
					<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Add Note</button>
				</div>
			</form>
		</div>
	</div>
@stop