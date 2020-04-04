<?php
namespace math;

class FactorialLoop extends AbstractMath
{
    public function Calc()
    {
        $this->result = $this->FactorialL($this->dataIn);
    }
    
    /**
     * Конкретная реализация получения факториала с использованием
     * цикла.
     */
    private function FactorialL(int $n)
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
