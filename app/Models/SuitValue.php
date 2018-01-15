<?php

namespace App\Models;

class SuitValue
{
    private $suit;
    private $value;

    /**
     * Create object holding the a suit and a value
     */
    public function __construct()
    {
        $this->suit = [
            'H',
            'D',
            'C',
            'S'
        ];

        $this->value = [
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            'J',
            'Q',
            'K',
            'A'
        ];
    }

    public function getSuit()
    {
        return $this->suit;
    }

    public function getValue()
    {
        return $this->value;
    }
}