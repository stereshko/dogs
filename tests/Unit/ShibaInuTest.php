<?php

namespace Tests\Unit;

use Tests\TestCase;

class ShibaInuTest extends TestCase
{
    public function testShibaInuVoice()
    {
        $this->artisan('shiba-inu voice')
            ->expectsOutput('Сиба-ину говорит "гав-гав"')
            ->assertExitCode(0);
    }

    public function testShibaInuHunt()
    {
        $this->artisan('shiba-inu hunt')
            ->expectsOutput('Сиба-ину вышла на охоту')
            ->assertExitCode(0);
    }

    public function testShibaInuAnotherAction()
    {
        $this->artisan('shiba-inu ddd')
            ->expectsOutput('Сиба-ину этого не умеет')
            ->assertExitCode(0);
    }
}
