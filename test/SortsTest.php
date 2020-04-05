<?php
/*
 * Пространства имен появились в php 5.3.0 версии.
 * Импортирование функций и констант появилось в php 5.6 версии.
 */

use PHPUnit\Framework\TestCase;
use Algorithms\Sorts\{BubbleSort, InsertSort, MergeSort, QuickSort, SelectionSort};

class SortsTest extends TestCase
{
    /**
     * Провайдер данных.
     */
    public function arrProvider()
    {
        return [
            [
                [3, 6, 2, 4, 10, 1 ,9, 8, 5, 7], 
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
            ],
        ];
    }
    
    /**
     * Тест алгоритма "Быстрая сортировка" / "сортировка Хоара"
     * Сложность:
     *  худшее время = O(n^2)
     *  среднее время = O(n log n)
     *  лучшее время = O(n log n) - при обычном разделении или
     *  O(n) - при разделении на 3 части.
     * 
     * @dataProvider arrProvider
     * Здесь мы используем аннотацию dataProvider, чтобы указать, что
     * метод testQuickSort, в качестве аргументов получит данные из 
     * провайдера данных arrProvider.
     */
    public function testQuickSort($arrIn, $arrResult)
    {
        $o = new QuickSort($arrIn);
        $o->Sort();
        $result = $o->GetResult();
        $this->assertSame($arrResult, $result);
    }
    
    /**
     * Тест алгоритма "Пузырьковая сортировка"
     * Сложность: O(n^2)
     * 
     * @dataProvider arrProvider
     */
    public function testBubbleSort($arrIn, $arrResult)
    {
        $o = new BubbleSort($arrIn);
        $o->Sort();
        $result = $o->GetResult();
        $this->assertSame($arrResult, $result);
    }
    
    /**
     * Тест алгоритма "Сортировка вставками"
     * Сложность:
     *  худшее время = O(n^2) сравнений
     *  среднее время = O(n^2) сравнений
     *  лучшее время = O(n) сравнений, 0 обменов
     * 
     * @dataProvider arrProvider
     */
    public function testInsertSort($arrIn, $arrResult)
    {
        $o = new InsertSort($arrIn);
        $o->Sort();
        $result = $o->GetResult();
        $this->assertSame($arrResult, $result);
    }
    
    /**
     * Тест алгоритма "Сортировка выбором"
     * Сложность:
     *  худшее время = O(n^2)
     *  среднее время = O(n^2)
     *  лучшее время = O(n^2)
     * 
     * @dataProvider arrProvider
     */
    public function testSelectionSort($arrIn, $arrResult)
    {
        $o = new SelectionSort($arrIn);
        $o->Sort();
        $result = $o->GetResult();
        $this->assertSame($arrResult, $result);
    }
    
    /**
     * Тест алгоритма "Сортировка слиянием"
     * Сложность:
     *  худшее время = O(n log2 n)
     *  среднее время = O(n log2 n)
     *  лучшее время = O(n log2 n) 
     * 
     * @dataProvider arrProvider
     */
    public function testMergeSort($arrIn, $arrResult)
    {
        $o = new MergeSort($arrIn);
        $o->Sort();
        $result = $o->GetResult();
        $this->assertSame($arrResult, $result);
    }
}
