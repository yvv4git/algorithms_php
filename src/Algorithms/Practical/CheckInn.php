<?php

namespace Algorithms\Practical;

class CheckInn
{
    /**
     * Конкретная реализация алгоритма проверки инн для физ.лиц
     * и юр.лиц.
     * 
     * @param string $inn
     * @param int $jurface
     * @return bool
     */
    public function ValidateInn($inn, $jurface = 1): bool {
        if ($jurface == 1) {
            //для юр лица код 10 знаков
            if (preg_match('#([\d]{10})#', $inn, $m)) {
                            $inn = $m[0];
                $code10 = (($inn[0] * 2 + $inn[1] * 4 + $inn[2] *10 + $inn[3] * 3 +
                            $inn[4] * 5 + $inn[5] * 9 + $inn[6] * 4 + $inn[7] * 6 +
                            $inn[8] * 8) % 11 ) % 10;
                if ($code10 == $inn[9]) return $inn;
            }
        } else {
            //для физ.лиц и ИП - 12 знаков
            if (preg_match('#([\d]{12})#', $inn, $m)) {
                            $inn = $m[0];
                $code11 = (($inn[0] * 7 + $inn[1] * 2 + $inn[2] * 4 + $inn[3] *10 +
                            $inn[4] * 3 + $inn[5] * 5 + $inn[6] * 9 + $inn[7] * 4 +
                            $inn[8] * 6 + $inn[9] * 8) % 11 ) % 10;
                $code12 = (($inn[0] * 3 + $inn[1] * 7 + $inn[2] * 2 + $inn[3] * 4 +
                            $inn[4] *10 + $inn[5] * 3 + $inn[6] * 5 + $inn[7] * 9 +
                            $inn[8] * 4 + $inn[9] * 6 + $inn[10]* 8) % 11 ) % 10;

                if ($code11 == $inn[10] && $code12 == $inn[11]) return $inn;
            }
        }
        return false;
    }
}
