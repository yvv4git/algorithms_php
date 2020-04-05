<?php

use PHPUnit\Framework\TestCase;
use Data_structures\Lifo\Stack;

class LifoTest extends TestCase
{
    private static $obj;
    private const LIFO_LIMIT = 10;

    public static function setUpBeforeClass()
    {
        static::$obj = new Stack(self::LIFO_LIMIT);
    }


    public function testStack()
    {
        $this->assertTrue(static::$obj->isEmpty());
        static::$obj->push(5);
        $this->assertSame(static::$obj->pop(), 5);

    }
}