<?php

declare(strict_types=1)

namespace Bag2\Hello;


final class Aisatsu
{
    public function byHour(int $hour): string
    {
        if (5 < $hour && $hour < 10) {
            return 'おはようございま！';
        }

        if (10 < $hour && $hour < 16) {
            return 'こんにちはこんにちは！';
        }

        return 'こんばんは！';
    }
}