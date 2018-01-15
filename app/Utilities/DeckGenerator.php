<?php

namespace App\Utilities;

use Illuminate\Support\Collection;
use App\Models\SuitValue;
use App\Models\Deck;
use App\Models\Card;

class DeckGenerator
{
    protected $suitValue;

    public function __construct()
    {
        $this->suitValue = new SuitValue;
    }

    public function generateDeck()
    {
        $cards = [];
        foreach ($this->suitValue->getSuit() as $suit)
        {
            foreach ($this->suitValue->getValue() as $value)
            {
                $cards[] = new Card(['id' => $suit], ['id' => $value]);
            }
        }
        shuffle($cards);
        $deck = new Deck();
        $deck->setDeck($cards);
        return $deck;
    }
}