<?php
namespace math;

class FactorialRecursion extends AbstractMath
{
    public function Calc()
    {
        $this->result = $this->FactorialR($this->dataIn);
    }
    
    /**
     * Конкретная реализация получения факториала с использованием
     * рекурсии.
     */
    private function FactorialR(int $chislo)
    {
        if ($chislo < 0) return 0;
        if ($chislo == 0) return 1;
        return $chislo * $this->FactorialR($chislo - 1);
    }
}
