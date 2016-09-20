<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{	public function notes()
	{	//También puede ser
		//return $this->hasMany('App\Note');
		return $this->hasMany(Note::class);
	}
	public function path()
	{	return '/cards/'.$this->id;
	}
	public function addNote(Note $note)
	{	return $this->notes()->save($note);
	}
}
