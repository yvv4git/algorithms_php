<?php

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{    
    /**
     * Провайдер данных.
     */
    public function factorialDataProvider()
    {
        return [
            [0, 1],
            [1, 1],
            [2, 2],
            [3, 6],
            [4, 24],
            [5, 120],
            [6, 720],
            [7, 5040],
            [8, 40320],
            [9, 362880],
            [10, 3628800],
        ];
    }
    
    /**
     * Тестируем получение факториала числа с использованием рекурсии.
     * @dataProvider factorialDataProvider
     */
    public function testFactorialRecursion(int $chislo, int $assertResult)
    {
        $o = new Algorithms\Math\FactorialRecursion($chislo);
        $o->Calc($chislo);
        $this->assertSame($o->GetResult(), $assertResult);
    }
    
    /**
     * Тестируем получение факториала числа с использованием цикла.
     * @dataProvider factorialDataProvider
     */
    public function testFactorialLoop(int $chislo, int $assertResult)
    {
        $o = new Algorithms\Math\FactorialLoop($chislo);
        $o->Calc($chislo);
        $this->assertSame($o->GetResult(), $assertResult);
    }
}
