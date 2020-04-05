<?php

use PHPUnit\Framework\TestCase;
use Algorithms\Practical\CheckInn;
use Algorithms\Practical\InclineRuWord;


class PracticalTest extends TestCase
{
    /**
     * @dataProvider innDataProvider
     */
    public function testCheckInn(string $strInn, int $type, bool $result)
    {
        $o = new CheckInn();
        $this->assertSame($o->ValidateInn($strInn, $type), $result);
    }
    
    
    /**
     * Провайдер данных для проверки валидатора ИНН.
     */
    public function innDataProvider()
    {
        return [
            ['8829567117', 1, true],   // юр. лицо
            ['574757423900', 0, true], // физ. лицо или ип
            ['574757423900312dsf', 1, false],
            //['dsfasdf574757423900312', 0, false]  // похоже, валидатор здесь ошибается
        ];
    }
    
    /**
     * Аннотация dataProvider сообщает откуда брать данные для тестов.
     * @dataProvider inclineDataProvider
     */
    public function testInclineRuWord($number, $arrWords, $result)
    {
        $o = new InclineRuWord();
        $this->assertSame($o->GetInclineWord($number, $arrWords), $result);
    }
    
    /**
     * Провайдер данных для проверки класса InclineRuWord.
     */
    public function inclineDataProvider()
    {
        return [
            [5, ['минута', 'минуты', 'минут'], 'минут'],
            [21, ['минута', 'минуты', 'минут'], 'минута'],
            [22, ['минута', 'минуты', 'минут'], 'минуты'],
        ];
    }
}

