<?php
namespace math;

/**
 * Факториал числа - это произведение натуральных чисел от 1 до до самоего числа(включительно).
 * Например: 3! = 1 * 2 * 3 = 6
 */
class FactorialRecursion extends AbstractMath
{
    public function Calc()
    {
        $this->result = $this->FactorialR($this->dataIn);
    }
    
    /**
     * Конкретная реализация получения факториала с использованием
     * рекурсии. Это не самый эффективный алгоритм вычисления 
     * факториала числа.
     */
    private function FactorialR(int $chislo)
    {
        if ($chislo < 0) return 0;
        if ($chislo == 0) return 1;
        return $chislo * $this->FactorialR($chislo - 1);
    }
}
