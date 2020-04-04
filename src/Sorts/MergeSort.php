<?php

/**
 * Сортировка слиянием / Merge sort
 * 
 * Сложность (худшее время) O(n log2 n)
 * Сложность (среднее время) O(n log2 n)
 * Сложность (лучшее время) O(n log2 n)
 * 
 * Затраты памяти O(n)
 * 
 * Алгоритм сортировки,который упорядочивает списки структур данных,
 * доступ к которым можно получать только последовательно. Например,
 * потоки.
 * 
 * Этот алгоритм - хороший пример "разделяй и влавствуй".
 * Сначало задача разбивается на несколько подзадач
 * меньшего размера.
 * 
 * Три этапа:
 * 1.Сортируемый массив разбивается на 2 части приблизительно одинакового размера.
 * 2.Каждая из сортируемых частей сортируется отдельно, например, тем же самым алгоритмом.
 * 3.Два упорядоченных массива половинного размера соединяются в один.
 */

namespace sorts;

class MergeSort extends AbstractSort
{
    /**
     * Данный метод уникален для каждой сортировки.
     */
    public function Sort()
    {
        $this->arrAfter = $this->FuncMergeSort($this->arrBefore);
    }
    
    /**
     * Алгоритм сортировки слиянием.
     * @param array $arr
     * @return array
     */
    private function FuncMergeSort(array $arr): array
    {
        $count = count($arr);
        if ($count <= 1) {
            return $arr;
        }

        $left  = array_slice($arr, 0, (int)($count/2));
        $right = array_slice($arr, (int)($count/2));

        $left = $this->FuncMergeSort($left);
        $right = $this->FuncMergeSort($right);

        return $this->FuncMerge($left, $right);
    }

    /**
     * @param array $left
     * @param array $right
     * @return array
     */
    private function FuncMerge(array $left, array $right): array
    {
        $ret = array();
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] < $right[0]) {
                array_push($ret, array_shift($left));
            } else {
                array_push($ret, array_shift($right));
            }
        }

        array_splice($ret, count($ret), 0, $left);
        array_splice($ret, count($ret), 0, $right);

        return $ret;
    }
}
