<?php

namespace Algorithms\Math;

abstract class AbstractMath
{
    protected $dataIn;
    protected $result;
    
    /**
     * @param array $dataIn
     */
    public function __construct($dataIn)
    {
        $this->dataIn = $dataIn;
    }
    
    abstract public function Calc();
    
    /**
     * @return integer
     */
    public function GetResult(): int
    {
        return $this->result;
    }
}
