<?php

namespace Math;

/**
 * Факториал числа - это произведение натуральных чисел от 1 до до самоего числа(включительно).
 * Например: 3! = 1 * 2 * 3 = 6
 */
class FactorialLoop extends AbstractMath
{
    public function Calc()
    {
        $this->result = $this->FactorialL($this->dataIn);
    }
    
    /**
     * В данном примере мы вычисляем факториал без использования рекурсии.
     * Это более эффективный способ, в отличии от рекурсивного примера.
     * Данный пример относится к теме динамического программирования.
     * @param integer $n
     * @return int
     */
    private function FactorialL(int $n): int
    {
        if ($n < 0) return 0;
        if ($n == 0) return 1;

        $f = 1;

        for ($i=1; $i<=$n; $i++) {
            $f = $f * $i;
        }
        return $f;
    }
}
