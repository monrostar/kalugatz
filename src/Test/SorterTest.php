<?php

namespace App\Test;

use PHPUnit\Framework\TestCase;
use App\Sorter\Sorter;
use App\Sorter\LetterSortBehavior;

class SorterTest extends TestCase
{
    /**
     * @dataProvider additionProviderGood
     */
    public function testLetterSortBehaviorGood($string, $expected)
    {
        $sorter = new Sorter(new LetterSortBehavior());
        $this->assertEquals($expected, $sorter->sort($string));
    }

    /**
     * @dataProvider additionProviderBad
     */
    public function testLetterSortBehaviorBad($string, $expected)
    {
        $sorter = new Sorter(new LetterSortBehavior());
        $this->assertNotEquals($expected, $sorter->sort($string));
    }

    public function additionProviderGood()
    {
        return [
            ["лимон апельсин банан яблоко", "илмно аеилнпсь аабнн бклооя"],
            ["lemon orange banana apple", "elmno aegnor aaabnn aelpp"],
            ["αβγαβγ αβγαβγαβγ", "ααββγγ αααβββγγγ"],
        ];
    }

    public function additionProviderBad()
    {
        return [
            ["Тут кваказябра", "Ой ошибка"],
            ["Тут тоже кваказябра", "Тут тоже кваказябра"],
        ];
    }
}
