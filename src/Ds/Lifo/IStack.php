<?php

namespace Ds\Lifo;

interface IStack
{
    public function push(int $item);
    public function pop(): int;
    public function top(): int;
    public function isEmpty(): bool;
}