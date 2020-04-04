<?php
/*
Сортировка вставками / Insertion sort
Сложность O(n^2)

Алгоритм сортировки, в котором элементы входной последовательности
просматриваются по одному и, каждый новый поступивший элемент
размещается в подходящем месте среди ранее упорядоченных элементов.
*/
namespace sorts;


class InsertSort extends AbstractSort
{
    /**
     * Данный метод уникален для каждой сортировки.
     */
    public function Sort()
    {
        $this->arrAfter = $this->FuncInsertSort($this->arrBefore);
    }
    
    /**
     * Алгоритм сортировки вставками.
     * @param array $arr
     * @return array
     */
    private function FuncInsertSort(array $arr): array {
        $count = count($arr);
        //echo  'Count: ' . $count . PHP_EOL;
        if ($count <= 1) {
            return $arr;
        }

        for ($i = 1; $i < $count; $i++) {
            $curVal = $arr[$i];
            $j = $i - 1;
            //echo 'j:' . $j . ' curVal:' . $curVal. PHP_EOL;

            while (isset($arr[$j]) && $arr[$j] > $curVal) {
                //echo "\t-> j:$j==>" . $arr[$j] . '>' . $curVal . PHP_EOL;
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $curVal;
                $j--;
            }
        }

        return $arr;
    }
}
