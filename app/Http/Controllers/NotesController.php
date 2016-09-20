<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Card;
use App\Note;

class NotesController extends Controller
{	public function store(Request $request, Card $card)
	{	$note = new Note;
		$note->body = $request->body;
		$card->addNote(new Note($request->all()));
		return back();
	}
	public function edit(Note $note)
	{	$params['note'] = $note;
		$params['title'] = 'Edición de la nota';
		return view('notes.edit',$params);
	}
	public function update(Request $request, Note $note)
	{	$note->update($request->all());
		return back();
	}
}
