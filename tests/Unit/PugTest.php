<?php

namespace Tests\Unit;

use Tests\TestCase;

class PugTest extends TestCase
{
    public function testPugVoice()
    {
        $this->artisan('pug voice')
            ->expectsOutput('Мопс говорит "гав-гав"')
            ->assertExitCode(0);
    }

    public function testPugHunt()
    {
        $this->artisan('pug hunt')
            ->expectsOutput('Мопсу лениво охотиться')
            ->assertExitCode(0);
    }

    public function testPugAnotherAction()
    {
        $this->artisan('pug ddd')
            ->expectsOutput('Мопс этого не умеет')
            ->assertExitCode(0);
    }
}
