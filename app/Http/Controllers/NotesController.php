<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Card;
use App\Note;

class NotesController extends Controller
{	public function store(Request $request, Card $card)
	{	/*$note = new Note;
		$note->body = $request->body;
		$note->save();*/
		
		//$card->addNote(new Note($request->all()));
		$this->validate($request,[
			'body'=>'required|min:10'
		]);
		$note = new Note($request->all());
		$card->addNote($note,1);
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
