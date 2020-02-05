<?php


namespace Bag2\Hello;

final class Hello
{

    public function to(string $name): string
    {
        return sprintf("Hello, %s!", $name);
    }
}
