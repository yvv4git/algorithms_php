<?php

namespace Algorithms\Search;

class BinarySearch extends AbstractSearch
{
    public function search(): void
    {
        $this->result = $this->binarySearch($this->intsChain, $this->search);
    }

    /**
     * @param array $inputData
     * @param integer $searchInt
     * @return boolean
     */
    public function binarySearch(array $inputData, int $searchInt): bool
    {
        $count = count($inputData);

        if ($count === 0) {
            return false;
        }

        $start = 0;
        $end = $count - 1;

        while($start <= $end) {
            $middle = floor(($start + $end) / 2);

            // если вдруг средний элемент оказался тем самым
            if ($inputData[$middle] === $searchInt) {
                return true;
            }

            // уменьшаем поисковый массив
            if ($searchInt < $inputData[$middle]) {
                $end = $middle - 1;
            } else {
                $start = $middle + 1;
            }

        }

        return false;
    }
}