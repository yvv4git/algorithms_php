<?php

namespace Algorithms\Search;

abstract class AbstractSearch
{
    protected $intsChain;
    protected $search;
    protected $result;

    /**
     * @param array $intsChain
     * @param integer $search
     */
    public function __construct(array $intsChain, int $search)
    {
        $this->intsChain = $intsChain;
        $this->search = $search;
    }

    /**
     * @return bool
     */
    public function getResult(): bool
    {
        return $this->result;
    }

    abstract public function search(): void;
}