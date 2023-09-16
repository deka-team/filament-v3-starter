<?php

namespace App\Forms\Components;

class MoneyInput extends NumberInput
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->prefix('Rp ')
            ->suffix(',-');
    }
}
