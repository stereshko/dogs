<?php

namespace Tests\Unit;

use Tests\TestCase;

class PlushLabradorTest extends TestCase
{
    public function testPlushLabradorVoice()
    {
        $this->artisan('plush-labrador voice')
            ->expectsOutput('Плюшевый лабрадор не издает звуков')
            ->assertExitCode(0);
    }

    public function testPlushLabradorHunt()
    {
        $this->artisan('plush-labrador hunt')
            ->expectsOutput('Плюшевый лабрадор не охотится')
            ->assertExitCode(0);
    }

    public function testPlushLabradorAnotherAction()
    {
        $this->artisan('plush-labrador ddd')
            ->expectsOutput('Плюшевый лабрадор этого не умеет')
            ->assertExitCode(0);
    }
}
