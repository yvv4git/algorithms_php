<?php
/**
 * Сортировка выбором / Selection sort
 * 
 * Худшее время O(n^2)
 * Среднее время O(n^2)
 * Лучшее время O(n^2)
 * 
 * Затраты памяти O(n)
 * 
 * Алгоритм:
 * 1. Находим номер минимального элемента в списке.
 * 2. Производим обмен этого значения со значением первой неотсортированной позиции.
 * 3. Сортируем хвост списка, исключив из рассмотрения уже отсортированные элементы.
 */

namespace sorts;

class SelectionSort extends AbstractSort
{
    /**
     * Данный метод уникален для каждой сортировки.
     */
    public function Sort()
    {
        $this->arrAfter = $this->FuncSelectionSort($this->arrBefore);
    }
    
    /**
     * Алгоритм сортировки выбором.
     * @param array $arr
     * @return array
     */
    private function FuncSelectionSort(array $arr): array 
    {
        $size = count($arr);

        for ($i = 0; $i < $size-1; $i++)
        {
            $min = $i;

            for ($j = $i + 1; $j < $size; $j++)
            {
                if ($arr[$j] < $arr[$min])
                {
                    $min = $j;
                }
            }

            $temp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $temp;
        }
        
        return $arr;
    }
}
