<?php

namespace App\Forms\Components;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Support\RawJs;

class MoneyInput extends TextInput
{
    protected function setUp(): void
    {
        $this->prefix('Rp ')
            ->suffix(',-')
            ->mask(RawJs::make(<<<JS
                \$money(\$input)
            JS))
            ->formatStateUsing(fn(null|string $state) => number_format($state))
            ->beforeStateDehydrated(function (Get $get, Set $set) {
                $name = $this->getName();
                $value = preg_replace('/[^0-9.]/', '', $get($name));
                $set($name, $value);
            });
    }
}
