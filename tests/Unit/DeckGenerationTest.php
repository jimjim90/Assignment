<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Utilities\DeckGenerator;

class DeckGenerationTest extends TestCase
{
    public function testDeckGeneration()
    {
        generateDeck();
    }
}
