<?php

namespace Tests\Unit;

use Tests\TestCase;

class RubberDachshundTest extends TestCase
{
    public function testRubberDachshundVoice()
    {
        $this->artisan('rubber-dachshund voice')
            ->expectsOutput('Резиновая такса с пищалкой делает "пиу-пиу"')
            ->assertExitCode(0);
    }

    public function testRubberDachshundHunt()
    {
        $this->artisan('rubber-dachshund hunt')
            ->expectsOutput('Резиновая такса с пищалкой не охотится')
            ->assertExitCode(0);
    }

    public function testRubberDachshundAnotherAction()
    {
        $this->artisan('rubber-dachshund ddd')
            ->expectsOutput('Резиновая такса с пищалкой этого не умеет')
            ->assertExitCode(0);
    }
}
