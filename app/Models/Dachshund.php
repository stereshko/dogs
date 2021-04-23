<?php

namespace App\Models;

use App\Contracts\Huntable;
use App\Contracts\Voiceable;

class Dachshund extends Animal implements Voiceable, Huntable
{
    public function voice() {
        return 'Такса говорит "гав-гав"';
    }

    public function hunt() {
        return 'Такса вышла на охоту';
    }
}
