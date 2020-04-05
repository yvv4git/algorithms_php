<?php

namespace Data_structures\Lifo;

class Stack implements IStack
{
    protected $stack;
    protected $limit;

    /**
     * @param integer $limit
     */
    public function __construct(int $limit = 5)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    /**
     * @param integer $item
     * @return void
     */
    public function push(int $item): void
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('The stack is full');
        }
    }

    /**
     * @return integer
     */
    public function pop(): int
    {
        if ($this->isEmpty()) {
            throw new RunTimeException('Stack is empty');
        } else {
            return array_shift($this->stack);
        }
    }

    /**
     * @return integer
     */
    public function top(): int
    {
        return current($this->stack);
    }

    /**
     * @return boolean
     */
    public function isEmpty(): bool
    {
        return empty($this->stack);
    }
}