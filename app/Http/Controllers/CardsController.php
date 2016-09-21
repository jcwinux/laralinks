<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Card;

class CardsController extends Controller
{	public function index()
	{ 	$cards = Card::all();
		$parameters = ['title'=>'Consulta todos los registros','cards'=>$cards];
		return view('cards.index',$parameters);
	}
	public function show(Card $card)
	{	//$card = Card::with('notes.user')->find(1);
		$card->load('notes.user');
		$parameters = ['title'=>'Consulta un registro','card'=>$card];
		return view('cards.show',$parameters);
	}
}
