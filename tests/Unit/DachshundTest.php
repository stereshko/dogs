<?php

namespace Tests\Unit;

use Tests\TestCase;

class DachshundTest extends TestCase
{
    public function testDachshundVoice()
    {
        $this->artisan('dachshund voice')
            ->expectsOutput('Такса говорит "гав-гав"')
            ->assertExitCode(0);
    }

    public function testDachshundHunt()
    {
        $this->artisan('dachshund hunt')
            ->expectsOutput('Такса вышла на охоту')
            ->assertExitCode(0);
    }

    public function testDachshundAnotherAction()
    {
        $this->artisan('dachshund ddd')
            ->expectsOutput('Такса этого не умеет')
            ->assertExitCode(0);
    }
}
