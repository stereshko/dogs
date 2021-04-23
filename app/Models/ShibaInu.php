<?php

namespace App\Models;

use App\Contracts\Huntable;
use App\Contracts\Voiceable;

class ShibaInu extends Animal implements Voiceable, Huntable
{
    public function voice() {
        return 'Сиба-ину говорит "гав-гав"';
    }

    public function hunt() {
        return 'Сиба-ину вышла на охоту';
    }
}
