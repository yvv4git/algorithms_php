<?php
/**
 * Пространства имен появились в php 5.3.0 версии.
 * Импортирование функций и констант появилось в php 5.6 версии.
 */

 use PHPUnit\Framework\TestCase;
 use Algorithms\Search\BinarySearch;
 use Algorithms\Search\LinearSearch;

 class SearchTest extends TestCase
 {
     /**
      * Провайдер данных / Data set.
      *
      * @return array
      */
     public function arrDataProvider(): array
     {
         return [
            [
                 [1, 2, 3, 4, 5, 6, 7, 8, 9], 
                 5, 
                 true
            ],
            [
                [1, 2, 3, 4, 5, 6, 7, 8, 9], 
                9, 
                true
            ],
            [
                [1, 2, 3, 4, 5, 6, 7, 8, 9], 
                10, 
                false
                ],
            ];
     }

     /**
      * Тестируем алргоритм простого линейного поиска.
      * @dataProvider arrDataProvider
      * @param array $inputArr
      * @param integer $seach
      * @param boolean $expected
      * @return void
      */
     public function testLinearSearch(array $inputArr, int $seach, bool $expected): void
     {
         $obj = new LinearSearch($inputArr, $seach);
         $obj->search();
         $this->assertEquals($obj->getResult(), $expected);
     }

     /**
      * Тестируем алгоритм бинарного поиска.
      * @dataProvider arrDataProvider
      * @param array $inputArr
      * @param integer $seach
      * @param boolean $expected
      * @return void
      */
     public function testBinarySearch(array $inputArr, int $seach, bool $expected): void
     {
        $obj = new BinarySearch($inputArr, $seach);
        $obj->search();
        //$this->assertTrue($obj->getResult());
        $this->assertEquals($obj->getResult(), $expected);
     }
 }