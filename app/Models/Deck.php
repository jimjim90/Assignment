<?php

namespace App\Models;

class Deck
{
    protected $cards;

    public function to_json() 
    {
        return json_encode($this->cards);
    }

    public function setDeck(array $cards)
    {
        $this->cards = $cards;
    }

    public function getDeck()
    {
        return $this->cards;
    }
}