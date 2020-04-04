<?php
namespace math;

abstract class AbstractMath
{
    protected $dataIn;
    protected $result;
    
    public function __construct($dataIn)
    {
        $this->dataIn = $dataIn;
    }
    
    abstract public function Calc();
    
    public function GetResult()
    {
        return $this->result;
    }
}
