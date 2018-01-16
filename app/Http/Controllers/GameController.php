<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilities\DeckGenerator;
use App\Models\Deck;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    /**
     * shows set up for the game
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('game/index');
    }

    /**
     * Stores a newly created game in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = str_random(10);
        session(['user_id' => $userId]);
        $desiredCard = $request->desiredcard;
        $cardsInDeck = serialize((new DeckGenerator)->generateDeck());
        $cardsInHand = serialize(new Deck);
        DB::table('game')->insert(['user_id' => $userId, 'cards_in_deck' => $cardsInDeck, 'cards_in_hand' => $cardsInHand,  'card_desired' => $desiredCard]);
        return redirect('/game');
    }

    /**
     * Shows the current stage of the game
     *
     * @return \Illuminate\Http\Response
     */
    public function play()
    {
        $data = DB::table('game')->where('user_id', session()->get('user_id'))->get();
        $cid = unserialize($data->first()->cards_in_deck);
        $cih = unserialize($data->first()->cards_in_hand);
        dd($cid);
        return view('game/play')->with('data', $data);
    }

    /**
     * Update the specified game in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
