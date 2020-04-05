<?php

namespace Search;

class LinearSearch extends AbstractSearch
{
    public function search(): void
    {
        $this->result = $this->linearSearch($this->intsChain, $this->search);
    }   

    /**
     * Реализация простейшего линейного поиска.
     * Сложность алгоритма:
     * min = O(1)
     * mid = O(n)
     * max = O(n)
     * @param array $sortedSequence
     * @param integer $search
     * @return boolean
     */
    private function linearSearch(array $sortedSequence, int $search): bool
    {
        foreach($sortedSequence as $number) {
            if ($number === $search) {
                return true;
            }
        }
        return false;
    }
}