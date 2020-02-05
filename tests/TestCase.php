<?php


namespace Bag2\Hello;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    public function test()
    {
        $subject = new Hello();

        $this->assertSame('Hello, World!', $subject->to('World'));
    }
}
