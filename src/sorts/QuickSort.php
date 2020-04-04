<?php
/*
Быстрая сортировка / Quick sort
Является улучшеным вариантом сортировки обмена(её варианты "Пузырьковая"
и "Шейкерная сортировка".

Худшее время O(n^2)
Среднее время O(n log n)
Лучшее время O(n log n)

Затраты памяти O(n)

Принципиальное отличие состоит в том, что происходят перестановки на
наибольшее возможное расстояние и после каждого прохода элементы 
делятся на две нзависимые группы.

На практике обычно элементы делятся на три,а не на две группы.

Алгоритм:
1.Выбрать опорный элемент из массива.
2.Разбиение. Перераспределение элементов так, чтобы элементы меньше
опорного распологались перед ним, а больше или равные опорному после
него.
3.Рекурсивно применить первые два шага к двум подмассивам слева или
справа от опорного. Рекурсия не применяется к массиву, в котором один
или ни одного элемента.

*/


namespace sorts;


class QuickSort extends AbstractSort
{
    /**
     * Данный метод уникален для каждой сортировки.
     */
    public function Sort()
    {
        $this->arrAfter = $this->FuncQuickSort($this->arrBefore);
    }
    
    /**
     * Алгоритм быстрой сортировки.
     * @param array $list
     * @return array
     */
    private function FuncQuickSort(array $list)
    {
        $length = count($list);
        if( $length <= 1){
            return $list;
        }
        else{
            $pivot = $list[0]; 		// опорный элемент
            $left_list = array();	// список слева от опорного эллемента
            $right_list = array();	// список справа от опорного элекмента
            for($i = 1; $i < $length; $i++)
            {
                if($list[$i] < $pivot){
                    $left_list[] = $list[$i];
                }
                else{
                    $right_list[] = $list[$i];
                }
            }
            return array_merge($this->FuncQuickSort($left_list), array($pivot), $this->FuncQuickSort($right_list));
        }
    }
}


/* USE: */
/*
$list = [3, 6, 2, 4, 10, 1 ,9, 8, 5, 7];
$o = new QuickSort($list);
$o->Sort();
var_dump($o->GetResult());
*/
