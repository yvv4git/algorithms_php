<?php

// пространство имен общее для сортировок.
namespace Algorithms\Sorts;

/**
 * Абстрактный класс сортировки.
 */
abstract class AbstractSort
{
    protected $arrBefore;
    protected $arrAfter;
    
    /**
     * Конструктор.
     * @param array $inputArr
     */
    public function __construct(array $inputArr)
    {
        $this->arrBefore = $inputArr;
    }
    
    /**
     * Этот метод должны реализовать наследники.
     * Один интерфейс - множество реализаций.
     * В зависимости от сортировки может быть реализован по-разному.
     */
    abstract public function Sort();
    
    
    /**
     * Реализация общего метода PrintResult для AbstractSort.
     * @return array
     */
    public function GetResult(): array
    {
        return $this->arrAfter;
    }
}
