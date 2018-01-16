<?php

namespace App\Models;

class Card
{
    protected $suit;
    protected $value;

      /**
     * Create a card object
     * @param array $suit The suit of the card
     * @param array $value The Value of the card
     */
    public function __construct($suit, $value)
    {
        $this->suit = $suit;
        $this->value = $value;
    }

    /**
     * Get the suit of the card
     * @return string The card suit
     */
    public function getSuit()
    {
        return $this->suit;
    }

    /**
     * Get the Value of the card
     * @return string The card Value
     */
    public function getValue()
    {
        return $this->value;
    }
}