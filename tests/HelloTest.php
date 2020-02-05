<?php

declare(strict_types=1);

namespace Bag2\Hello;

use Bag2\Hello\TestCase;

final class HelloTest extends TestCase
{
    public function test()
    {
        $subject = new Hello();

        $this->assertSame('Hello, World!', $subject->to('World'));
        $this->assertSame('Hello, Miku!', $subject->to('Miku'));
    }
}
