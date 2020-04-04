<?php
/*
Простой алгоритм сортировки.
Сложность O(n^2)
Алгоритм состоит из повторяющихся проходом по сортируемому массиву.
За каждый проход элементы сравниваются попарно, и, если порядок неверный,
меняются местами.
Проходы повторяются N-1 раз..
*/

namespace sorts;

class BubbleSort extends AbstractSort
{
    /**
     * Данный метод уникален для каждой сортировки.
     */
    public function Sort()
    {
        $this->arrAfter = $this->FuncBubbleSort($this->arrBefore);
    }
    
    /**
     * Алгоритм сортировки пузырьком.
     * @param array $data
     * @return array
     */
    private function FuncBubbleSort(array $data)
    {
        $count_elements = count($data);		// общее количество элементов
        $iterations = $count_elements - 1;	// количество проходов N-1

        for ($i=0; $i < $count_elements; $i++) {
            $changes = false;
            for ($j=0; $j < $iterations; $j++) {
                if ($data[$j] > $data[($j + 1)]) {
                    $changes = true;
                    list($data[$j], $data[($j + 1)]) = array($data[($j + 1)], $data[$j]);
                }
            }
            $iterations--;
            /*if (!$changes) {
                return $data;
            }*/
        }
        return $data;
    }
}
