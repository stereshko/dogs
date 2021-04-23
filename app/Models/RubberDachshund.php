<?php

namespace App\Models;

use App\Contracts\Voiceable;

class RubberDachshund extends Toy implements Voiceable
{
    public function voice() {
        return 'Резиновая такса с пищалкой делает "пиу-пиу"';
    }
}
