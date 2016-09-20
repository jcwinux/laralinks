@extends('templates.template')

@section('title')
	{{$title}}
@stop

@section('content')
	<h1>All Cards</h1>
	<table class="table table-striped">
	<tbody>
	@foreach ($cards as $card)
		<tr>
			<td>{{ $card->id }}</td>
			<td>{{ $card->title }}</td>
			<td>{{ $card->created_at }}</td>
			<td>{{ $card->updated_at }}</td>
			<td><a href="cards/{{$card->id}}">Ver</a></td>
			<td><a href="{{$card->path()}}">Ver</a></td>
		</tr>
	@endforeach
	</tbody>
	</table>
@stop