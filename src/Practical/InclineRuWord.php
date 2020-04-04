<?php
namespace Practical;

/**
 * Реализация алгоритма склонения слова в зависимости от цифры.
 * Например:
 * 21 минута, минуты или минут?
 * Алгоритм знает ответ!
 */
class InclineRuWord
{
    /**
     * Конкретная реализация алгоритма.
     * @param integer $number
     * @param array $suffix
     * @return string
     */
    public function GetInclineWord(int $number, array $suffix): string
    {
        $keys = array(2, 0, 1, 1, 1, 2);
        $mod = $number % 100;
        $suffix_key = ($mod > 7 && $mod < 20) ? 2: $keys[min($mod % 10, 5)];
        return $suffix[$suffix_key];
    }
}
