<?php

namespace App\Models;

use App\Contracts\Voiceable;

class Pug extends Animal implements Voiceable
{
    public function voice() {
        return 'Мопс говорит "гав-гав"';
    }
}
