<?php

use PHPUnit\Framework\TestCase;
use Data_structures\Lifo\Stack;

class LifoTest extends TestCase
{
    private static $objStack;
    private const LIFO_LIMIT = 10;

    public static function setUpBeforeClass()
    {
        static::$objStack = new Stack(self::LIFO_LIMIT);
    }


    public function testStack()
    {
        $this->assertTrue(static::$objStack->isEmpty());
        static::$objStack->push(5);
        $this->assertSame(static::$objStack->pop(), 5);

    }
}